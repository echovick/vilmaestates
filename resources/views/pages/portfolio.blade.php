@extends('layouts.app')

@section('content')
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Our Portfolio</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index-2.html"><span class="ltn__secondary-color"><i
                                                class="fas fa-home"></i></span> Home</a></li>
                                <li>Portfolio</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- Gallery area start -->
    <div class="ltn__gallery-area mb-120">
        <div class="container">
            <!--
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__gallery-menu">
                            <div class="ltn__gallery-filter-menu portfolio-filter text-uppercase mb-50">
                                <button data-filter="*" class="active">all</button>
                                <button data-filter=".filter_category_1">Houses</button>
                                <button data-filter=".filter_category_2">Retail</button>
                                <button data-filter=".filter_category_3">Condos</button>
                            </div>
                        </div>
                    </div>
                </div>
                 -->

            <!-- Portfolio Wrapper Start -->
            <!-- (ltn__gallery-info-hide) Class for 'ltn__gallery-item-info' not showing -->
            <div class="ltn__gallery-active row ltn__gallery-style-2 ltn__gallery-info-hide---">
                <div class="ltn__gallery-sizer col-1"></div>

                <!-- Oak Property -->
                <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                    <!-- Image -->
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="#ltn__inline_description_1" data-rel="lightcase:myCollection">
                                <img src="img/estates/Oakk.jpg" alt="Oak Property Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="far fa-file-alt"></i>
                                </span>
                            </a>
                        </div>
                        <!-- Description -->
                        <div class="ltn__gallery-item-info">
                            <h4><a href="#">Oak Property</a></h4>
                            <p>450sqm, Lugbe</p>
                        </div>
                    </div>
                </div>

                <!-- Olive Property -->
                <div class="ltn__gallery-item filter_category_2 col-lg-4 col-sm-6 col-12">
                    <!-- Image -->
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="#ltn__inline_description_2" data-rel="lightcase:myCollection">
                                <img src="img/estates/Oliveee.jpg" alt="Olive Property Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="far fa-file-alt"></i>
                                </span>
                            </a>
                        </div>
                        <!-- Description -->
                        <div class="ltn__gallery-item-info">
                            <h4><a href="#">Olive Property</a></h4>
                            <p>400sqm, Lugbe</p>
                        </div>
                    </div>
                </div>

                <!-- Pine Property -->
                <div class="ltn__gallery-item filter_category_1 col-lg-4 col-sm-6 col-12">
                    <!-- Image -->
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="#ltn__inline_description_3" data-rel="lightcase:myCollection">
                                <img src="img/estates/image 5.jpg" alt="Pine Property Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="far fa-file-alt"></i>
                                </span>
                            </a>
                        </div>
                        <!-- Description -->
                        <div class="ltn__gallery-item-info">
                            <h4><a href="#">Pine Property</a></h4>
                            <p>250sqm, Idu</p>
                        </div>
                    </div>
                </div>

                <!-- Leo Property -->
                <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                    <!-- Image -->
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="#ltn__inline_description_4" data-rel="lightcase:myCollection">
                                <img src="img/estates/Leo.jpg" alt="Leo Property Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="far fa-file-alt"></i>
                                </span>
                            </a>
                        </div>
                        <!-- Description -->
                        <div class="ltn__gallery-item-info">
                            <h4><a href="#">Leo Property</a></h4>
                            <p>350sqm, Idu</p>
                        </div>
                    </div>
                </div>

                <!-- Iris Property -->
                <div class="ltn__gallery-item filter_category_2 col-lg-4 col-sm-6 col-12">
                    <!-- Image -->
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="#ltn__inline_description_5" data-rel="lightcase:myCollection">
                                <img src="img/estates/Iris.jpg" alt="Iris Property Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="far fa-file-alt"></i>
                                </span>
                            </a>
                        </div>
                        <!-- Description -->
                        <div class="ltn__gallery-item-info">
                            <h4><a href="#">Iris Property</a></h4>
                            <p>500sqm, Idu</p>
                        </div>
                    </div>
                </div>

                <!-- Cedar Property -->
                <div class="ltn__gallery-item filter_category_1 col-lg-4 col-sm-6 col-12">
                    <!-- Image -->
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="#ltn__inline_description_6" data-rel="lightcase:myCollection">
                                <img src="img/estates/Cedar.jpg" alt="Cedar Property Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="far fa-file-alt"></i>
                                </span>
                            </a>
                        </div>
                        <!-- Description -->
                        <div class="ltn__gallery-item-info">
                            <h4><a href="#">Cedar Property</a></h4>
                            <p>300sqm, Idu</p>
                        </div>
                    </div>
                </div>

                <!-- Germaine Property -->
                <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                    <!-- Image -->
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="#ltn__inline_description_7" data-rel="lightcase:myCollection">
                                <img src="img/estates/Kaura.jpg" alt="Germaine Property Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="far fa-file-alt"></i>
                                </span>
                            </a>
                        </div>
                        <!-- Description -->
                        <div class="ltn__gallery-item-info">
                            <h4><a href="#">Germaine Property</a></h4>
                            <p>400sqm, Lugbe</p>
                        </div>
                    </div>
                </div>

                <!-- Paris Property -->
                <div class="ltn__gallery-item filter_category_2 col-lg-4 col-sm-6 col-12">
                    <!-- Image -->
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="#ltn__inline_description_8" data-rel="lightcase:myCollection">
                                <img src="img/estates/image 5.jpg" alt="Paris Property Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="far fa-file-alt"></i>
                                </span>
                            </a>
                        </div>
                        <!-- Description -->
                        <div class="ltn__gallery-item-info">
                            <h4><a href="#">Paris Property</a></h4>
                            <p>350sqm, Lugbe</p>
                        </div>
                    </div>
                </div>

                <!-- Trojan Property -->
                <div class="ltn__gallery-item filter_category_1 col-lg-4 col-sm-6 col-12">
                    <!-- Image -->
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="#ltn__inline_description_9" data-rel="lightcase:myCollection">
                                <img src="img/estates/Trojan.jpg" alt="Trojan Property Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="far fa-file-alt"></i>
                                </span>
                            </a>
                        </div>
                        <!-- Description -->
                        <div class="ltn__gallery-item-info">
                            <h4><a href="#">Trojan Property</a></h4>
                            <p>250sqm, Lugbe</p>
                        </div>
                    </div>
                </div>

                <!-- Nando Ville Property -->
                <div class="ltn__gallery-item filter_category_3 col-lg-4 col-sm-6 col-12">
                    <!-- Image -->
                    <div class="ltn__gallery-item-inner">
                        <div class="ltn__gallery-item-img">
                            <a href="#ltn__inline_description_10" data-rel="lightcase:myCollection">
                                <img src="img/estates/Nando.jpg" alt="Nando Ville Property Image">
                                <span class="ltn__gallery-action-icon">
                                    <i class="far fa-file-alt"></i>
                                </span>
                            </a>
                        </div>
                        <!-- Description -->
                        <div class="ltn__gallery-item-info">
                            <h4><a href="#">Nando Ville Property</a></h4>
                            <p>450sqm, Lifecamp</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Descriptions -->

            <div id="ltn__inline_description_1" style="display: none;">
                <h4 class="first">Oak Property Description</h4>
                <p>A four-bedroom fully detached duplex with an attached BQ (Boys' Quarters) offers spacious elegance and
                    modern comfort...</p>
            </div>

            <div id="ltn__inline_description_2" style="display: none;">
                <h4 class="first">Olive Property Description</h4>
                <p>The four-bedroom penthouse with an attached BQ (Boys' Quarters) is a luxurious, sprawling residence
                    offering unparalleled views...</p>
            </div>

            <div id="ltn__inline_description_3" style="display: none;">
                <h4 class="first">Pine Property Description</h4>
                <p>This elegant four-bedroom terrace duplex offers a harmonious blend of modern design and functional
                    space...</p>
            </div>

            <div id="ltn__inline_description_4" style="display: none;">
                <h4 class="first">Leo Property Description</h4>
                <p>This stunning four-bedroom fully detached duplex boasts elegance and modernity at every turn...</p>
            </div>

            <div id="ltn__inline_description_5" style="display: none;">
                <h4 class="first">Iris Property Description</h4>
                <p>This exquisite five-bedroom fully detached duplex offers spacious living with a perfect blend of elegance
                    and modern comfort...</p>
            </div>

            <div id="ltn__inline_description_6" style="display: none;">
                <h4 class="first">Cedar Property Description</h4>
                <p>This charming four-bedroom semi-detached duplex offers a perfect blend of modern comfort and classic
                    elegance...</p>
            </div>

            <div id="ltn__inline_description_7" style="display: none;">
                <h4 class="first">Germaine Property Description</h4>
                <p>This amazing four-bedroom detached duplex offers spacious living in a serene neighborhood...</p>
            </div>

            <div id="ltn__inline_description_8" style="display: none;">
                <h4 class="first">Paris Property Description</h4>
                <p>This elegant four-bedroom detached duplex offers spacious living with modern amenities...</p>
            </div>

            <div id="ltn__inline_description_9" style="display: none;">
                <h4 class="first">Trojan Property Description</h4>
                <p>This elegant four-bedroom terrace duplex boasts a modern architectural design, combining functionality
                    with aesthetic appeal...</p>
            </div>

            <div id="ltn__inline_description_10" style="display: none;">
                <h4 class="first">Nando Ville Property Description</h4>
                <p>This spacious four-bedroom duplex offers a blend of elegance and functionality...</p>
            </div>

            <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-transparent btn-effect-3 btn-border">LOAD MORE +</a>
            </div>

            <!-- pagination start -->
            <!--
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__pagination text-center margin-top-50">
                            <ul>
                                <li class="arrow-icon"><a href="#"> &leftarrow; </a></li>
                                <li class="active"><a href="blog.html">1</a></li>
                                <li><a href="blog-2.html">2</a></li>
                                <li><a href="blog-2.html">3</a></li>
                                <li><a href="blog-2.html">...</a></li>
                                <li><a href="blog-2.html">10</a></li>
                                <li class="arrow-icon"><a href="#"> &rightarrow; </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                -->
            <!-- pagination end -->

        </div>
    </div>
    <!-- Gallery area end -->

    <!-- CALL TO ACTION START (call-to-action-4) -->
    <div class="ltn__call-to-action-area ltn__call-to-action-4 bg-image pt-115 pb-120" data-bs-bg="img/bg/6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-4 text-center">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// any question you have //</h6>
                            <h1 class="section-title white-color">+234 915 227 9111</h1>
                        </div>
                        <div class="btn-wrapper">
                            <a href="tel:+234 915 227 9111" class="theme-btn-1 btn btn-effect-1">MAKE A CALL</a>
                            <a href="{{ url('contact') }}" class="btn btn-transparent btn-effect-3 white-color">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__call-to-4-img-1">
            <!-- <img src="img/bg/12.png" alt="#"> -->
            <img src="img/slider/21.png" alt="#">
        </div>
        <div class="ltn__call-to-4-img-2">
            <img src="img/bg/11.png" alt="#">
        </div>
    </div>
    <!-- CALL TO ACTION END -->

    <!-- BLOG AREA START (blog-3) -->
    <div class="ltn__blog-area pt-120 pb-70">
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
