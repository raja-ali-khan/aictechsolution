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
                    <img src="img/photo/one.jpg" class="mil-background-image" style="object-position: center"
                        data-swiper-parallax="-100" data-swiper-parallax-scale="1.1" alt="image">
                </div>
                <div class="swiper-slide">
                    <img src="img/photo/two.jpg" class="mil-background-image" style="object-position: center"
                        data-swiper-parallax="-100" data-swiper-parallax-scale="1.1" alt="image">
                </div>
                <div class="swiper-slide">
                    <img src="img/photo/three.jpg" class="mil-background-image" style="object-position: center"
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
                        <h1 class="mil-mb-60">
                            <span class="mil-uppercase mil-light">
                                Welcome to <span class="mil-font-3 mil-accent">AIC Tech Solution</span><br>
                            </span>
                        </h1>
                        <div class="mil-flex-hori-center">
                            <div>
                                <a href="{{route('contact-us')}}" class="mil-button mil-border mil-light"><span>Let’s
                                        Talk</span></a>
                            </div>
                            <p class="mil-button-descr mil-light-soft">We specialize in delivering top-notch IT support,
                                cloud solutions, cybersecurity, and system administration services to businesses of all
                                sizes.</p>
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
    <!-- <div class="mil-partners mil-p-90-60">
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
    </div> -->
    <!-- partners end -->

    <div class="container">
        <div class="mil-divider"></div>
    </div>

    <!-- services -->
    <section class="mil-services mil-p-120-90">
        <div class="mil-deco" style="top: 0; right: 20%;"></div>
        <div class="container">
            <h2 class="mil-mb-30">We Can <span class="mil-accent">Help You</span></h2>
            <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <h4 class="mil-mb-60 mil-mt-30">IT Services We Offer</h4>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/1.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">01</span>Managed IT Services</h5>
                            <p>24/7 Remote Support: Providing round-the-clock assistance to resolve any IT-related
                                issues promptly.
                                Network Monitoring & Management: Monitoring network traffic, identifying bottlenecks,
                                and ensuring optimal performance </p>
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
                            <h5 class="mil-mb-30"><span class="mil-accent">02</span>Cloud Services</h5>
                            <p>Cloud Migration: Seamlessly migrating your existing infrastructure to cloud platforms
                                like IONOS, AWS, and Azure.
                                Cloud Backup Solutions: Secure, automated backup systems that ensure business
                                continuity.
                                Cloud Security: Implementation of best practices for securing cloud-based applications
                                and data storage..</p>
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
                            <h5 class="mil-mb-30"><span class="mil-accent">03</span>Email Management & Support
                            </h5>
                            <p>Email Migration: Moving from legacy email systems (like Gmail or Exchange) to Office 365
                                or other enterprise solutions.
                                Email Configuration & Management: Setup, configuration, and ongoing management of
                                corporate email systems.
                                Spam & Security Filtering</p>
                        </div>
                    </div>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/1.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">04</span>Backup & Disaster Recovery
                            </h5>
                            <p>Data Backup Solutions: Implementation of backup strategies to ensure critical data is
                                regularly backed up and easily recoverable.
                                Disaster Recovery Planning: Developing disaster recovery plans to ensure rapid recovery
                                of IT systems in case of a failure or disaster.</p>
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
                            <h5 class="mil-mb-30"><span class="mil-accent">05</span>Server & Network Security

                            </h5>
                            <p>Network Security Audits Conducting regular audits to identify and mitigate network
                                vulnerabilities.
                                Patch Management Keeping your software and systems up-to-date with the latest security
                                patches and updates VPN & Remote Access: Securely connect to internal systems</p>
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
                            <h5 class="mil-mb-30"><span class="mil-accent">06</span>VoIP & Communication Solutions


                            </h5>
                            <p>VoIP System Setup: Installing and configuring Voice over IP (VoIP) systems for
                                cost-effective communication.
                                Unified Communication Solutions: Streamlining communication with integrated services for
                                voice, video, and instant messaging.</p>
                        </div>
                    </div>
                    {{-- <div class="mil-divider mil-divider-left"></div> --}}

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
                            <h5 class="mil-mb-30"><span class="mil-accent">01</span> Cybersecurity Solutions</h5>
                            <p>Endpoint Protection: Deploying and managing endpoint security solutions to safeguard
                                devices from malware and unauthorized access.
                                Firewall Configuration & ManagementFirewall Management Setup, configuration, and
                                security against threats
                            </p>
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
                            <h5 class="mil-mb-30"><span class="mil-accent">02</span>IT Consulting & Strategy
                            </h5>
                            <p>Technology Consulting: Offering expert advice on the latest technology solutions to meet
                                your business needs.
                                IT Infrastructure Design: Designing and implementing scalable and efficient IT
                                infrastructure tailored to your company.
                                Business Continuity Planning Strategies to keep operations running during disasters</p>
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
                            <h5 class="mil-mb-30"><span class="mil-accent">03</span>Virtualization Solutions</h5>
                            <p>VMware & Hyper-V Setup: Setting up and managing virtualization environments for better
                                resource allocation and cost savings.
                                Desktop Virtualization: Delivering virtual desktops to employees, enabling remote work
                                and more flexible working conditions.</p>
                        </div>
                    </div>
                    <div class="mil-divider mil-divider-left"></div>
                    <div class="mil-service-item">
                        <div class="mil-service-icon">
                            <div class="mil-icon-frame mil-icon-frame-md">
                                <img src="img/icons/md/4.svg" alt="icon">
                            </div>
                        </div>
                        <div class="mil-service-text">
                            <h5 class="mil-mb-30"><span class="mil-accent">04</span>IT Support & Troubleshooting
                            </h5>
                            <p>Mac & Windows Support: Offering comprehensive support for both Mac and Windows devices,
                                ensuring they run smoothly and securely.
                                Hardware & Software Troubleshooting: Diagnosing and resolving issues with both hardware
                                and software to minimize downtime.</p>
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
                            <h5 class="mil-mb-30"><span class="mil-accent">05</span>IT Project Management</h5>
                            <p>Project Planning & Coordination: Overseeing IT-related projects from planning to
                                implementation, ensuring timely delivery.
                                Vendor Management: Coordinating with third-party vendors for software, hardware, or
                                cloud services, ensuring compliance with requirements.</p>
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
                            <h5 class="mil-mb-30"><span class="mil-accent">06</span>Training & Workshops</h5>
                            <p>Custom IT Training Providing training sessions for your staff on best practices for
                                software, security and general IT systems.
                                Workshops on Productivity Tools Helping teams get the most out of tools like Microsoft
                                Office 365 Google Workspace and others.
                            </p>
                        </div>
                    </div>
                    {{-- <div class="mil-divider mil-divider-left"></div> --}}
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
                                <img src="img/projects/1.png" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Terminal Services (TS) Server Deployment</h4>
                                    {{-- <h6>by: <span class="mil-accent">Jane Meldrum</span></h6> --}}
                                </div>
                                <div class="mil-card-text">
                                    <p>The main objective of this project was to set up a robust and secure Terminal
                                        Services (TS) server that would provide remote users with secure remote desktop
                                        access from their local workstations</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide">

                        <a href="#" class="mil-card">
                            <div class="mil-cover-frame">
                                <img src="img/projects/2.jpeg" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">OVH to IONOS Cloud Server Migration & Backup Restoration</h4>
                                    {{-- <h6>by: <span class="mil-accent">Nguta Ithya</span></h6> --}}
                                </div>
                                <div class="mil-card-text">
                                    <p>This project involved migrating a complete server backup from an OVH cloud
                                        environment to an IONOS cloud server. The primary goal was to ensure a seamless
                                        transition while maintaining data integrity system configurations and
                                        application availability</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="mil-card">
                            <div class="mil-cover-frame">
                                <img src="img/projects/3.png" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Google Workspace to Office 365 Migration</h4>
                                    {{-- <h6>by: <span class="mil-accent">Roy Bricks</span></h6> --}}
                                </div>
                                <div class="mil-card-text">
                                    <p>This project involved the seamless migration of a user's data and services from
                                        Google Workspace to Office 365. The objective was to ensure smooth transition
                                        while preserving emails, calendars, contacts, and files. The process included
                                        configuring Office 365 accounts, data transfer, and testing to ensure all
                                        services were fully operational post-migration</p>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="swiper-slide">

                        <a href="project.html" class="mil-card">
                            <div class="mil-cover-frame">
                                <img src="img/projects/4.png" alt="project">
                            </div>
                            <div class="mil-description">
                                <div class="mil-card-title">
                                    <h4 class="mil-mb-20">Seamless Local PC Integration with On-Premises Domain on IONOS
                                        Cloud</h4>
                                    {{-- <h6>by: <span class="mil-accent">Nguta Ithya</span></h6> --}}
                                </div>
                                <div class="mil-card-text">
                                    <p>This project focused on integrating local computers with an on-premises Active
                                        Directory domain hosted on an IONOS Cloud server. The goal was to ensure a
                                        secure efficient and seamless connection between local PCs and the
                                        cloud-hosted domain while maintaining centralized user management
                                        authentication and resource access</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                {{-- <div class="col-md-6 col-xl-6">
                    <a href="portfolio.html" class="mil-link mil-mb-30"><span>View All Cases</span><i
                            class="fas fa-arrow-right"></i></a>
                </div> --}}
                <div class="col-md-12 col-xl-12">

                    <div class="mil-adaptive-right">
                        <a href="{{route('contact-us')}}" class="mil-button mil-border mil-mb-30"><span>Get
                                Started</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- portfolio end -->

    <!-- how it works -->
    <!-- <section class="mil-how-it-works mil-deep-bg mil-p-120-90">
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
                        <a href="{{route('contact-us')}}" class="mil-button mil-border mil-mb-30"><span>How We
                                Work</span></a>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
    <!-- how it works end -->

    <!-- skills -->
    <section class="mil-skills mil-p-120-90">
        <div class="container">
            <div class="row align-items-end mil-mb-90">
                <div class="col-xl-6">

                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Our Core Services</span>
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

                    <h6 class="mil-mb-30">Cloud Services Management</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 95%"></div>
                        </div>
                        <div class="mil-text-sm">95%</div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <h6 class="mil-mb-30">Cloud infrastructure setup</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 90%"></div>
                        </div>
                        <div class="mil-text-sm">90%</div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <h6 class="mil-mb-30">Microsoft 365 deployment</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 95%"></div>
                        </div>
                        <div class="mil-text-sm">95%</div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <h6 class="mil-mb-30">Backup strategy design & implement</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 95%"></div>
                        </div>
                        <div class="mil-text-sm">95%</div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <h6 class="mil-mb-30">Server and desktop virtualization</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 90%"></div>
                        </div>
                        <div class="mil-text-sm">90%</div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <h6 class="mil-mb-30">Email migration (Gmail to Office 365)</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 90%"></div>
                        </div>
                        <div class="mil-text-sm">90%</div>
                    </div>

                </div>
                <div class="col-md-6 col-xl-3">

                    <h6 class="mil-mb-30">24/7 IT support and troubleshooting</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 97%"></div>
                        </div>
                        <div class="mil-text-sm">97%</div>
                    </div>

                </div>

                <div class="col-md-6 col-xl-3">

                    <h6 class="mil-mb-30">IT Infrastructure Management</h6>

                    <div class="mil-skill-frame mil-mb-60">
                        <div class="mil-skill-track">
                            <div class="mil-skill-prog" style="width: 90%"></div>
                        </div>
                        <div class="mil-text-sm">90%</div>
                    </div>

                </div>
                {{-- <div class="col-md-6 col-xl-3 mil-text-center">

                    <a href="#." class="mil-link mil-mb-30"><span>More</span><i class="fas fa-arrow-right"></i></a>

                </div> --}}
            </div>
        </div>
    </section>
    <!-- skills end -->

    <div class="container">
        <div class="mil-divider"></div>
    </div>

    <!-- blog -->
    <!-- <section class="mil-blog mil-p-120-120">
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
    </section> -->
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
                            <p class="mil-mb-30">Irfan was truly amazing. He was quite creative in his approach until
                                the problem is fixed. I would
                                highly recommend him!</p>
                            <div class="mil-author">
                                <img src="img/faces/t1.jpg" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Tamzyn French</h6>
                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}
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
                            <p class="mil-mb-30">It was a pleasure working with Irfan and I would highly recommend. He
                                was able to fix the issue
                                promptly and he is a professional</p>
                            <div class="mil-author">
                                <img src="img/faces/t2.jpg" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Margaret Williams</h6>
                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}
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
                            <p class="mil-mb-30">Irfan is always great to work with. He's fast, responsive, and very
                                helpful. This is my second time
                                using him, and I plan to use him again in the future. Highly recommended.</p>
                            <div class="mil-author">
                                <img src="img/faces/t3.jpg" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Tarryn Gillies</h6>
                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}
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
                            <p class="mil-mb-30">Irfan to the RESCUE!! TRULY he's your my go to guy!!! He's suuuuperb!!
                                Amazing, SMART ! patient !!
                                Too generous and kind with his time and work!! Gives you way more than you ask! He gives
                                you his
                                110% !!!! He's talented and quick to grasp requirements, and even adds input to enhance
                                the work!! I
                                highly recommend Irfan! You won't regret!! I'm coming back soon for extra tasks !! Thank
                                YOU</p>
                            <div class="mil-author">
                                <img src="img/faces/t4.jpg" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Zara Whitmore</h6>
                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}
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
                            <p class="mil-mb-30">Irfan was really responsive throughout the job and set clear
                                expectations and directions. Would
                                definitely recommend working with him Very helpful, communicative, and supportive. Plus
                                they have a
                                great experience with Windows and Mac devices and service to work. He described well his
                                job and
                                more than that he is flexible regarding the deadline. Reliable, team player, good
                                communication, and
                                excellent IT Professional</p>
                            <div class="mil-author">
                                <img src="img/faces/t14.jpeg" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Lexi Vaughn</h6>
                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}
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
                            <p class="mil-mb-30">Freelancer was very helpful and his availability was great. He figured
                                out an issue I had for years and
                                was never able to figure out on my own. I would definitely recommend him for Mac tech
                                support and
                                will work with him again in the future if needed.</p>
                            <div class="mil-author">
                                <img src="img/faces/t6.webp" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">James</h6>
                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}
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
                            <p class="mil-mb-30">Very communicative and patient with my schedule. Always available when
                                he promised and worked
                                until the job was fully complete. He’s my “go to” person for anything that needs setup
                                on my Mac.
                                Awesome experience</p>
                            <div class="mil-author">
                                <img src="img/faces/t7.webp" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">William</h6>
                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}
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
                            <p class="mil-mb-30">Irfan helped me debug a Mac problem I had for months. He's my Ninja of
                                MacOS! On top of that he
                                gave me very helpful tips on how I can speed up my MacBook Pro so it's a nobrainer for
                                me to hire him
                                again soon as I have other issues to solve, too.</p>
                            <div class="mil-author">
                                <img src="img/faces/t8.webp" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Logan</h6>
                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}
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
                            <p class="mil-mb-30">I had a corrupted user on my OS X. After spending hours trying to fix
                                it myself, Irfan came in, and
                                helped me fix the problem AND even setup a new user with the same permissions and data
                                as my old
                                user. This is someone who is focused on meeting and solving your problems</p>
                            <div class="mil-author">
                                <img src="img/faces/t9.webp" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Aiden</h6>
                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}
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
                            <p class="mil-mb-30">Irfan was really helpful and responsive, he even helped me two times
                                after the work was complete
                                when I had issues, so he went above and beyond what was required. I will be using him
                                again in the
                                future for sure. Highly recommended freelancee</p>
                            <div class="mil-author">
                                <img src="img/faces/t10.jpeg" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Blake</h6>
                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}
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
                            <p class="mil-mb-30">Irfan was really responsive throughout the job and set clear
                                expectations and directions. I would
                                definitely recommend working with him. Very helpful and supportive and he has great
                                experience with
                                Windows and Mac devices. He is communicative, reliable, a team player, Excellent IT
                                Professional.</p>
                            <div class="mil-author">
                                <img src="img/faces/t11.jpeg" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Orion</h6>
                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}
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
                            <p class="mil-mb-30">Mr. Manzoor is amazing with computers. He kept searching for the issue
                                until he fixed it. He went
                                above and beyond with recommending other budget-friendly solutions that would also help
                                solve the
                                issue. Highly recommend him!</p>
                            <div class="mil-author">
                                <img src="img/faces/t12.jpeg" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Axel</h6>
                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}
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
                            <p class="mil-mb-30">Irfan is a so excellent at what he does. This is my 2nd time hiring him
                                and he continues to be
                                incredibly responsive and wonderful to work with. Will definitely use him again</p>
                            <div class="mil-author">
                                <img src="img/faces/t13.webp" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Maverick</h6>
                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}
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
                            <p class="mil-mb-30">Irfan delivered good work on this development project and I enjoyed
                                working with him.
                                I live in the US, and he made himself available at all times of the day my time on the
                                east coast. He went well
                                above and beyond. I am highly impressed, he went overboard with support.
                                I would definitely, recommend him to anyone. He was able to adequately, set up my server
                                so my multiple offices
                                across the country can log on without any glitches. I am now able to log on from
                                anywhere with our own server.</p>
                            <div class="mil-author">
                                <img src="img/faces/t5.jpeg" alt="Customer">
                                <div class="mil-name">
                                    <h6 class="mil-mb-5">Junaid khan</h6>
                                    {{-- <span class="mil-text-sm">Agency Design</span> --}}
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
            {{-- <form id="formFeedback" method="post" enctype="multipart/form-data">
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
                        <button type="submit" class="mil-button mil-accent-bg mil-fw">
                            <span>Send Message Now</span>
                        </button>
                    </div>
                </div>
                <div class="alert-success" style="display: none;">
                    <h5>Thanks, your message is sent successfully.</h5>
                </div>
                <div class="alert-error" style="display: none;">
                    <h5>Error! Message could not be sent.</h5>
                </div>
            </form> --}}

            <contact-form :header-type="'{{ $header_type }}'"></contact-form>

        </div>
    </section>



    <!-- contact end -->

</div>
<!-- wrapper end -->

@endsection