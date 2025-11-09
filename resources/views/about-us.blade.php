@extends('layouts.app')
@section('title', 'about-us')
@section('content')

<!-- wrapper -->
<div class="mil-wrapper">

    <!-- banner -->
    <div class="mil-banner-sm mil-deep-bg custom-about-banner">
        <img src="img/projects/about-us-banner.jpeg" alt="background" class="mil-background-image">
        <div class="mil-deco mil-deco-accent" style="top: 47%; right: 10%; transform: rotate(90deg)"></div>
        <div class="mil-banner-content">
            <div class="container mil-relative">
                <ul class="mil-breadcrumbs mil-mb-30">
                    <li><a href="/">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                </ul>
                <h2 class="mil-uppercase">Enterprise</h2>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- call to action -->
    <section class="mil-p-120-60">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-xl-6">




                    <h4 class="mil-mb-60">At AIC Tech Solution, we are a team of highly skilled IT professionals
                        dedicated to providing <span class="mil-accent"> innovative and efficient solutions tailored to
                            your business needs. With over years of
                            experience in IT and system administration,</span>we specialize in managing and optimizing
                        cloud services,</h4>

                </div>
                <div class="col-lg-12 col-xl-6">

                    <div class="mil-adaptive-right">
                        <a href="{{route('contact-us')}}" class="mil-button mil-border mil-mr-15 mil-mb-30"><span>Talk
                                To an
                                Expert</span></a>
                        {{-- <a href="#." class="mil-button-with-label mil-mb-60">
                            <div class="mil-button mil-border mil-icon-button"><span><i class="fas fa-play"></i></span>
                            </div><span class="mil-dark">Watch Video</span>
                        </a> --}}
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- call to action end -->

    <!-- about -->
    <section class="mil-deep-bg mil-p-120-60">
        <div class="mil-deco" style="top: 0; left: 35%;"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 mil-mb-60">

                    <div class="mil-circle-illustration">
                        <div class="mil-circle-bg"></div>
                        <div class="mil-image-frame">
                            <img src="img/projects/about-one.jpg" alt="img">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Firm Overview</span>
                    <h2 class="mil-mb-50">Our expertise spans <br><span class="mil-accent">various fields
                            including</span></h2>

                    <p class="mil-mb-50">At AICTechSolution, we believe technology should make your business faster,
                        safer, and more efficient — not complicated.
                        With years of hands-on experience in IT infrastructure, cloud environments, and system
                        administration, we deliver end-to-end technology solutions that drive performance and
                        reliability.
                        Our certified IT professionals are trusted by businesses worldwide to manage and maintain
                        critical systems, protect digital assets, and ensure seamless connectivity across all platforms.
                        Whether you need a fully managed IT environment or remote technical support, we’ve got you
                        covered — anytime, anywhere.</p>

                    <div class="row align-items-end">

                        <div class="col-xl-7">

                            <ul class="mil-check-icon-list mil-mb-60">
                                <li>
                                    <img src="img/icons/sm/12.svg" alt="icon">
                                    <span class="mil-dark">Managed IT Services.</span>
                                </li>
                                <li>
                                    <img src="img/icons/sm/12.svg" alt="icon">
                                    <span class="mil-dark">Cloud Services.</span>
                                </li>
                                <li>
                                    <img src="img/icons/sm/12.svg" alt="icon">
                                    <span class="mil-dark">Email Management & Support.</span>
                                </li>
                                <li>
                                    <img src="img/icons/sm/12.svg" alt="icon">
                                    <span class="mil-dark">Cybersecurity Solutions.</span>
                                </li>
                            </ul>

                        </div>
                        <div class="col-xl-5">

                            <a href="team-single.html" class="mil-post-sm mil-mb-60">
                                {{-- <div class="mil-cover-frame"><img src="img/faces/1.jpg" alt="cover"></div> --}}
                                <div class="mil-description">
                                    <h4 class="mil-font-3 mil-accent">Muhammad Irfan</h4>
                                    <p class="mil-text-sm">CEO & Co-Founder</p>
                                </div>
                            </a>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- counters -->
    <section class="mil-p-120-60">
        <div class="mil-deco" style="top: 0; left: 25%;"></div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="mil-h1">15<span class="mil-accent">+</span></div>
                    <h6 class="mil-mb-60">Years Experience</h6>

                    <h2 class="mil-mb-60">Let us handle your IT, so you can focus on what matters most—growing your
                        business</h2>
                </div>
                <div class="col-lg-6">
                    <h3 class="mil-mb-60"> we are a team of highly skilled <span class="mil-accent">IT
                            professionals</span> dedicated to providing
                        <span class="mil-accent"> innovative and efficient
                            solutions</span>
                    </h3>

                    <div class="row">
                        <div class="col-lg-6">

                            <h6 class="mil-mb-30"> Managed IT Services</h6>

                            <div class="mil-divider mil-divider-left mil-mb-60"></div>

                        </div>
                        <div class="col-lg-6">

                            <h6 class="mil-mb-30"> Cloud Services</h6>

                            <div class="mil-divider mil-divider-left mil-mb-60"></div>

                        </div>
                        <div class="col-lg-6">

                            <h6 class="mil-mb-30">Email Management & Support
                            </h6>

                            <div class="mil-divider mil-divider-left mil-mb-60"></div>

                        </div>
                        <div class="col-lg-6">

                            <h6 class="mil-mb-30"> Cybersecurity Solutions
                            </h6>

                            <div class="mil-divider mil-divider-left mil-mb-60"></div>

                        </div>

                        <div class="col-lg-6">

                            <h6 class="mil-mb-30"> IT Consulting & Strategy
                            </h6>

                            <div class="mil-divider mil-divider-left mil-mb-60"></div>

                        </div>

                        <div class="col-lg-6">

                            <h6 class="mil-mb-30"> Virtualization Solutions
                            </h6>

                            <div class="mil-divider mil-divider-left mil-mb-60"></div>

                        </div>

                        <div class="col-lg-6">

                            <h6 class="mil-mb-30"> Server & Network Security
                            </h6>

                            <div class="mil-divider mil-divider-left mil-mb-60"></div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- counters end -->

    <div class="container">
        <div class="mil-divider"></div>
    </div>

    <!-- partners -->
    {{-- <div class="mil-partners mil-p-120-90">
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

    <!-- about -->
    <section class="mil-deep-bg mil-p-120-60">
        <div class="mil-deco" style="top: 0; right: 15%;"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 mil-mb-60">

                    <div class="mil-circle-illustration">
                        <div class="mil-circle-bg"></div>
                        <div class="mil-image-frame">
                            <img src="img/faces/t-2.png" alt="img">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 mil-mb-60">

                    <span class="mil-suptitle mil-suptitle-2 mil-mb-30">IT Enterprise</span>
                    <h2 class="mil-mb-50">Our Mission</h2>
                    <p class="mil-mb-50">Empowering businesses with reliable, scalable, and secure IT solutions by
                        delivering expert cloud management, system administration, Microsoft solutions, virtualization,
                        and data protection. We are committed to ensuring seamless operations, maximizing efficiency,
                        and keeping businesses ahead in an ever-evolving technological landscape..</p>

                    <ul class="mil-simple-list">
                        <li>Accelerate innovation.</li>
                        <li>With world class tech teams.</li>
                        <li>Our all service offerings to enhance.</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- features -->
    <section class="mil-p-120-120">
        <div class="container">

            <span class="mil-suptitle mil-suptitle-2 mil-mb-30">Discover Our Company</span>
            <h2 class="mil-mb-120">Empowering Businesses <br> with Smart IT Solutions</h2>

            <div class="mil-divider"></div>
            <div class="mil-line-icon-box">
                <div class="row align-items-center">
                    <div class="col-xl-2">

                        <div class="mil-icon-frame mil-icon-frame-md mil-mb-30">
                            <img src="img/icons/md/6.svg" alt="icon">
                        </div>

                    </div>
                    <div class="col-xl-4">

                        <h4 class="mil-mb-30">Cloud Infrastructure</h4>

                    </div>
                    <div class="col-xl-6">

                        <p class="mil-box-text mil-mb-30">Build a smarter, more scalable future in the cloud.
                            We design, deploy, and manage cloud environments that are secure, efficient, and tailored to
                            your business needs — ensuring uptime, performance, and peace of mind.</p>

                    </div>
                </div>
            </div>
            <div class="mil-divider"></div>
            <div class="mil-line-icon-box">
                <div class="row align-items-center">
                    <div class="col-xl-2">

                        <div class="mil-icon-frame mil-icon-frame-md mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>

                    </div>
                    <div class="col-xl-4">

                        <h4 class="mil-mb-30">Cybersecurity</h4>

                    </div>
                    <div class="col-xl-6">

                        <p class="mil-box-text mil-mb-30">Protect what matters most.
                            Our advanced security solutions safeguard your systems, networks, and data from
                            ever-evolving cyber threats. We provide real-time monitoring, threat detection, and
                            proactive defense to keep your business safe 24/7..</p>

                    </div>
                </div>
            </div>
            <div class="mil-divider"></div>
            <div class="mil-line-icon-box">
                <div class="row align-items-center">
                    <div class="col-xl-2">

                        <div class="mil-icon-frame mil-icon-frame-md mil-mb-30">
                            <img src="img/icons/md/2.svg" alt="icon">
                        </div>

                    </div>
                    <div class="col-xl-4">

                        <h4 class="mil-mb-30">Backup & Disaster Recovery</h4>

                    </div>
                    <div class="col-xl-6">

                        <p class="mil-box-text mil-mb-30">Your data, always secure and recoverable.
                            We create comprehensive backup and recovery strategies that protect your business from
                            unexpected data loss, downtime, and disasters — so you can operate with confidence.</p>

                    </div>
                </div>
            </div>
            <div class="mil-divider"></div>
            <div class="mil-line-icon-box">
                <div class="row align-items-center">
                    <div class="col-xl-2">

                        <div class="mil-icon-frame mil-icon-frame-md mil-mb-30">
                            <img src="img/icons/md/4.svg" alt="icon">
                        </div>

                    </div>
                    <div class="col-xl-4">

                        <h4 class="mil-mb-30">IT Consulting</h4>

                    </div>
                    <div class="col-xl-6">

                        <p class="mil-box-text mil-mb-30">Technology that fits your goals.
                            We analyze, plan, and implement IT strategies that align with your business vision — helping
                            you optimize performance, enhance productivity, and reduce costs.</p>

                    </div>
                </div>
            </div>
            <div class="mil-divider"></div>
            <div class="mil-line-icon-box">
                <div class="row align-items-center">
                    <div class="col-xl-2">

                        <div class="mil-icon-frame mil-icon-frame-md mil-mb-30">
                            <img src="img/icons/md/5.svg" alt="icon">
                        </div>

                    </div>
                    <div class="col-xl-4">

                        <h4 class="mil-mb-30">Network Solutions</h4>

                    </div>
                    <div class="col-xl-6">

                        <p class="mil-box-text mil-mb-30">Stay connected, stay productive.We design and manage fast,
                            reliable, and secure networks that power your business
                            communications and workflows without interruption.</p>

                    </div>
                </div>
            </div>
            <div class="mil-divider"></div>
        </div>
    </section>
    <!-- features end -->

    <!-- features -->
    <section class="mil-deep-bg mil-p-120-60">
        <div class="mil-deco" style="top: 0; right: 25%;"></div>
        <div class="container">
            <span class="mil-suptitle mil-suptitle-2 mil-mb-30">For Enterprise</span>
            <h2 class="mil-mb-120">IT Services <span class="mil-accent">We</span> Offer</h2>

            <div class="row">
                <div class="col-md-6 col-xl-4">

                    <div class="mil-icon-box-2 mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>
                        <div class="mil-box-text">
                            <h4 class="mil-mb-30">Managed IT Services</h4>
                            <p class="mil-box-text">24/7 Remote Support: Providing round-the-clock assistance to resolve
                                any IT-related issues promptly.
                                Network Monitoring & Management: Monitoring network traffic, identifying bottlenecks,
                                and ensuring optimal performance.
                                Server Management: Administration and maintenance of physical or virtual servers,
                                ensuring smooth operation and security..</p>
                        </div>
                    </div>


                </div>
                <div class="col-md-6 col-xl-4">

                    <div class="mil-icon-box-2 mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>
                        <div class="mil-box-text">
                            <h4 class="mil-mb-30">Cloud Services</h4>
                            <p class="mil-box-text">Cloud Migration: Seamlessly migrating your existing infrastructure
                                to cloud platforms like IONOS, AWS, and Azure.
                                Cloud Backup Solutions: Secure, automated backup systems that ensure business
                                continuity.
                                Cloud Security: Implementation of best practices for securing cloud-based applications
                                and data storage.</p>
                        </div>
                    </div>


                </div>
                <div class="col-md-6 col-xl-4">

                    <div class="mil-icon-box-2 mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>
                        <div class="mil-box-text">
                            <h4 class="mil-mb-30">Email Management & Support</h4>
                            <p class="mil-box-text">Email Migration: Moving from legacy email systems (like Gmail or
                                Exchange) to Office 365 or other enterprise solutions.
                                Email Configuration & Management: Setup, configuration, and ongoing management of
                                corporate email systems.
                                Spam & Security Filtering: Protecting your business from malicious emails through robust
                                filtering and security measures.</p>
                        </div>
                    </div>


                </div>
                <div class="col-md-6 col-xl-4">

                    <div class="mil-icon-box-2 mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>
                        <div class="mil-box-text">
                            <h4 class="mil-mb-30">Cybersecurity Solutions</h4>
                            <p class="mil-box-text">Endpoint Protection: Deploying and managing endpoint security
                                solutions to safeguard devices from malware and unauthorized access.
                                Firewall Configuration & Management: Setup, configuration, and ongoing management of
                                firewalls to protect the network from external threats.
                                Vulnerability Assessment & Penetration Testing: Regularly assessing and testing your IT
                                infrastructure for vulnerabilities to ensure it's secure from cyber-attacks.
                                Data Encryption: Implementing encryption for both data at rest and in transit to ensure
                                secure communication.</p>
                        </div>
                    </div>


                </div>
                <div class="col-md-6 col-xl-4">

                    <div class="mil-icon-box-2 mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>
                        <div class="mil-box-text">
                            <h4 class="mil-mb-30">IT Consulting & Strategy</h4>
                            <p class="mil-box-text">Technology Consulting: Offering expert advice on the latest
                                technology solutions to meet your business needs.
                                IT Infrastructure Design: Designing and implementing scalable and efficient IT
                                infrastructure tailored to your company.
                                Business Continuity Planning: Helping you build strategies to ensure business operations
                                continue without interruption during disasters.</p>
                        </div>
                    </div>


                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="mil-icon-box-2 mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>
                        <div class="mil-box-text">
                            <h4 class="mil-mb-30">Virtualization Solutions</h4>
                            <p class="mil-box-text">VMware & Hyper-V Setup: Setting up and managing virtualization
                                environments for better resource allocation and cost savings.
                                Desktop Virtualization: Delivering virtual desktops to employees, enabling remote work
                                and more flexible working conditions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="mil-icon-box-2 mil-mb-60">
                        <div class="mil-icon-frame mil-icon-frame-md mil-icon-bg mil-mb-30">
                            <img src="img/icons/md/10.svg" alt="icon">
                        </div>
                        <div class="mil-box-text">
                            <h4 class="mil-mb-30">Outsource Smart — Grow Faster with AIC Tech Solution</h4>
                            <p class="mil-box-text">At AIC Tech Solution, we provide complete Business Process
                                Outsourcing (BPO) services to help your company save time, reduce costs, and increase
                                efficiency. Our expert team handles customer support, technical assistance, data entry,
                                and virtual administrative tasks with precision and care. We use advanced technology to
                                ensure accuracy, speed, and data security in every process. Whether you need help
                                managing customer communication or back-office operations, AIC Tech Solution acts as
                                your reliable outsourcing partner — so you can focus on growing your business while we
                                take care of the rest.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- features end -->

    <!-- contact -->
    <section class="mil-contact mil-gradient-bg mil-p-120-0">
        <div class="mil-deco mil-deco-accent" style="top: 0; right: 10%;"></div>
        <div class="container">
            <h2 class="mil-light mil-mb-90">Contact <span class="mil-accent">Us</span></h2>
            <contact-form :header-type="'{{ $header_type }}'"></contact-form>
        </div>
    </section>
    <!-- contact end -->

</div>
<!-- wrapper end -->

@endsection