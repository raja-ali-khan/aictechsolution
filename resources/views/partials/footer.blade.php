<!-- footer -->
@if (isset($header_type) && ($header_type == 'index' || $header_type == 'about-us'))
<footer class="mil-dark-bg">
    <img src="img/deco/map.png" alt="background" class="mil-footer-bg">
    <div class="container">
        <div class="mil-footer-content mil-p-120-90">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-4 mil-mb-30">

                    <img src="img/projects/aic-logo.png" alt="" class="mil-logo mil-mb-30" style="width: 250px; height: 150px;">

                    <p class="mil-light-soft mil-mb-30">We specialize in delivering top-notch IT support,
                        cloud solutions, cybersecurity, and system administration services to businesses of all
                        sizes.</p>

                    <!-- <a href="#." class="mil-app-btn mil-mb-5">
                        <i class="fab fa-google-play"></i>
                        <div class="mil-app-text">
                            <span class="mil-accent mil-text-sm">Available on the</span>
                            <div class="mil-h6">Google Play</div>
                        </div>
                    </a>

                    <a href="#." class="mil-app-btn">
                        <i class="fab fa-apple"></i>
                        <div class="mil-app-text">
                            <span class="mil-accent mil-text-sm">Download on the</span>
                            <div class="mil-h6">App Store</div>
                        </div>
                    </a> -->

                </div>
                <div class="col-xl-7 mil-mt-60-adapt">

                    <div class="row">
                        <div class="col-lg-7 mil-mb-30">

                            <h3 class="mil-light mil-up-font mil-mb-30">Join The <span class="mil-accent">AIC Tech
                                    Solution</span>
                                <br>Experience
                            </h3>
                            <p class="mil-light-soft">We specialize in delivering<br>top-notch
                                IT support.</p>

                        </div>
                        <div class="col-lg-5 mil-mb-30">

                            <!-- <form>

                                <input class="mil-rounded-input mil-text-center mil-mb-5" type="text"
                                    placeholder="Your email address">
                                <button class="mil-button mil-accent-bg mil-fw"><span>Subscribe Now</span></button>

                            </form> -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="mil-divider mil-light"></div>

        <div class="mil-footer-links">
            <ul class="mil-social mil-light">
                <li class="mil-adapt-links"><a
                        href="https://www.facebook.com/profile.php?id=61572919086923">Facebook</a><a href="#.">FB</a>
                </li>
                <li class="mil-adapt-links"><a href="https://www.instagram.com/aictechsolution/">Instagram</a><a href="#.">IG</a></li>
                <li class="mil-adapt-links"><a href="https://www.linkedin.com/company/109979476/admin/dashboard/">LinkedIn</a><a href="#.">IN</a></li>
                {{-- <li class="mil-adapt-links"><a href="#.">Twitter</a><a href="#.">TW</a></li>
                <li class="mil-adapt-links"><a href="#.">YouTube</a><a href="#.">YT</a></li> --}}
            </ul>
            <ul class="mil-additional-links mil-light">
                <li><a href="{{route('about-us')}}">About us</a></li>
                <li><a href="{{route('services')}}">Service</a></li>
                <li><a href="{{route('solution')}}">Solution</a></li>
                <li><a href="{{route('contact-us')}}">Contact-us</a></li>
            </ul>
        </div>
    </div>
    <div class="mil-footer-bottom">
        <div class="container">
            <p class="mil-text-sm mil-light">© AIC Tech Solution {{ date('Y') }}.</p>
            <p class="mil-text-sm mil-light">All Rights Reserved.</p>
        </div>
    </div>
</footer>

@else

<!-- footer -->
<footer class="mil-dark-bg">
    <img src="img/deco/map.png" alt="background" class="mil-footer-bg">
    <div class="container">
        <div class="mil-footer-content">
            <div class="row align-items-center mil-p-120-60">
                <div class="col-xl-6 mil-mb-60">

                    <h3 class="mil-light mil-mb-15">Join The <span class="mil-accent">AIC Tech Solution</span>
                        Experience</h3>

                    <p class="mil-light-soft">We specialize in delivering top-notch
                        IT support.</p>

                </div>
                {{-- <div class="col-xl-6 mil-mb-60">
                    <form class="mil-subscribe-form">
                        <input type="text" placeholder="Your email address">
                        <button type="submit" class="mil-button mil-accent-bg">Subscribe Now</button>
                    </form>
                </div> --}}

            </div>
            <div class="mil-divider mil-light"></div>
            <div class="row justify-content-between mil-p-120-60">
                <div class="col-md-3 col-lg-3 col-xl-3 mil-mb-30">

                    <img src="img/projects/aic-logo.png" alt="" class="mil-logo mil-mb-60" style="width: 250px; height: 150px;">

                    <!-- <p class="mil-light mil-light-soft" style="margin-bottom: 45px">2307 Beverley Rd Brooklyn, <br>New
                        York 11226 USA.</p> -->

                    <ul class="mil-simple-list mil-mb-15">
                        <li class="mil-light"><span class="mil-accent">+1 (469)</span>&nbsp;<span class="mil-light-soft">
                             501-1158</span></li>
                        <li><span class="mil-accent">info@aictech</span><span class="mil-light mil-light-soft">
                            solution.com</span></li>
                    </ul>

                </div>
                <div class="col-md-8 col-lg-7 col-xl-7">

                    <div class="row justify-content-end">
                        <div class="col-md-4 col-lg-4 mil-mb-60">

                            <h4 class="mil-list-title mil-light mil-mb-60">Social</h4>

                            <ul class="mil-hover-link-list mil-light">
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=61572919086923">Facebook</a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/aictechsolution/">Instagram</a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/109979476/admin/dashboard/">LinkedIn</a>
                                </li>
                                <!-- <li>
                                    <a href="#.">Twitter</a>
                                </li>
                                <li>
                                    <a href="#.">YouTube</a>
                                </li> -->
                            </ul>

                        </div>

                        <div class="col-md-4 col-lg-4 mil-mb-60">

                            <h4 class="mil-list-title mil-light mil-mb-60">Links</h4>

                            <ul class="mil-hover-link-list mil-light">
                                <li>
                                    <a href="{{route('about-us')}}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{route('services')}}">Service</a>
                                </li>
                                <li>
                                    <a href="{{route('solution')}}">Solution</a>
                                </li>
                                <li>
                                    <a href="{{route('contact-us')}}">Contact-us</a>
                                </li>
                                {{-- <li>
                                    <a href="#.">Press</a>
                                </li> --}}
                            </ul>

                        </div>

                        {{-- <div class="col-md-4 col-lg-4 mil-mb-60">
                            <h4 class="mil-list-title mil-light mil-mb-60">Support</h4>
                            <ul class="mil-hover-link-list mil-light">
                                <li>
                                    <a href="#.">Documentation</a>
                                </li>
                                <li>
                                    <a href="#.">Support</a>
                                </li>
                                <li>
                                    <a href="#.">FAQs</a>
                                </li>
                                <li>
                                    <a href="#.">Download</a>
                                </li>
                                <li>
                                    <a href="#.">Sitemap</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="mil-footer-bottom">
        <div class="container">
            <p class="mil-text-sm mil-light">© AIC Tech Solution {{ date('Y') }}.</p>
            <p class="mil-text-sm mil-light">All Rights Reserved.</p>
        </div>
    </div>
</footer>
<!-- footer end -->
@endif
<!-- footer end -->