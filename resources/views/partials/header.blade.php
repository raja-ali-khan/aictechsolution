<!-- top bar -->
<div class="mil-top-position mil-fixed">
    <div class="mil-top-panel
    @if($header_type == 'index') mil-top-panel-transparent mil-animated @endif
    ">
        <!-- mil-top-panel-transparent -->
        <div class="container">
            <a href="index" class="mil-logo" style="width: 140px"></a>
            <div class="mil-navigation">
                <nav>
                    <ul>
                        {{-- <li class="mil-has-children"> --}}
                            {{-- <a href="about-us">About us</a> --}}
                        <li class="mil-has-children"><a href="{{route('about-us')}}">About us</a></li>
                        <ul>
                            {{-- <li><a href="home-2.html">Home V2</a></li> --}}
                            {{-- <li><a href="about-us">About us</a></li> --}}
                            {{-- <li><a href="team.html">Team</a></li>
                            <li><a href="team-single.html">Team Member</a></li>
                            <li><a href="careers.html">Careers</a></li>
                            <li><a href="prices.html">Prices</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="event.html">Event</a></li> --}}
                        </ul>
                        {{-- </li> --}}
                        {{-- <li><a href="portfolio.html">Case Studies</a></li> --}}
                        {{-- <li class="mil-has-children"> --}}
                            {{-- <a href="#.">Services</a> --}}
                        <li class="mil-has-children"><a href="{{route('services')}}">Service</a></li>
                        <ul>
                            {{-- <li><a href="services">Service 1</a></li> --}}
                            {{-- <li><a href="service-2.html">Service 2</a></li>
                            <li><a href="service-3.html">Service 3</a></li>
                            <li><a href="service-4.html">Service 4</a></li> --}}
                        </ul>
                        {{-- </li> --}}
                        {{-- <li class="mil-has-children"> --}}
                            {{-- <a href="#.">Solutions</a> --}}
                        <li class="mil-has-children"><a href="{{route('solution')}}">Solution</a></li>

                        {{-- <ul>
                            <li><a href="solution">Solution 1</a></li>
                            <li><a href="solution-2.html">Solution 2</a></li>
                            <li><a href="solution-3.html">Solution 3</a></li>
                        </ul> --}}
                        {{-- </li> --}}

                        {{-- <li><a href="blog.html">Blog</a></li> --}}
                        <li class="mil-has-children"><a href="{{route('contact-us')}}">Contact Us</a></li>
                        {{-- <li class="mil-has-children">
                            <a href="#.">Other</a>
                            <ul>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                    {{-- <div class="mil-search-icon">
                        <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20.5848 19.7029C20.3908 19.8999 20.1358 19.997 19.8808 19.997C19.6268 19.997 19.3718 19.8999 19.1778 19.7029L15.5118 16.2199C13.9778 17.2549 12.3798 17.997 9.92584 17.997C4.98484 17.997 0.964844 13.959 0.964844 8.99695C0.964844 4.34995 4.98484 0.199951 9.92584 0.199951C14.8668 0.199951 18.8858 4.34995 18.8858 8.99695C18.8858 11.118 18.1468 13.68 16.9188 14.608L20.5848 18.29C20.9738 18.681 20.9738 19.3129 20.5848 19.7029ZM9.92584 1.99695C6.82984 1.99695 2.95684 5.13695 2.95684 8.99695C2.95684 12.857 6.82984 15.998 9.92584 15.998C11.8398 15.998 13.5758 15.217 14.8368 13.957C14.8408 13.952 14.8418 13.945 14.8468 13.941C14.8518 13.936 14.8578 13.935 14.8628 13.93C16.1168 12.663 16.8948 10.92 16.8948 8.99695C16.8948 5.13695 13.7678 1.99695 9.92584 1.99695Z" />
                        </svg>
                    </div>
                </nav> --}}

            </div>
            <!-- mobile menu button -->
            <div class="mil-menu-btn">
                <span></span>
            </div>
            <!-- mobile menu button end -->
        </div>
    </div>
</div>
<!-- top bar end -->