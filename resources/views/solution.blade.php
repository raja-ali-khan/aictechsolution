@extends('layouts.app')
@section('title', 'solution')
@section('content')

<!-- wrapper -->
<div class="mil-wrapper">

    <!-- banner -->
    <div class="mil-banner-sm mil-deep-bg">
        <img src="img/projects/aic-solution-banner.jpeg" alt="background" class="mil-background-image">
        <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
        <div class="mil-banner-content">
            <div class="container mil-relative">
                {{-- <ul class="mil-breadcrumbs mil-mb-30">
                    <li><a href="/">Home</a></li>
                    <li><a href="service-1.html">Solution</a></li>
                </ul> --}}
                <h2 class="mil-uppercase custom-banner-text">Our expertise spans various <br> fields including</h2>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- call to action -->
    <section class="mil-p-120-90">
        <div class="mil-deco" style="bottom: 0; right: 25%; transform: rotate(180deg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mil-hori-box mil-mb-30">
                        <div class="mil-mr-30">
                            <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg">
                                <img src="img/icons/md/11.svg" alt="icon">
                            </div>
                        </div>
                        <h5>Trusted by Leading Businesses: Our clients trust us to handle their IT infrastructure and
                            we’ve built long-lasting relationships with organizations of all sizes from startups to
                            enterprises</h5>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="mil-adaptive-right">
                        <a href="{{route('contact-us')}}" class="mil-button mil-border mil-mb-30"><span>Get in
                                Touch</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- call to action end -->

    <div class="container">
        <div class="mil-divider"></div>
    </div>

    <!-- title -->
    <section class="mil-p-120-0">
        <div class="container">

            <div class="mil-text-center mil-mb-90">
                <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Consulting and Solution</span>
                <h2>Let us manage your IT so you can focus on<br> what truly <span class="mil-accent">matters—growing
                        your business.</span>
                </h2>
            </div>

        </div>
    </section>
    <!-- title end -->

    <!-- about -->
    <section class="mil-deep-bg mil-p-120-0">
        <div class="container">

            <div class="swiper-container mil-tabs-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" data-hash="tab1">

                        <div class="row justify-content-between align-items-center" data-swiper-parallax-y="-100"
                            data-swiper-parallax-opacity="0">
                            <div class="col-lg-7">

                                <div class="mil-hori-box mil-mb-60">
                                    <div class="mil-mr-15">
                                        <div class="mil-icon-frame mil-icon-frame-md">
                                            <img src="img/icons/md/2.svg" alt="icon">
                                        </div>
                                    </div>
                                    <h5>Microsoft 365 Solutions</h5>
                                </div>

                                <div class="row mil-mb-60">
                                    <div class="col-lg-6">

                                        <p>Maximize the potential of Microsoft 365 with our expert setup, configuration,
                                            and migration services. We provide a seamless transition to the cloud,
                                            ensuring that your team can collaborate, communicate, and work efficiently.
                                        </p>

                                    </div>
                                    <div class="col-lg-6">

                                        <p>Cloud infrastructure setup <br>
                                            Migration and optimization<br>
                                            24/7 cloud monitoring and maintenance</p>

                                    </div>
                                </div>
                                {{--
                                <a href="#." class="mil-link mil-mb-60"><span>See More</span><i
                                        class="fas fa-arrow-right"></i></a> --}}

                            </div>
                            <div class="col-lg-4">
                                <div class="mil-circle-illustration mil-with-dots mil-mb-60"
                                    data-swiper-parallax-scale=".8">
                                    <div class="mil-circle-bg"></div>
                                    <div class="mil-image-frame">
                                        <img src="img/projects/aic-solution-5.jpeg" alt="img">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide" data-hash="tab2">

                        <div class="row justify-content-between align-items-center" data-swiper-parallax-y="-100"
                            data-swiper-parallax-opacity="0">
                            <div class="col-lg-7">

                                <div class="mil-hori-box mil-mb-60">
                                    <div class="mil-mr-15">
                                        <div class="mil-icon-frame mil-icon-frame-md">
                                            <img src="img/icons/md/1.svg" alt="icon">
                                        </div>
                                    </div>
                                    <h5>Backup and Disaster Recovery</h5>
                                </div>

                                <div class="row mil-mb-60">
                                    <div class="col-lg-6">

                                        <p>Your data is invaluable. We provide robust backup and disaster recovery
                                            solutions using Datto BCDR, Acronis, and other leading technologies. In the
                                            event of data loss or server downtime, we ensure that your business can get
                                            back on track quickly</p>

                                    </div>
                                    <div class="col-lg-6">

                                        <p>Microsoft 365 deployment <br>
                                            Office 365 migration <br>
                                            Ongoing support and troubleshooting</p>

                                    </div>
                                </div>

                                {{-- <a href="#." class="mil-link mil-mb-60"><span>See More</span><i
                                        class="fas fa-arrow-right"></i></a> --}}

                            </div>
                            <div class="col-lg-4">

                                <div class="mil-circle-illustration mil-with-dots mil-mb-60"
                                    data-swiper-parallax-scale=".8">
                                    <div class="mil-circle-bg"></div>
                                    <div class="mil-image-frame">
                                        <img src="img/projects/aic-solution-3.jpeg" alt="img">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide" data-hash="tab3">

                        <div class="row justify-content-between align-items-center" data-swiper-parallax-y="-100"
                            data-swiper-parallax-opacity="0">
                            <div class="col-lg-7">

                                <div class="mil-hori-box mil-mb-60">
                                    <div class="mil-mr-15">
                                        <div class="mil-icon-frame mil-icon-frame-md">
                                            <img src="img/icons/md/11.svg" alt="icon">
                                        </div>
                                    </div>
                                    <h5>Virtualization Solutions</h5>
                                </div>

                                <div class="row mil-mb-60">
                                    <div class="col-lg-6">

                                        <p>Virtualization is a key part of modern IT infrastructure, and we have the
                                            expertise to implement and manage virtualization technologies like VMware,
                                            Hyper-V, and Parallels Desktop. Our solutions help optimize hardware
                                            utilization, improve scalability, and streamline your operations.</p>

                                    </div>
                                    <div class="col-lg-6">

                                        <p>Backup strategy design and implementation <br>
                                            Disaster recovery planning <br>
                                            Data recovery and restoration</p>

                                    </div>
                                </div>

                                {{-- <a href="#." class="mil-link mil-mb-60"><span>See More</span><i
                                        class="fas fa-arrow-right"></i></a> --}}

                            </div>
                            <div class="col-lg-4">

                                <div class="mil-circle-illustration mil-with-dots mil-mb-60"
                                    data-swiper-parallax-scale=".8">
                                    <div class="mil-circle-bg"></div>
                                    <div class="mil-image-frame">
                                        <img src="img/projects/aic-solution-2.jpeg" alt="img">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide" data-hash="tab4">

                        <div class="row justify-content-between align-items-center" data-swiper-parallax-y="-100"
                            data-swiper-parallax-opacity="0">
                            <div class="col-lg-7">

                                <div class="mil-hori-box mil-mb-60">
                                    <div class="mil-mr-15">
                                        <div class="mil-icon-frame mil-icon-frame-md">
                                            <img src="img/icons/md/3.svg" alt="icon">
                                        </div>
                                    </div>
                                    <h5>Email and Collaboration Tools</h5>
                                </div>

                                <div class="row mil-mb-60">
                                    <div class="col-lg-6">

                                        <p>Effective communication is the backbone of any organization. We specialize in
                                            email migrations, Office 365 setup, and management, providing a reliable and
                                            secure email solution. We also ensure that collaboration tools are
                                            seamlessly integrated for maximum productivity.</p>

                                    </div>
                                    <div class="col-lg-6">

                                        <p>Server and desktop virtualization <br>
                                            Cloud-based virtual environments <br>
                                            Virtual infrastructure management</p>

                                    </div>
                                </div>

                                {{-- <a href="#." class="mil-link mil-mb-60"><span>See More</span><i
                                        class="fas fa-arrow-right"></i></a> --}}

                            </div>
                            <div class="col-lg-4">

                                <div class="mil-circle-illustration mil-with-dots mil-mb-60"
                                    data-swiper-parallax-scale=".8">
                                    <div class="mil-circle-bg"></div>
                                    <div class="mil-image-frame">
                                        <img src="img/projects/aic-solution-6.jpeg" alt="img">
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="mil-tab-buttons mil-mt-60-adapt">
                <a href="#tab1" class="mil-active"><span>Microsoft 365 Solutions</span></a>
                <a href="#tab2"><span>Backup and Disaster Recovery</span></a>
                <a href="#tab3"><span>Virtualization Solutions</span></a>
                <a href="#tab4"><span>Email and Collaboration Tools</span></a>
            </div>

        </div>
    </section>
    <!-- about end -->

    <!-- title -->
    <section class="mil-p-120-0">
        <div class="container">

            <div class="mil-text-center mil-mb-90">
                <span class="mil-suptitle mil-suptitle-2 mil-mb-30">IT Services We Offer</span>
                <h2>We manage IT you grow your business.</h2>
            </div>

        </div>
    </section>
    <!-- title end -->

    <!-- ??? -->
    <section class="mil-awards">
        <div class="row m-0">
            <div class="col-xl-6 p-0 mil-relative">
                {{--
                <img src="img/photo/14.jpg" class="mil-background-image" style="object-position: center"
                    data-swiper-parallax-scale="1.1" alt="image"> --}}
                <div class="mil-overlay mil-gradient-bg"></div>

                <div class="mil-fake-container mil-p-120-120">
                    <div class="swiper-container mil-box-slider mil-mb-120">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">

                                <div data-swiper-parallax-y="-100" data-swiper-parallax-opacity="0">
                                    <h3 class="mil-light mil-mb-120">Email migration Gmail to Office 365 etc
                                        <span class="mil-accent">Exchange server setup and management</span>
                                    </h3>
                                    <div class="mil-hori-box mil-mb-30">
                                        <div class="mil-mr-15">
                                            <div class="mil-icon-frame mil-light mil-icon-frame-md">
                                                <img src="img/icons/md/10.svg" alt="icon">
                                            </div>
                                        </div>
                                        <h5 class="mil-light">IT Support and Consulting</h5>
                                    </div>
                                    <p class="mil-light-soft">Our team offers proactive IT support, system
                                        administration, and troubleshooting services to ensure your IT infrastructure is
                                        always running at peak performance. We also offer strategic IT consulting to
                                        help businesses leverage technology for growth. </p>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div data-swiper-parallax-y="-100" data-swiper-parallax-opacity="0">
                                    <h3 class="mil-light mil-mb-120">System health monitoring and optimization <span
                                            class="mil-accent">IT consulting and strategy development</span>
                                    </h3>
                                    <div class="mil-hori-box mil-mb-30">
                                        <div class="mil-mr-15">
                                            <div class="mil-icon-frame mil-light mil-icon-frame-md">
                                                <img src="img/icons/md/11.svg" alt="icon">
                                            </div>
                                        </div>
                                        <h5 class="mil-light">Security Solutions</h5>
                                    </div>
                                    <p class="mil-light-soft">Cybersecurity is critical in today’s digital world. Our
                                        team ensures your business is protected from threats with the latest security
                                        technologies, including malware protection, firewalls, and endpoint security. We
                                        also provide vulnerability assessments and risk management services.</p>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div data-swiper-parallax-y="-100" data-swiper-parallax-opacity="0">
                                    <h3 class="mil-light mil-mb-120">Malware and antivirus solutions<span
                                            class="mil-accent">Network and data protection</span></h3>
                                    <div class="mil-hori-box mil-mb-30">
                                        <div class="mil-mr-15">
                                            <div class="mil-icon-frame mil-light mil-icon-frame-md">
                                                <img src="img/icons/md/10.svg" alt="icon">
                                            </div>
                                        </div>
                                        <h5 class="mil-light">IT Infrastructure Management</h5>
                                    </div>
                                    <p class="mil-light-soft">We offer comprehensive IT infrastructure services, from
                                        designing and setting up networks to ongoing maintenance and monitoring. We
                                        ensure that your network is secure, fast, and scalable to support your business
                                        growth</p>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div data-swiper-parallax-y="-100" data-swiper-parallax-opacity="0">
                                    <h3 class="mil-light mil-mb-120">Network setup and management <span
                                            class="mil-accent">Infrastructure monitoring and performance tuning</span>
                                    </h3>
                                    <div class="mil-hori-box mil-mb-30">
                                        <div class="mil-mr-15">
                                            <div class="mil-icon-frame mil-light mil-icon-frame-md">
                                                <img src="img/icons/md/11.svg" alt="icon">
                                            </div>
                                        </div>
                                        <h5 class="mil-light"> Cloud Services Management</h5>
                                    </div>
                                    <p class="mil-light-soft">We specialize in managing and maintaining cloud
                                        environments, offering services like IONOS and Azure Cloud administration,
                                        ensuring seamless, secure, and scalable solutions. Whether you're migrating to
                                        the cloud or optimizing your existing setup, we’ve got you covered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mil-slider-nav">
                        <div class="mil-slider-btn-prev mil-box-prev mil-light"><i class="fas fa-arrow-left"></i><span
                                class="mil-h6">Prev</span></div>
                        <div class="mil-slider-btn-next mil-box-next mil-light"><span class="mil-h6">Next</span><i
                                class="fas fa-arrow-right"></i></div>
                    </div>
                </div>

            </div>
            <div class="col-xl-6 p-0 mil-relative" style="overflow: hidden">

                <img src="img/photo/four.jpg" class="mil-background-image" style="object-position: center"
                    data-swiper-parallax-scale="1.1" alt="image">
                <div class="mil-overlay mil-with-deco mil-super-light"></div>

            </div>
        </div>
    </section>
    <!-- ??? end -->

    <!-- ??? -->
    <!-- <section class="mil-p-120-120">
        <div class="mil-deco" style="top: 0; right: 30%;"></div>
        <div class="container">
            <div class="row align-items-end mil-mb-90">
                <div class="col-md-6 col-xl-6">

                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Solutions of Consulting</span>
                    <h2><span class="mil-accent">Industry Specific</span> AI Consulting and Development</h2>

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
            <div class="swiper-container mil-revi-slider mil-mb-90">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <div class="mil-icon-frame mil-icon-frame-md mil-mb-30">
                                <img src="img/icons/md/12.svg" alt="icon">
                            </div>
                            <h5 class="mil-mb-30">Retail and eCommerce</h5>
                            <p>Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure
                                horrible margaret.</p>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <div class="mil-icon-frame mil-icon-frame-md mil-mb-30">
                                <img src="img/icons/md/13.svg" alt="icon">
                            </div>
                            <h5 class="mil-mb-30">Education and eLearning</h5>
                            <p>Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure
                                horrible margaret.</p>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <div class="mil-icon-frame mil-icon-frame-md mil-mb-30">
                                <img src="img/icons/md/14.svg" alt="icon">
                            </div>
                            <h5 class="mil-mb-30">Finance and Banking</h5>
                            <p>Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure
                                horrible margaret.</p>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="mil-hover-card">
                            <div class="mil-icon-frame mil-icon-frame-md mil-mb-30">
                                <img src="img/icons/md/2.svg" alt="icon">
                            </div>
                            <h5 class="mil-mb-30">Life Sciences</h5>
                            <p>Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure
                                horrible margaret.</p>
                        </div>

                    </div>
                </div>
            </div>
            <a href="#." class="mil-link"><span>Let’s Solve Your Challenges With AI</span><i
                    class="fas fa-arrow-right"></i></a>
        </div>
    </section> -->
    <!-- ??? end -->

    <!-- call to action -->
    <section class="call-to-action mil-gradient-bg mil-p-120-120">
        <div class="mil-deco mil-deco-accent" style="top: 0; left: 15%;"></div>
        <div class="mil-deco mil-deco-accent" style="bottom: 0; right: 15%; transform: rotate(180deg)"></div>
        <div class="container mil-text-center">
            <div class="mil-cta-frame">
                <div class="mil-icon-frame mil-icon-frame-md mil-mb-50">
                    <img src="img/icons/md/13l.svg" alt="icon">
                </div>
                <p class="mil-light mil-mb-30">Expert IT Solutions</p>
                <h3 class="mil-light">Proven Expertise Our team consists of certified IT specialists with hands-on
                    experience across various industries <span class="mil-accent"> We understand the complexities of
                        modern
                        IT</span> environments <span class="mil-accent">and</span> <br>ensure <span class="mil-accent">+
                        optimal</span> performance for
                </h3>
            </div>
        </div>
    </section>
    <!-- call to action end -->

    <!-- tech stack -->
    <section class="mil-p-120-90">
        <div class="mil-deco" style="top: 0; right: 15%;"></div>
        <div class="container">

            <span class="mil-suptitle mil-suptitle-2 mil-mb-30">IT Services We Offer</span>
            <h2 class="mil-mb-90">AICTEAH SOLUTION <span class="mil-accent">SKILLS</span></h2>

            <div class="row mil-grid-lines">
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="mil-item-card">
                        <h6>Managed IT Services</h6>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="mil-item-card">
                        <h6>Cloud Services</h6>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="mil-item-card">
                        <h6>Email Management & Support</h6>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="mil-item-card">
                        <h6>Cybersecurity Solutions</h6>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="mil-item-card">
                        <h6>IT Consulting & Strategy</h6>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="mil-item-card">
                        <h6>Virtualization Solutions</h6>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="mil-item-card">
                        <h6>Backup & Disaster Recovery</h6>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="mil-item-card">
                        <h6>Server & Network Security</h6>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="mil-item-card">
                        <h6>VoIP & Communication Solutions</h6>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="mil-item-card">
                        <h6>IT Support & Troubleshooting</h6>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="mil-item-card">
                        <h6> IT Project Management</h6>
                    </div>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="mil-item-card">
                        <h6>Training & Workshops</h6>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- tech stack end -->
</div>
<!-- wrapper end -->

@endsection