<div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="site-logo-wrap">
                    <div class="site-logo">
                        <a href="{{ url('/') }}"><img style="max-width:90px;" src="{{ asset('img/Vilma logo 2_044054.png') }}"
                                alt="Logo"></a>
                    </div>
                    <div class="get-support clearfix d-none">
                        <div class="get-support-icon">
                            <i class="icon-call"></i>
                        </div>
                        <div class="get-support-info">
                            <h6>Get Support</h6>
                            <h4><a href="tel:+123456789">123-456-789-10</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col header-menu-column">
                <div class="header-menu d-none d-xl-block">
                    <nav>
                        <div class="ltn__main-menu">
                            <ul>
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li class="menu-icon"><a href="#">About</a>
                                    <ul class="sub-menu menu-pages-img-show">
                                        <li>
                                            <a href="{{ url('/about') }}">About Us</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/team') }}">Meet the Team</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/portfolio') }}">Our Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/faqs') }}">FAQs</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/our-locations') }}">Locations</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/properties') }}">Property</a></li>
                                <li><a href="{{ url('/services') }}">Services</a></li>
                                <li><a href="{{ url('/blog') }}">Blog</a></li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                                <li class="special-link">
                                    <a href="{{ url('contact') }}">Make Enquiries</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col--- ltn__header-options ltn__header-options-2 ">
                <!-- Mobile Menu Button -->
                <div class="mobile-menu-toggle d-xl-none">
                    <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                        <svg viewBox="0 0 800 600">
                            <path
                                d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                id="top"></path>
                            <path d="M300,320 L540,320" id="middle"></path>
                            <path
                                d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                id="bottom"
                                transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
