@extends('layouts.app')
@section('title', 'Home Page')
@section('content')

<!-- wrapper -->
<div class="mil-wrapper">
    <!-- banner -->
    <div class="mil-banner mil-top-space-0">
        <div class="swiper-container mil-banner-slideshow">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="img/photo/1.jpg" class="mil-background-image" style="object-position: center"
                        data-swiper-parallax="-100" data-swiper-parallax-scale="1.1" alt="image">
                </div>
                <div class="swiper-slide">
                    <img src="img/photo/2.jpg" class="mil-background-image" style="object-position: center"
                        data-swiper-parallax="-100" data-swiper-parallax-scale="1.1" alt="image">
                </div>
                <div class="swiper-slide">
                    <img src="img/photo/3.jpg" class="mil-background-image" style="object-position: center"
                        data-swiper-parallax="-100" data-swiper-parallax-scale="1.1" alt="image">
                </div>
            </div>
        </div>
        <div class="mil-overlay"></div>

        <div class="mil-banner-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8">
                        <span class="mil-suptitle mil-mb-60"><span class="mil-light">The Next</span> <span
                                class="mil-accent">Gen</span></span>
                        <h1 class="mil-mb-60"><span class="mil-uppercase mil-light">We Provide Services <br>and
                                Solutions</span> <span class="mil-font-3 mil-accent">To Enterprise</span></h1>
                        <div class="mil-flex-hori-center">
                            <div>
                                <a href="contact.html" class="mil-button mil-border mil-light"><span>Let’s
                                        Talk</span></a>
                            </div>
                            <p class="mil-button-descr mil-light-soft">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="mil-illustration-1">
                            <div class="mil-item mil-item-1">
                                <div class="mil-plus">
                                    <div class="mil-hover-window">
                                        <div class="mil-window-content">
                                            <h5 class="mil-dark mil-mb-15">Experts</h5>
                                            <div class="mil-divider mil-divider-left mil-mb-15"></div>
                                            <p class="mil-text-sm">And here's some amazing content. It's very engaging.
                                                Right?</p>
                                        </div>
                                    </div>
                                    <div class="mil-item-hover">
                                        <div class="mil-plus-icon">+</div>
                                        <h6 class="mil-light">Dedicated Team</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="mil-item mil-item-2">
                                <div class="mil-plus">
                                    <div class="mil-hover-window">
                                        <div class="mil-window-content">
                                            <h5 class="mil-dark mil-mb-15">Experts</h5>
                                            <div class="mil-divider mil-divider-left mil-mb-15"></div>
                                            <p class="mil-text-sm">And here's some amazing content. It's very engaging.
                                                Right?</p>
                                        </div>
                                    </div>
                                    <div class="mil-item-hover">
                                        <div class="mil-plus-icon">+</div>
                                        <h6 class="mil-light">Developers</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="mil-item mil-item-3">
                                <div class="mil-plus">
                                    <div class="mil-hover-window">
                                        <div class="mil-window-content">
                                            <h5 class="mil-dark mil-mb-15">Experts</h5>
                                            <div class="mil-divider mil-divider-left mil-mb-15"></div>
                                            <p class="mil-text-sm">And here's some amazing content. It's very engaging.
                                                Right?</p>
                                        </div>
                                    </div>
                                    <div class="mil-item-hover">
                                        <div class="mil-plus-icon">+</div>
                                        <h6 class="mil-light">Designers</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- partners -->
    <div class="mil-partners mil-p-90-60">
        <div class="container">
            <div class="mil-partners-frame">
                <a href="#."><img src="img/partners/1.png" alt="partner"></a>
                <a href="#."><img src="img/partners/2.png" alt="partner"></a>
                <a href="#."><img src="img/partners/3.png" alt="partner"></a>
                <a href="#."><img src="img/partners/4.png" alt="partner"></a>
                <a href="#."><img src="img/partners/5.png" alt="partner"></a>
                <a href="#."><img src="img/partners/6.png" alt="partner"></a>
            </div>
        </div>
    </div>
    <!-- partners end -->

    <div class="container">
        <div class="mil-divider"></div>
    </div>

    <!-- services -->
    <section class="mil-services mil-p-120-90">
        <div class="mil-deco" style="top: 0; right: 20%;"></div>
        <div class="container">
            <h2 class="mil-mb-30">How We Can <span class="mil-accent">Help You</span></h2>
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <h4 class="mil-mb-60 mil-mt-30">IT Services</h4>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/1.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">01</span> Dedicated Team</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/2.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">02</span> QA and Testing</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/3.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">03</span> SaaS</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <h4 class="mil-mb-60 mil-mt-30">IT Solutions</h4>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/4.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">01</span> Blockchain</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/5.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">02</span> Artificial Intelligence</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/6.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">03</span> Internet of Things</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services end -->

    <div class="container">
        <div class="mil-divider"></div>
    </div>

    <!-- portfolio -->
    <section class="mil-works mil-p-120-90">
        <div class="mil-deco" style="top: 0; right: 40%;"></div>
        <div class="container">
            <div class="row align-items-center mil-mb-60-adapt">
                <div class="col-md-6 col-xl-6">

                    <h2 class="mil-mb-30">Latest Projects</h2>

                </div>
                <div class="col-md-6 col-xl-6">

                    <div class="mil-adaptive-right">
                        <div class="mil-slider-nav mil-mb-30">
                            <div class="mil-slider-btn-prev mil-works-prev"><i class="fas fa-arrow-left"></i><span
                                    class="mil-h6">Prev</span></div>
                            <div class="mil-slider-btn-next mil-works-next"><span class="mil-h6">Next</span><i
                                    class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-container mil-works-slider mil-mb-90">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <a href="project.html" class="mil-card">
                            <div class="mil-cover-frame">
                                <img src="img/projects/1.jpg" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                    <h6>by: <span class="mil-accent">Jane Meldrum</span></h6>
                                </div>
                                <div class="mil-card-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide">

                        <a href="project.html" class="mil-card">
                            <div class="mil-cover-frame">
                                <img src="img/projects/2.jpg" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                    <h6>by: <span class="mil-accent">Nguta Ithya</span></h6>
                                </div>
                                <div class="mil-card-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide">

                        <a href="project.html" class="mil-card">
                            <div class="mil-cover-frame">
                                <img src="img/projects/3.jpg" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                    <h6>by: <span class="mil-accent">Roy Bricks</span></h6>
                                </div>
                                <div class="mil-card-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide">

                        <a href="project.html" class="mil-card">
                            <div class="mil-cover-frame">
                                <img src="img/projects/4.jpg" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                    <h6>by: <span class="mil-accent">Nguta Ithya</span></h6>
                                </div>
                                <div class="mil-card-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 col-xl-6">

                    <a href="portfolio.html" class="mil-link mil-mb-30"><span>View All Cases</span><i
                            class="fas fa-arrow-right"></i></a>

                </div>
                <div class="col-md-6 col-xl-6">

                    <div class="mil-adaptive-right">
                        <a href="contact.html" class="mil-button mil-border mil-mb-30"><span>Get Started</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- portfolio end -->

    <!-- how it works -->
    <section class="mil-how-it-works mil-deep-bg mil-p-120-90">
        <div class="mil-deco" style="top: 0; right: 20%;"></div>
        <div class="mil-deco" style="bottom: 0; left: 30%; transform: rotate(180deg)"></div>
        <div class="container">
            <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Discover Our Company</span>
            <h2 class="mil-mb-90">How We <span class="mil-accent">Collaborate</span> With You</h2>
            <div class="row">
                <div class="col-md-6 col-xl-3">

                    <div class="mil-mb-60">
                        <div class="mil-icon-box-head mil-mb-30">
                            <div class="mil-icon-frame mil-icon-frame-sm">
                                <img src="img/icons/sm/1.svg" alt="icon">
                            </div>
                            <h5>Thinking Big</h5>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <div class="mil-mb-60">
                        <div class="mil-icon-box-head mil-mb-30">
                            <div class="mil-icon-frame mil-icon-frame-sm">
                                <img src="img/icons/sm/2.svg" alt="icon">
                            </div>
                            <h5>Starting Small</h5>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <div class="mil-mb-60">
                        <div class="mil-icon-box-head mil-mb-30">
                            <div class="mil-icon-frame mil-icon-frame-sm">
                                <img src="img/icons/sm/3.svg" alt="icon">
                            </div>
                            <h5>Creating Fast</h5>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <div class="mil-mb-60">
                        <div class="mil-icon-box-head mil-mb-30">
                            <div class="mil-icon-frame mil-icon-frame-sm">
                                <img src="img/icons/sm/4.svg" alt="icon">
                            </div>
                            <h5>Innovating Scale</h5>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>

                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 col-xl-6">

                    <a href="#." class="mil-link mil-mb-30"><span>Learn More</span><i
                            class="fas fa-arrow-right"></i></a>

                </div>
                <div class="col-md-6 col-xl-6">

                    <div class="mil-adaptive-right">
                        <a href="#." class="mil-button mil-border mil-mb-30"><span>How We Work</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- how it works end -->

    <!-- skills -->
    <section class="mil-skills mil-p-120-90">
        <div class="container">
            <div class="row align-items-end mil-mb-90">
                <div class="col-xl-6">

                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Our Skill</span>
                    <h2>Business <span class="mil-accent">Success</span> With <br>Technology</h2>

                </div>
                <div class="col-xl-6">

                    <p class="mil-mt-60-adapt">It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                        has a more-or-less normal distribution of letters, as opposed to using content here.</p>

                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 col-xl-3">

                    <h6 class="mil-mb-30">Software Development</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 65%"></div>
                        </div>
                        <div class="mil-text-sm">65%</div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <h6 class="mil-mb-30">Web Development</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 90%"></div>
                        </div>
                        <div class="mil-text-sm">90%</div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <h6 class="mil-mb-30">UX / UI Design</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 50%"></div>
                        </div>
                        <div class="mil-text-sm">50%</div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <h6 class="mil-mb-30">App Development</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 95%"></div>
                        </div>
                        <div class="mil-text-sm">95%</div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <h6 class="mil-mb-30">Internet of Things</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 60%"></div>
                        </div>
                        <div class="mil-text-sm">60%</div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <h6 class="mil-mb-30">Artificial Intelligence</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 90%"></div>
                        </div>
                        <div class="mil-text-sm">90%</div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <h6 class="mil-mb-30">Blockchain</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 80%"></div>
                        </div>
                        <div class="mil-text-sm">80%</div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3 mil-text-center">

                    <a href="#." class="mil-link mil-mb-30"><span>More</span><i class="fas fa-arrow-right"></i></a>

                </div>
            </div>
        </div>
    </section>
    <!-- skills end -->

    <div class="container">
        <div class="mil-divider"></div>
    </div>

    <!-- blog -->
    <section class="mil-blog mil-p-120-120">
        <div class="mil-deco" style="top: 0; right: 30%;"></div>
        <div class="container">
            <div class="row align-items-center mil-mb-90">
                <div class="col-md-6 col-xl-6">


                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Our Latest News</span>
                    <h2>Latest Thinking</h2>

                </div>
                <div class="col-md-6 col-xl-6">

                    <div class="mil-adaptive-right mil-mt-60-adapt">
                        <div class="mil-slider-nav">
                            <div class="mil-slider-btn-prev mil-blog-prev"><i class="fas fa-arrow-left"></i><span
                                    class="mil-h6">Prev</span></div>
                            <div class="mil-slider-btn-next mil-blog-next"><span class="mil-h6">Next</span><i
                                    class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-container mil-blog-slider mil-mb-90">
                <div class="swiper-wrapper">
                    <div class="swiper-slide mil-slide-50">

                        <a href="publication.html" class="mil-card">
                            <div class="mil-cover-frame">
                                <img src="img/blog/1.jpg" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                    <h6>by: <span class="mil-accent">Jane Meldrum</span></h6>
                                </div>
                                <div class="mil-card-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide mil-slide-25">

                        <a href="publication.html" class="mil-card mil-card-sm mil-reverse-sm">
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                    <h6>by: <span class="mil-accent">Jane Meldrum</span></h6>
                                </div>
                                <div class="mil-card-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class="mil-cover-frame">
                                <img src="img/blog/2.jpg" alt="project">
                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide mil-slide-25">

                        <a href="publication.html" class="mil-card mil-card-sm">
                            <div class="mil-cover-frame">
                                <img src="img/blog/3.jpg" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                    <h6>by: <span class="mil-accent">Jane Meldrum</span></h6>
                                </div>
                                <div class="mil-card-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="swiper-slide mil-slide-50">

                        <a href="publication.html" class="mil-card">
                            <div class="mil-cover-frame">
                                <img src="img/blog/4.jpg" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                    <h6>by: <span class="mil-accent">Jane Meldrum</span></h6>
                                </div>
                                <div class="mil-card-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide mil-slide-25">

                        <a href="publication.html" class="mil-card mil-card-sm mil-reverse-sm">
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                    <h6>by: <span class="mil-accent">Jane Meldrum</span></h6>
                                </div>
                                <div class="mil-card-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class="mil-cover-frame">
                                <img src="img/blog/5.jpg" alt="project">
                            </div>

                        </a>

                    </div>
                    <div class="swiper-slide mil-slide-25">

                        <a href="publication.html" class="mil-card mil-card-sm">
                            <div class="mil-cover-frame">
                                <img src="img/blog/6.jpg" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Easy & Most Powerful Server Platform.</h4>
                                    <h6>by: <span class="mil-accent">Jane Meldrum</span></h6>
                                </div>
                                <div class="mil-card-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">

                    <a href="blog.html" class="mil-link"><span>View More Insights</span><i
                            class="fas fa-arrow-right"></i></a>

                </div>
            </div>
        </div>
    </section>
    <!-- blog end -->

    <!-- reviews -->
    <section class="mil-reviews mil-deep-bg mil-p-120-120">
        <div class="mil-deco" style="top: 0; right: 30%;"></div>
        <div class="container">
            <div class="row align-items-center mil-mb-90">
                <div class="col-md-6 col-xl-6">

                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Testimonial</span>
                    <h2>What Our <span class="mil-accent">Clients</span> Say</h2>

                </div>
                <div class="col-md-6 col-xl-6">

                    <div class="mil-adaptive-right mil-mt-60-adapt">
                        <div class="mil-slider-nav">
                            <div class="mil-slider-btn-prev mil-revi-prev"><i class="fas fa-arrow-left"></i><span
                                    class="mil-h6">Prev</span></div>
                            <div class="mil-slider-btn-next mil-revi-next"><span class="mil-h6">Next</span><i
                                    class="fas fa-arrow-right"></i></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-container mil-revi-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="mil-review">
                            <div class="mil-stars mil-mb-30">
                                <img src="img/icons/sm/11.svg" alt="quote">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <p class="mil-mb-30">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                            <div class="mil-author">
                                <img src="img/faces/1.jpg" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Tamzyn French</h6>
                                    <span class="mil-text-sm">Agency Design</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-review">
                            <div class="mil-stars mil-mb-30">
                                <img src="img/icons/sm/11.svg" alt="quote">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <p class="mil-mb-30">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                            <div class="mil-author">
                                <img src="img/faces/2.jpg" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Margaret Williams</h6>
                                    <span class="mil-text-sm">Agency Design</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-review">
                            <div class="mil-stars mil-mb-30">
                                <img src="img/icons/sm/11.svg" alt="quote">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <p class="mil-mb-30">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                            <div class="mil-author">
                                <img src="img/faces/3.jpg" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Tarryn Gillies</h6>
                                    <span class="mil-text-sm">Agency Design</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-review">
                            <div class="mil-stars mil-mb-30">
                                <img src="img/icons/sm/11.svg" alt="quote">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <p class="mil-mb-30">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                            <div class="mil-author">
                                <img src="img/faces/4.jpg" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Tamzyn French</h6>
                                    <span class="mil-text-sm">Agency Design</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-review">
                            <div class="mil-stars mil-mb-30">
                                <img src="img/icons/sm/11.svg" alt="quote">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <p class="mil-mb-30">It is a long established fact that a reader will be distracted by the
                                readable content of a page when looking at its layout.</p>
                            <div class="mil-author">
                                <img src="img/faces/2.jpg" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Margaret Williams</h6>
                                    <span class="mil-text-sm">Agency Design</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- reviews end -->

    <!-- contact -->
    <section class="mil-contact mil-gradient-bg mil-p-120-0">
        <div class="mil-deco mil-deco-accent" style="top: 0; right: 10%;"></div>
        <div class="container">
            <h2 class="mil-light mil-mb-90">Contact <span class="mil-accent">Us</span></h2>
            <form id="formFeedback" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6">

                        <div class="mil-input-frame mil-mb-30">
                            <label><span class="mil-light">Name</span><span class="mil-accent">Required</span></label>
                            <input type="text" name="name" required placeholder="Enter Your Name Here">
                        </div>
                        <div class="mil-input-frame mil-mb-30">
                            <label><span class="mil-light">Email Adress</span><span
                                    class="mil-accent">Required</span></label>
                            <input type="email" name="email" required id="email" placeholder="Your Email">
                        </div>
                        <div class="mil-input-frame mil-mb-60">
                            <label><span class="mil-light">Phone</span><span
                                    class="mil-light-soft">Optional</span></label>
                            <input type="tel" name="phone" placeholder="Your Phone">
                        </div>
                        <div class="mil-attach-frame mil-mb-60">
                            <i class="fas fa-paperclip"></i>
                            <label class="mil-custom-file-input">
                                <span>Attach your file</span>
                                <input type="file" name="userfile" accept="application/msword, application/vnd.ms-excel, application/vnd.ms-powerpoint,
                                text/plain, application/pdf, image/*" id="mil-file-input">
                            </label>
                            <p class="mil-text-sm mil-light-soft">up to 20MB</p>
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="mil-input-frame mil-mb-30">
                            <label><span class="mil-light">Your Message</span><span
                                    class="mil-accent">Required</span></label>
                            <textarea placeholder="Your Message" name="message"></textarea>
                        </div>
                        <p class="mil-text-sm mil-light-soft mil-mb-15">We will process your personal information in
                            accordance with our Privacy Policy.</p>

                        <div class="mil-checbox-frame mil-mb-60">
                            <input class="mil-checkbox" id="checkbox-1" type="checkbox" name="agree" value="1" required>
                            <label for="checkbox-1" class="mil-text-sm mil-light">I would like to be contacted with news
                                and updates about your <a href="#." class="mil-accent">events and services</a></label>
                        </div>

                    </div>
                    <div class="col-12">

                        <button type="submit" class="mil-button mil-accent-bg mil-fw"><span>Send Message
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
        </div>
    </section>
    <!-- contact end -->

</div>
<!-- wrapper end -->

@endsection