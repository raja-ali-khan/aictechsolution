<template>
<!-- contact -->
<form @submit.prevent="submitForm">

    <div class="pb-3" v-if="errors">
        <ul>
            <li v-for="(messages, field) in errors" :key="field">
                <span class="text-red" v-for="(message, index) in messages" :key="index">
                    {{ message }}
                </span>
            </li>
        </ul>
    </div>

    <h4 class="mil-mb-60"><span class="mil-accent">01.</span> Tell Us About Yourself</h4>
    <div class="row">
        <div class="col-lg-6">

            <div class="mil-input-frame mil-dark-input mil-mb-30">
                <label class="mil-h6 mil-dark"><span>First Name</span></label>
                <input type="first_name" v-model="form.first_name" name="first_name" required placeholder="John">
            </div>

        </div>
        <div class="col-lg-6">

            <div class="mil-input-frame mil-dark-input mil-mb-30">
                <label class="mil-h6"><span>Last Name</span></label>
                <input type="last_name" v-model="form.last_name" name="last_name" required placeholder="Jones">
            </div>

        </div>
        <div class="col-lg-6">

            <div class="mil-input-frame mil-dark-input mil-mb-30">
                <label class="mil-h6"><span>Email Address</span></label>
                <input type="email" v-model="form.email" name="email" required placeholder="doe@mydomain.com">
            </div>

        </div>
        <div class="col-lg-6">

            <div class="mil-input-frame mil-dark-input mil-mb-30">
                <label class="mil-h6"><span>Phone</span></label>
                <input type="phone_number" v-model="form.phone_number" name="phone_number" placeholder="Enter your phone number">
            </div>
        </div>
        <div class="col-lg-6 mb-5">
            <div class="mil-input-frame mil-dark-input mil-mb-30">
                <label class="mil-h6"><span>Project Description</span></label>
                <input type="project_description" v-model="form.project_description" name="Project Description" placeholder="Enter your Message">
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-lg-12">

            <button type="submit" class="mil-button mil-border mil-fw"><span>Submit
                    Now</span></button>

        </div>

    </div>

    <div class="alert-success" style="display: none;">
        <h5>Thanks, your message is sent successfully.</h5>
    </div>
    <div class="alert-error" style="display: none;">
        <h5>Error! Message could not be sent.</h5>
    </div>
</form>
</template>

<script>
import axios from 'axios';
export default {
    name: 'ContactForm',
    data() {
        return {
            form: {
                first_name: '',
                last_name: '',
                email: '',
                phone_number: '',
                project_description: '',
            },
            errors: {},
        };
    },

    methods: {
        async submitForm() {
            try {
                const response = await axios.post('contact-us', this.form);
                // Handle success (e.g., display success message)
                console.log('Form submitted successfully:', response.data);
                this.form = {
                    first_name: '',
                    last_name: '',
                    email: '',
                    phone_number: '',
                    project_description: '',
                };
                this.errors = {};
            } catch (error) {
                // Handle error (e.g., display error message)
                console.error('Form submission error:', error);
            }
        },
    },
}
</script>
