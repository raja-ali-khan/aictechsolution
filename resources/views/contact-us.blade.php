@extends('layouts.app')
@section('title', 'contact-us')
@section('content')

<!-- wrapper -->
<div class="mil-wrapper">


    <!-- banner -->
    <div class="mil-banner-sm mil-deep-bg">
        <img src="img/deco/map.png" alt="background" class="mil-background-image">
        <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
        <div class="mil-banner-content">
            <div class="container mil-relative">
                <ul class="mil-breadcrumbs mil-mb-30">
                    <li><a href="home-1.html">Home</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
                <h2 class="mil-uppercase">Let’s discuss your opportunity</h2>
            </div>
        </div>
    </div>
    <!-- banner end -->



    <!-- contact -->
    <section class="mil-contact @if($header_type == 'index') mil-gradient-bg  @endif mil-p-120-0">
        @if($header_type == 'index') <div class="mil-deco mil-deco-accent" style="top: 0; right: 10%;"></div> @endif
        <div class="container">
            @if($header_type == 'index') <h2 class="mil-light mil-mb-90">Contact <span class="mil-accent">Us</span></h2>
            @endif
            <div class="row @if($header_type == 'contact-us') justify-content-between @endif">
                <div class="col-lg-8 col-xl-8 mil-mb-120">

                    {{-- <form id="formContact" method="post" enctype="multipart/form-data">

                        <h4 class="mil-mb-60"><span class="mil-accent">01.</span> Tell Us About Yourself</h4>

                        <div class="row">
                            <div class="col-lg-6">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6 mil-dark"><span>First Name</span></label>
                                    <input type="text" name="first_name" required placeholder="John">
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6"><span>Last Name</span></label>
                                    <input type="text" name="last_name" required placeholder="Jones">
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6"><span>Email Address</span></label>
                                    <input type="email" name="email" required placeholder="doe@mydomain.com">
                                </div>

                            </div>
                            <div class="col-lg-6">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6"><span>Phone</span></label>
                                    <input type="tel" name="phone" placeholder="Enter your phone number">
                                </div>

                            </div>
                            <div class="col-lg-6">


                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6 mil-dark"><span>Company</span></label>
                                    <input type="text" name="company" placeholder="Your company name">
                                </div>

                            </div>
                            <div class="col-lg-6 mil-mb-30">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6 mil-dark"><span>Role</span></label>
                                    <input type="text" name="role" placeholder="Your role">
                                </div>

                            </div>
                        </div>

                        <h4 class="mil-mb-60"><span class="mil-accent">02.</span> What Can We Help You With?</h4>

                        <div class="row">
                            <div class="col-lg-6 mil-mb-30">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6 mil-dark"><span>Project Category</span></label>
                                    <input type="text" name="category" placeholder="Product Design">
                                </div>

                            </div>
                        </div>

                        <h4 class="mil-mb-60"><span class="mil-accent">03.</span> Tell Us About Your Project</h4>

                        <div class="row">

                            <div class="col-lg-12">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6"><span>Project Description</span></label>
                                    <textarea placeholder="Your Message" name="message"
                                        class="mil-shortened"></textarea>
                                </div>

                            </div>

                            <div class="col-lg-12">
                                <div class="mil-attach-frame mil-dark mil-mb-30">
                                    <i class="fas fa-paperclip"></i>
                                    <label class="mil-custom-file-input">
                                        <span>Attach your file</span>
                                        <input type="file" name="userfile" id="mil-file-input" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                                          text/plain, application/pdf, image/*">
                                    </label>
                                    <p class="mil-text-sm mil-light-soft">up to 20MB</p>
                                </div>
                            </div>

                            <div class="col-lg-6 mil-mb-30">

                                <div class="mil-input-frame mil-dark-input mil-mb-30">
                                    <label class="mil-h6 mil-dark"><span>Project Budget</span></label>
                                    <input type="number" name="budget" placeholder="123">
                                </div>

                            </div>

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
                    </form> --}}
                    <contact-form></contact-form>

                </div>

                <div class="col-lg-4 col-xl-3 mil-mb-120">

                    <div class="mil-mb-60">
                        <h5 class="mil-list-title mil-mb-30">Support Request</h5>
                        <p class="mil-mb-20">Facing Issues? Reach out for quick support</p>
                        <!-- <a href="contact.html" class="mil-link mil-link-sm"><span>Support Now</span><i
                                class="fas fa-arrow-right"></i></a> -->
                    </div>

                    <div class="mil-divider mil-mb-60"></div>

                    <div class="mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/8.svg" alt="icon">
                        </div>
                        <h5 class="mil-list-title mil-mb-30">Need Help?</h5>
                        <p>We're Here to Help</p>
                    </div>

                    {{-- <div class="mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/9.svg" alt="icon">
                        </div>
                        <h5 class="mil-list-title mil-mb-30">Needs More Info?</h5>
                        <p>For technical questions or billing questions, please contact Customer Care.</p>
                    </div>

                    <div class="mil-divider mil-mb-60"></div>

                    <a href="contact.html" class="mil-link mil-link-sm mil-mb-15"><span>Legality Guide</span><i
                            class="fas fa-arrow-right"></i></a><br>
                    <a href="contact.html" class="mil-link mil-link-sm"><span>Security Center</span><i
                            class="fas fa-arrow-right"></i></a> --}}

                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->

    <!-- map -->
    <!-- <div>
        <div class="mil-map-frame">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.289421122936!2d-74.0577166!3d40.7107384!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250aee3ee6da7%3A0xe8a316c6c836011f!2sBuddy&#39;s%20JC!5e0!3m2!1sen!2sua!4v1682071433844!5m2!1sen!2sua"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container"></div>
    </div> -->
    <!-- map end -->

    <!-- contact info -->
    <!-- <section class="mil-p-120-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">

                    <div class="mil-mb-60">
                        <h4 class="mil-mb-30">United States</h4>
                        <h5 class="mil-list-title mil-mb-15">New York</h5>
                        <p class="mil-mb-30">525, North Tryon Street, Suite 1600, Charlotte, NC
                            28202-0213</p>
                        <div class="mil-divider mil-divider-left mil-mb-30"></div>

                        <h6 class="mil-mb-15"><span class="mil-accent">+ 90</span> 700 300 000</h6>
                        <h6><span class="mil-accent">usa</span>.support@mydomain.com</h6>
                    </div>

                </div>
                <div class="col-xl-4">

                    <div class="mil-mb-60">
                        <h4 class="mil-mb-30">Germany</h4>
                        <h5 class="mil-list-title mil-mb-15">Berlin</h5>
                        <p class="mil-mb-30">501, Satyamev Eminence, Science City Road,
                            Ahmedabad, Gujarat - 380060</p>
                        <div class="mil-divider mil-divider-left mil-mb-30"></div>

                        <h6 class="mil-mb-15"><span class="mil-accent">+ 90</span> 700 300 000</h6>
                        <h6><span class="mil-accent">germany</span>.support@mydomain.com</h6>
                    </div>

                </div>
                <div class="col-xl-4">

                    <div class="mil-mb-60">
                        <h4 class="mil-mb-30">France</h4>
                        <h5 class="mil-list-title mil-mb-15">Paris</h5>
                        <p class="mil-mb-30">397 Bedford Highway, Suite 323 Halifax NS B3M 2L3 Science
                            City Road</p>
                        <div class="mil-divider mil-divider-left mil-mb-30"></div>

                        <h6 class="mil-mb-15"><span class="mil-accent">+ 90</span> 700 300 000</h6>
                        <h6><span class="mil-accent">france</span>.support@mydomain.com</h6>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
    <!-- contact info end -->

</div>
<!-- wrapper end -->

@endsection