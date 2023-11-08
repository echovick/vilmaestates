<div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="site-logo-wrap">
                    <div class="site-logo">
                        <a href="{{ url('/') }}"><img style="max-width:90px;"
                                src="{{ asset('img/Vilma logo 2_044054.png') }}" alt="Logo"></a>
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
                                id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Utilize Cart Menu Start -->
{{-- <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Cart</span>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="mini-cart-product-area ltn__scrollbar">
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ asset('img/product/1.png') }}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Wheel Bearing Retainer</a></h6>
                    <span class="mini-cart-quantity">1 x $65.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ asset('img/product/2.png') }}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">3 Rooms Manhattan</a></h6>
                    <span class="mini-cart-quantity">1 x $85.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ asset('img/product/3.png') }}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">OE Replica Wheels</a></h6>
                    <span class="mini-cart-quantity">1 x $92.00</span>
                </div>
            </div>
            <div class="mini-cart-item clearfix">
                <div class="mini-cart-img">
                    <a href="#"><img src="{{ asset('img/product/4.png') }}" alt="Image"></a>
                    <span class="mini-cart-item-delete"><i class="icon-cancel"></i></span>
                </div>
                <div class="mini-cart-info">
                    <h6><a href="#">Shock Mount Insulator</a></h6>
                    <span class="mini-cart-quantity">1 x $68.00</span>
                </div>
            </div>
        </div>
        <div class="mini-cart-footer">
            <div class="mini-cart-sub-total">
                <h5>Subtotal: <span>$310.00</span></h5>
            </div>
            <div class="btn-wrapper">
                <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
            </div>
            <p>Free Shipping on All Orders Over $100!</p>
        </div>

    </div>
</div> --}}
<!-- Utilize Cart Menu End -->

<!-- Utilize Mobile Menu Start -->
<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <div class="site-logo">
                <a href="index-2.html"><img style="max-width:90px;" src="{{ asset('img/Vilma logo 2_044054.png') }}" alt="Logo"></a>
            </div>
            <button class="ltn__utilize-close">×</button>
        </div>
        <div class="ltn__utilize-menu-search-form">
            <form action="#">
                <input type="text" placeholder="Search...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="ltn__utilize-menu">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">About</a>
                    <ul class="sub-menu">
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
            </ul>
        </div>
        {{-- <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
            <ul>
                <li>
                    <a href="account.html" title="My Account">
                        <span class="utilize-btn-icon">
                            <i class="far fa-user"></i>
                        </span>
                        My Account
                    </a>
                </li>
                <li>
                    <a href="wishlist.html" title="Wishlist">
                        <span class="utilize-btn-icon">
                            <i class="far fa-heart"></i>
                            <sup>3</sup>
                        </span>
                        Wishlist
                    </a>
                </li>
                <li>
                    <a href="cart.html" title="Shoping Cart">
                        <span class="utilize-btn-icon">
                            <i class="fas fa-shopping-cart"></i>
                            <sup>5</sup>
                        </span>
                        Shoping Cart
                    </a>
                </li>
            </ul>
        </div> --}}
        <div class="ltn__social-media-2">
            <ul>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Utilize Mobile Menu End -->

<div class="ltn__utilize-overlay"></div>
