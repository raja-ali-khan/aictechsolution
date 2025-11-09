<template>
    <!-- contact -->
    <form @submit.prevent="submitForm">
        <h4 v-if="!isIndexRoute" class="mil-mb-60"><span class="mil-accent">01.</span> Tell Us About Yourself</h4>
        <div class="row">
            <div class="col-lg-6">
                <div class="mil-input-frame mil-mb-30" :class="{ 'mil-dark-input': isNotIndexRoute }">
                    <label class="mil-h6 mil-dark"><span :class="{ 'mil-light': isIndexRoute }">First Name</span>
                        <span :class="{ 'mil-accent': isIndexRoute }">*</span> </label>
                    <input type="text" v-model="form.first_name" name="first_name" placeholder="John">
                    <div v-if="errors.first_name.length" class="text-red">
                        <span v-for="(error, index) in errors.first_name" :key="index">{{ error }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mil-input-frame mil-mb-30" :class="{ 'mil-dark-input': isNotIndexRoute }">
                    <label class="mil-h6"><span :class="{ 'mil-light': isIndexRoute }">Last Name</span>
                        <span :class="{ 'mil-accent': isIndexRoute }">*</span></label>
                    <input type="text" v-model="form.last_name" name="last_name" placeholder="Jones">
                    <div v-if="errors.last_name.length" class="text-red">
                        <span v-for="(error, index) in errors.last_name" :key="index">{{ error }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mil-input-frame mil-mb-30" :class="{ 'mil-dark-input': isNotIndexRoute }">
                    <label class="mil-h6"><span :class="{ 'mil-light': isIndexRoute }">Email Address</span>
                        <span :class="{ 'mil-accent': isIndexRoute }">*</span></label>
                    <input type="email" v-model="form.email" name="email" placeholder="doe@mydomain.com">
                    <div v-if="errors.email.length" class="text-red">
                        <span v-for="(error, index) in errors.email" :key="index">{{ error }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mil-input-frame mil-mb-30" :class="{ 'mil-dark-input': isNotIndexRoute }">
                    <label class="mil-h6"><span :class="{ 'mil-light': isIndexRoute }">Phone</span>
                        <span :class="{ 'mil-accent': isIndexRoute }">*</span></label>
                    <input type="tel" v-model="form.phone_number" name="phone_number" placeholder="Enter your phone number">
                    <div v-if="errors.phone_number.length" class="text-red">
                        <span v-for="(error, index) in errors.phone_number" :key="index">{{ error }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-5">
                <div class="mil-input-frame mil-mb-30" :class="{ 'mil-dark-input': isNotIndexRoute }">
                    <label class="mil-h6"><span :class="{ 'mil-light': isIndexRoute }">Project Description</span>
                        <span :class="{ 'mil-accent': isIndexRoute }">*</span></label>
                    <input type="text" v-model="form.project_description" name="project_description" placeholder="Enter your Message">
                    <div v-if="errors.project_description.length" class="text-red">
                        <span v-for="(error, index) in errors.project_description" :key="index">{{ error }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <button type="submit" class="mil-button mil-border mil-fw" :class="{ 'mil-accent-bg': isIndexRoute }"><span>Submit Now</span></button>
            </div>
        </div>
    </form>
    <h1 v-if="success" class="text-success pt-5 text-center">Form submitted successfully.</h1>
</template>


<script>
export default {
    name: 'ContactForm',
    props: {
        headerType: {
            type: String,
            required: true
        }
    },
    data() {
        return {
            form: {
                first_name: '',
                last_name: '',
                email: '',
                phone_number: '',
                project_description: '',
            },
            errors: {
                first_name: [],
                last_name: [],
                email: [],
                phone_number: [],
                project_description: [],
            },
            success: false,
        };
    },
    computed: {
        isIndexRoute() {
            return this.headerType === 'index' || this.headerType === 'about-us';
        },

        isNotIndexRoute() {
            return this.headerType !== 'index' && this.headerType !== 'about-us';
        },
    },
    methods: {
        async submitForm() {
            try {
                const response = await axios.post('/contact-us', this.form);
                this.success = true;
                this.form = {
                    first_name: '',
                    last_name: '',
                    email: '',
                    phone_number: '',
                    project_description: '',
                };
                this.errors = {
                    first_name: [],
                    last_name: [],
                    email: [],
                    phone_number: [],
                    project_description: [],
                };
            } catch (error) {
                if (error.response && error.response.status === 422) {
                    const responseErrors = error.response.data.errors;
                    for (const field in this.errors) {
                        if (responseErrors[field]) {
                            this.errors[field] = responseErrors[field];
                        } else {
                            this.errors[field] = [];
                        }
                    }
                } else {
                    console.error('An error occurred:', error);
                }
            }
        },
    },
};
</script>
