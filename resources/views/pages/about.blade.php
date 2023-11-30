@extends('layouts.app')

@section('content')
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">About Us</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="{{ url('/') }}"><span class="ltn__secondary-color"><i
                                                class="fas fa-home"></i></span> Home</a></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-120--- pb-90 mt--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="img/others/13.png" alt="About Us Image">
                        <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3">

                            <div class="ltn__video-img ltn__animation-pulse1">
                                <img src="img/others/8.png" alt="video popup bg image">
                                <a class="ltn__video-icon-2 ltn__video-icon-2-border---"
                                    href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&amp;showinfo=0"
                                    data-rel="lightcase:myCollection">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-20">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                            <h1 class="section-title">Experience Real Estate Redefined: VILMA ESTATES LIMITED - Your Partner in
                                Property<span>.</span></h1>
                            <p>Welcome to VILMA ESTATES LIMITED - Your Trusted Real Estate Partner. We believe that finding your dream
                                home or making sound real estate investments should be an exciting and seamless experience.
                                With a passion for properties and a commitment to excellence, we have been serving the
                                Nigerian community for two years, helping countless individuals and families turn their real
                                estate dreams into reality. We are ready for YOU.</p>
                        </div>
                        <ul class="ltn__list-item-half clearfix">
                            <li>
                                <i class="flaticon-home-2"></i>
                                Smart Home Design
                            </li>
                            <li>
                                <i class="flaticon-mountain"></i>
                                Beautiful Scene Around
                            </li>
                            <li>
                                <i class="flaticon-heart"></i>
                                Exceptional Lifestyle
                            </li>
                            <li>
                                <i class="flaticon-secure"></i>
                                Complete 24/7 Security
                            </li>
                        </ul>
                        <div class="ltn__callout bg-overlay-theme-05  mt-30">
                            <p>Your real estate journey begins here. Whether you have a specific property in mind or need
                                expert advice, VILMA ESTATES LIMITED is here to assist you every step of the way. Contact us today to
                                schedule a consultation and let us turn your real estate dreams into reality. Thank you for
                                considering us as your trusted real estate partner. We look forward to serving you!</p>
                        </div>
                        <div class="btn-wrapper animated">
                            <a href="{{ url('services') }}" class="theme-btn-1 btn btn-effect-1">OUR SERVICES</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- Our Vision Section -->
    <div class="ltn__about-us-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                        <img src="img/service/11.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-20">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Vision</h6>
                            <h1 class="section-title">Empowering Dreams, Building Legacies<span>.</span></h1>
                            <p>We envision a future where every individual's dreams of homeownership, investment success,
                                and financial stability can be realized. With unwavering dedication, we strive to create a
                                lasting legacy by transforming communities, shaping skylines, and leaving a positive impact
                                on the lives we touch.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Mission Section -->
    <div class="ltn__about-us-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2--- mb-20">
                            <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Mission</h6>
                            <h1 class="section-title">Our mission is clear<span>.</span></h1>
                            <div class="about-us-info-wrap-inner about-us-info-devide---">
                                <p>To deliver exceptional real estate
                                    experiences that exceed expectations and inspire trust.
                                    We accomplish this by providing:</p>
                            </div>
                            <ul>
                                <li>Personalized and innovative solutions tailored to our clients' needs.</li>
                                <li>Meticulous market research and industry expertise.</li>
                                <li>Passionate professionals who are committed to upholding the highest ethical standards,
                                    transparency, and accountability in every transaction.</li>
                                <li>Opportunities to build lasting relationships and embrace change.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                        <img src="img/service/11.jpg" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Core Values Section -->
    <div class="ltn__feature-area section-bg-1 pt-120 pb-90 mb-120---">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Core Values</h6>
                        <h1 class="section-title">Guiding Principles That Define Us</h1>
                    </div>
                </div>
            </div>
            <div class="row ltn__custom-gutter--- justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-info">
                            <h3>Client-Centric</h3>
                            <p>Our clients are at the heart of everything we do. We are dedicated to understanding their
                                needs, providing exceptional service, and delivering results that exceed their expectations.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">
                        <div class="ltn__feature-info">
                            <h3>Integrity</h3>
                            <p>We uphold the highest ethical standards in all our interactions. We are committed to honesty,
                                transparency, and fairness in every transaction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-info">
                            <h3>Excellence</h3>
                            <p>We strive for excellence in everything we do, aiming for the highest quality outcomes and
                                continuous improvement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-info">
                            <h3>Teamwork</h3>
                            <p>We foster a collaborative environment where teamwork, cooperation, and respect for one
                                another are valued. Together, we achieve more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-info">
                            <h3>Innovation</h3>
                            <p>We continuously seek innovative solutions and embrace technology to enhance the real estate
                                experience for our clients and improve our efficiency.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">
                        <div class="ltn__feature-info">
                            <h3>Empathy</h3>
                            <p>We approach every situation with empathy, recognizing that buying or selling a property can
                                be emotionally charged, and we aim to support our clients through every step of the process.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TESTIMONIAL AREA START (testimonial-7) -->
<!-- Client Testimonial Section -->
<div class="ltn__testimonial-area section-bg-1--- bg-image-top pt-120 pb-70" data-bs-bg="img/bg/20.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Testimonials</h6>
                    <h1 class="section-title">Clients Feedback</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__testimonial-slider-5-active slick-arrow-1">
            <!-- Testimonial 1 -->
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i>
                            "Working with VILMA ESTATES LIMITED was an exceptional experience. They helped me find the perfect home that exceeded my expectations. The entire process was smooth and stress-free. I highly recommend their services."
                        </p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="img/testimonial/1.jpg" alt="Jacob William">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Jacob William</h5>
                                <label>Satisfied Home Buyer</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i>
                            "VILMA ESTATES LIMITED made selling my property a breeze. Their team is professional, reliable, and goes the extra mile to ensure a successful transaction. I appreciate their integrity and commitment to excellence."
                        </p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="img/testimonial/2.jpg" alt="Kelian Anderson">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Kelian Anderson</h5>
                                <label>Satisfied Home Seller</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i>
                            "I had a positive experience with VILMA ESTATES LIMITED. Their attention to detail, market expertise, and personalized service were impressive. They truly care about their clients and their real estate goals."
                        </p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="img/testimonial/3.jpg" alt="Adam Joseph">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Adam Joseph</h5>
                                <label>Satisfied Home Buyer</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 4 -->
            <div class="col-lg-4">
                <div class="ltn__testimonial-item ltn__testimonial-item-7">
                    <div class="ltn__testimoni-info">
                        <p><i class="flaticon-left-quote-1"></i>
                            "Choosing VILMA ESTATES LIMITED for my real estate needs was a great decision. They provided expert guidance, maintained open communication, and made the entire process seamless. I highly recommend their services."
                        </p>
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="img/testimonial/4.jpg" alt="James Carter">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>James Carter</h5>
                                <label>Satisfied Home Buyer</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- TESTIMONIAL AREA END -->

    <!-- BLOG AREA START (blog-3) -->
    <div class="ltn__blog-area pt-115--- pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2--- text-center">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">News & Blogs</h6>
                        <h1 class="section-title">Leatest News Feeds</h1>
                    </div>
                </div>
            </div>
            <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/1.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Decorate</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">10 Brilliant Ways To Decorate Your
                                    Home</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/2.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Interior</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">The Most Inspiring Interior Design Of
                                    2021</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/3.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Estate</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">Recent Commercial Real Estate
                                    Transactions</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>May 22, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/4.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Room</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">Renovating a Living Room? Experts
                                    Share Their Secrets</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Item -->
                <div class="col-lg-12">
                    <div class="ltn__blog-item ltn__blog-item-3">
                        <div class="ltn__blog-img">
                            <a href="blog-details.html"><img src="img/blog/5.jpg" alt="#"></a>
                        </div>
                        <div class="ltn__blog-brief">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><i class="far fa-user"></i>by: Admin</a>
                                    </li>
                                    <li class="ltn__blog-tags">
                                        <a href="#"><i class="fas fa-tags"></i>Trends</a>
                                    </li>
                                </ul>
                            </div>
                            <h3 class="ltn__blog-title"><a href="blog-details.html">7 home trends that will shape your
                                    house in 2021</a></h3>
                            <div class="ltn__blog-meta-btn">
                                <div class="ltn__blog-meta">
                                    <ul>
                                        <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>
                                    </ul>
                                </div>
                                <div class="ltn__blog-btn">
                                    <a href="blog-details.html">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </div>
    <!-- BLOG AREA END -->

    <!-- CALL TO ACTION START (call-to-action-6) -->
    <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div
                        class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Looking for a dream home?</h1>
                            <p>We can help you realize your dream of a new home</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="{{ url('properties') }}">Explore Properties <i
                                    class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION END -->
@endsection
