@extends('layouts.app')
@section('title', 'servies')
@section('content')

<!-- wrapper -->
<div class="mil-wrapper">
    <!-- banner -->
    <div class="mil-banner-sm mil-deep-bg">
        <img src="img/projects/aic-service-banner.jpeg" alt="background" class="mil-background-image">
        <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
        <div class="mil-banner-content">
            <div class="container mil-relative">
                <ul class="mil-breadcrumbs mil-mb-30">
                    <li><a href="/">Home</a></li>
                    <li><a href="service-1.html">Service</a></li>
                </ul>
                <h2 class="mil-uppercase custom-banner-text">Our Core Services</h2>
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
                                <img src="img/icons/md/1.svg" alt="icon">
                            </div>
                        </div>
                        <h5>Proven Expertise: Our team consists of certified IT specialists with hands-on experience
                            across various industries. We understand the complexities of modern IT environments and
                            ensure optimal performance for your systems</h5>
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

    <!-- steps -->
    <section class="mil-p-120-90">
        <div class="mil-deco" style="bottom: 0; right: 35%; transform: rotate(180deg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 mil-mb-90">
                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Our Services</span>
                    <h2 class="mil-mb-30">Our Core Services Help You Succeed</h2>
                    <p class="mil-dark">Personalized Solutions: We don’t believe in one-size-fits-all approaches. <br>We
                        take the time to understand your business needs and design custom <br> that align with your
                        goals and budget.
                    </p>
                </div>
            </div>

            <div class="row mil-mb-30-adapt">
                <div class="col-xl-4">
                    <div class="mil-mb-60">
                        <div class="mil-number-icon mil-circle mil-mb-30">
                            <span>01</span>
                        </div>
                        <h4 class="mil-mb-15">Cloud Services Management</h4>
                        <p>We specialize in managing and maintaining cloud environments, offering services like IONOS
                            and Azure Cloud administration, ensuring seamless, secure, and scalable solutions. Whether
                            you're migrating to the cloud or optimizing your existing setup, we’ve got you covered.</p>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="mil-mb-60">
                        <div class="mil-number-icon mil-lines mil-mb-30">
                            <span>02</span>
                        </div>
                        <h4 class="mil-mb-15">Microsoft 365 Solutions</h4>
                        <p>Maximize the potential of Microsoft 365 with our expert setup, configuration, and migration
                            services. We provide a seamless transition to the cloud, ensuring that your team can
                            collaborate, communicate, and work efficiently.</p>
                    </div>

                </div>
                <div class="col-xl-4">
                    <div class="mil-mb-60">
                        <div class="mil-number-icon mil-mb-30">
                            <span>03</span>
                        </div>
                        <h4 class="mil-mb-15">Backup and Disaster Recovery</h4>
                        <p>Your data is invaluable. We provide robust backup and disaster recovery solutions using Datto
                            BCDR, Acronis, and other leading technologies. In the event of data loss or server downtime,
                            we ensure that your business can get back on track quickly..</p>
                    </div>

                </div>
                <div class="col-xl-4">

                    <div class="mil-mb-60">
                        <div class="mil-number-icon mil-mb-30">
                            <span>04</span>
                        </div>
                        <h4 class="mil-mb-15">Virtualization Solutions</h4>
                        <p>Virtualization is a key part of modern IT infrastructure, and we have the expertise to
                            implement and manage virtualization technologies like VMware, Hyper-V, and Parallels
                            Desktop. Our solutions help optimize hardware utilization, improve scalability, and
                            streamline your operations.</p>
                    </div>

                </div>
                <div class="col-xl-4">

                    <div class="mil-mb-60">
                        <div class="mil-number-icon mil-circle mil-mb-30">
                            <span>05</span>
                        </div>
                        <h4 class="mil-mb-15">Third Party Integrations</h4>
                        <p>Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In on my jointure
                            horrible margaret suitable he followed speedily.</p>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="mil-mb-60">
                        <div class="mil-number-icon mil-lines mil-mb-30">
                            <span>06</span>
                        </div>
                        <h4 class="mil-mb-15">Email and Collaboration Tools</h4>
                        <p>Effective communication is the backbone of any organization. We specialize in email
                            migrations, Office 365 setup, and management, providing a reliable and secure email
                            solution. We also ensure that collaboration tools are seamlessly integrated for maximum
                            productivity.</p>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="mil-mb-60">
                        <div class="mil-number-icon mil-lines mil-mb-30">
                            <span>07</span>
                        </div>
                        <h4 class="mil-mb-15">IT Support and Consulting</h4>
                        <p>Our team offers proactive IT support, system administration, and troubleshooting services to
                            ensure your IT infrastructure is always running at peak performance. We also offer strategic
                            IT consulting to help businesses leverage technology for growth</p>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="mil-mb-60">
                        <div class="mil-number-icon mil-lines mil-mb-30">
                            <span>08</span>
                        </div>
                        <h4 class="mil-mb-15">Security Solutions</h4>
                        <p>Cybersecurity is critical in today’s digital world. Our team ensures your business is
                            protected from threats with the latest security technologies, including malware protection,
                            firewalls, and endpoint security. We also provide vulnerability assessments and risk
                            management services.</p>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="mil-mb-60">
                        <div class="mil-number-icon mil-lines mil-mb-30">
                            <span>09</span>
                        </div>
                        <h4 class="mil-mb-15">IT Infrastructure Management</h4>
                        <p>We offer comprehensive IT infrastructure services, from designing and setting up networks to
                            ongoing maintenance and monitoring. We ensure that your network is secure, fast, and
                            scalable to support your business growth.
                        </p>
                    </div>
                </div>

            </div>
            <div class="row align-items-center">
                <div class="col-md-6 col-xl-6">

                    <a href="{{route('contact-us')}}" class="mil-button mil-border mil-mb-30"><span>Tell us about your
                            project</span></a>

                </div>
                {{-- <div class="col-md-6 col-xl-6">

                    <div class="mil-adaptive-right">
                        <a href="#." class="mil-link mil-mb-30"><span>See More</span><i
                                class="fas fa-arrow-right"></i></a>
                    </div>

                </div> --}}
            </div>
        </div>
    </section>
    <!-- steps end -->

    <div class="container">
        <div class="mil-divider"></div>
    </div>

    <!-- next step -->
    {{-- <section class="mil-p-120-0">
        <div class="container">

            <div class="mil-text-center mil-mb-90">
                <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Safeguard Modern</span>
                <h2>Ready To Take The Next Step?</h2>
            </div>

            <div class="row">
                <div class="col-lg-6">

                    <div class="mil-hover-card mil-mb-30">
                        <h4 class="mil-mb-30">Get a Live Demo</h4>
                        <p class="mil-mb-30">Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In
                            on my jointure horrible margaret suitable he followed speedily. Indeed vanity excuse or mr
                            lovers of on.</p>
                        <a href="#." class="mil-link"><span>Request a Free Demo</span><i
                                class="fas fa-arrow-right"></i></a>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="mil-hover-card mil-mb-30">
                        <h4 class="mil-mb-30">Start Now</h4>
                        <p class="mil-mb-30">Dissuade ecstatic and properly saw entirely sir why laughter endeavor. In
                            on my jointure horrible margaret suitable he followed speedily. Indeed vanity excuse or mr
                            lovers of on.</p>
                        <a href="#." class="mil-link"><span>Get In Touch</span><i class="fas fa-arrow-right"></i></a>
                    </div>

                </div>
            </div>

        </div>
    </section> --}}
    <!-- next step end -->

    <!-- partners -->
    {{-- <div class="mil-partners mil-partners-spaces">
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
    </div> --}}
    <!-- partners end -->

    <div class="container">
        <div class="mil-divider"></div>
    </div>

    <!-- services -->
    <section class="mil-services mil-p-120-90">
        <div class="mil-deco" style="bottom: 0; right: 40%; transform: rotate(180deg)"></div>
        <div class="container">
            <span class="mil-suptitle mil-suptitle-2 mil-mb-30">High Quality and Performance</span>
            <h2 class="mil-mb-90">Our Core Services Empower <span class="mil-accent">Your Growth</span> and Success</h2>
            <div class="row mil-mb-30-adapt">
                <div class="col-lg-6 col-xl-6">
                    <div class="mil-service-item mil-without-lines mil-mb-60">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/1.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">01</span> Cloud infrastructure
                                setup & Migration and optimization
                            </h5>
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="mil-service-item mil-without-lines mil-mb-60">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/2.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">02</span> Microsoft 365 deployment & Office
                                365 migration & Microsoft 365 deployment</h5>
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="mil-service-item mil-without-lines mil-mb-60">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/3.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">03</span> Backup strategy design and
                                implementation & Disaster recovery planning & Backup strategy design and implementation
                            </h5>
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="mil-service-item mil-without-lines mil-mb-60">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/4.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">04</span> Server and desktop virtualization &
                                Cloud-based virtual environments & Virtual infrastructure management
                            </h5>
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="mil-service-item mil-without-lines mil-mb-60">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/5.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">05</span> Email migration (Gmail to Office
                                365, etc.) & Exchange server setup and management & Microsoft Teams integration and
                                support</h5>
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="mil-service-item mil-without-lines mil-mb-60">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/6.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">06</span> 24/7 IT support and troubleshooting
                                & System health monitoring and optimization & IT consulting and strategy development
                            </h5>
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt
                                ut labore et dolore magna aliqua.</p> --}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 col-xl-6">

                    <a href="{{route('contact-us')}}" class="mil-button mil-border mil-mb-30"><span>Talk To Our Team
                            Experts</span></a>

                </div>
                {{-- <div class="col-md-6 col-xl-6">

                    <div class="mil-adaptive-right">
                        <a href="#." class="mil-link mil-mb-30"><span>See More</span><i
                                class="fas fa-arrow-right"></i></a>
                    </div>

                </div> --}}
            </div>
        </div>
    </section>
    <!-- services end -->

    <!-- services -->
    <section class="mil-gradient-bg mil-deco-right mil-p-120-0">
        <div class="mil-deco mil-deco-accent" style="top: 0; left: 5%;"></div>
        <div class="container">
            <div class="mil-text-center mil-mb-90">
                <span class="mil-suptitle  mil-light mil-suptitle-2 mil-mb-30">Always The Best</span>
                <h2 class="mil-light mil-mb-30">Types Of <span class="mil-accent">Services</span> We
                    Deliver
                </h2>
                <p class="mil-light-soft">Comprehensive IT Support: Secure, seamless cloud, server, and data management.
                </p>
            </div>
            <div class="row mil-mb-30-adapt">
                <div class="col-lg-3">

                    <div class="mil-icon-box-head mil-long mil-mob-center mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-sm mil-light">
                            <img src="img/icons/sm/6.svg" alt="icon">
                        </div>
                        <p class="mil-light">Cloud Services Management</p>
                    </div>

                </div>
                <div class="col-lg-3">

                    <div class="mil-icon-box-head mil-long mil-mob-center mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-sm mil-light">
                            <img src="img/icons/sm/2.svg" alt="icon">
                        </div>
                        <p class="mil-light">Microsoft 365 Solutions</p>
                    </div>

                </div>
                <div class="col-lg-3">

                    <div class="mil-icon-box-head mil-long mil-mob-center mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-sm mil-light">
                            <img src="img/icons/sm/7.svg" alt="icon">
                        </div>
                        <p class="mil-light">Backup and Disaster Recovery</p>
                    </div>

                </div>
                <div class="col-lg-3">

                    <div class="mil-icon-box-head mil-long mil-mob-center mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-sm mil-light">
                            <img src="img/icons/sm/3.svg" alt="icon">
                        </div>
                        <p class="mil-light">Virtualization Solutions</p>
                    </div>

                </div>
                <div class="col-lg-3">

                    <div class="mil-icon-box-head mil-long mil-mob-center mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-sm mil-light">
                            <img src="img/icons/sm/5.svg" alt="icon">
                        </div>
                        <p class="mil-light">Email and Collaboration Tools</p>
                    </div>

                </div>
                <div class="col-lg-3">

                    <div class="mil-icon-box-head mil-long mil-mob-center mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-sm mil-light">
                            <img src="img/icons/sm/1.svg" alt="icon">
                        </div>
                        <p class="mil-light">IT Support and Consulting</p>
                    </div>

                </div>
                <div class="col-lg-3">

                    <div class="mil-icon-box-head mil-long mil-mob-center mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-sm mil-light">
                            <img src="img/icons/sm/4.svg" alt="icon">
                        </div>
                        <p class="mil-light">Security Solutions</p>
                    </div>

                </div>
                <div class="col-lg-3">

                    <div class="mil-icon-box-head mil-long mil-mob-center mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-sm mil-light">
                            <img src="img/icons/sm/8.svg" alt="icon">
                        </div>
                        <p class="mil-light">IT Infrastructure Management</p>
                    </div>

                </div>
            </div>
            <div class="mil-text-center">
                <a href="{{route('contact-us')}}" class="mil-button mil-border mil-light mil-mb-30"><span>Talk To Our
                        Team</span></a>
            </div>
        </div>
    </section>
    <!-- services end -->
</div>
<!-- wrapper end -->

@endsection