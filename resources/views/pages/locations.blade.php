@extends('layouts.app')

@section('content')
    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image mb-0" data-bs-bg="img/bg/14.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Google Map Locations</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index-2.html"><span class="ltn__secondary-color"><i
                                                class="fas fa-home"></i></span> Home</a></li>
                                <li>Locations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- GOOGLE MAP LOCATIONS AREA START -->
    <div class="ltn__google-map-locations-area">
        <div id="gmap"></div>
    </div>
    <!-- GOOGLE MAP LOCATIONS AREA END -->

    <!-- GOOGLE MAP LOCATIONS LIST AREA START -->
    <div class="ltn__google-map-locations-list-area mt-115 mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__location-search mb-100">
                        <div class="section-title-area ltn__section-title-2 ">
                            <h1 class="section-title">Find your nearby location<span>.</span></h1>
                        </div>
                        <form action="#" class="clearfix">
                            <h3>Your State</h3>
                            <div class="input-item">
                                <select class="nice-select">
                                    <option>Make A Selection</option>
                                    <option>Kubwa</option>
                                    <option>Wuse</option>
                                    <option>Garki</option>
                                    <option>Maitama</option>
                                    <option>Asokoro</option>
                                    <option>Jabi</option>
                                    <option>Lugbe</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="ltn__state-location">
                        <h2 class="ltn__state-location-title">Alabama</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Port Harcourt, Nigeria</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street
                            Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="appointment.html" class="btn btn-transparent btn-border btn-effect-4"><i
                                    class="fas fa-location-arrow"></i> Get An Appointment</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Port Harcourt, Nigeria</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street
                            Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="appointment.html" class="btn btn-transparent btn-border btn-effect-4"><i
                                    class="fas fa-location-arrow"></i> Get An Appointment</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Port Harcourt, Nigeria</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street
                            Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="appointment.html" class="btn btn-transparent btn-border btn-effect-4"><i
                                    class="fas fa-location-arrow"></i> Get An Appointment</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Port Harcourt, Nigeria</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street
                            Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="appointment.html" class="btn btn-transparent btn-border btn-effect-4"><i
                                    class="fas fa-location-arrow"></i> Get An Appointment</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Port Harcourt, Nigeria</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street
                            Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="appointment.html" class="btn btn-transparent btn-border btn-effect-4"><i
                                    class="fas fa-location-arrow"></i> Get An Appointment</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Port Harcourt, Nigeria</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street
                            Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="appointment.html" class="btn btn-transparent btn-border btn-effect-4"><i
                                    class="fas fa-location-arrow"></i> Get An Appointment</a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="ltn__state-location">
                        <h2 class="ltn__state-location-title">Boston</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Port Harcourt, Nigeria</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street
                            Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="appointment.html" class="btn btn-transparent btn-border btn-effect-4"><i
                                    class="fas fa-location-arrow"></i> Get An Appointment</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Port Harcourt, Nigeria</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street
                            Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="appointment.html" class="btn btn-transparent btn-border btn-effect-4"><i
                                    class="fas fa-location-arrow"></i> Get An Appointment</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Port Harcourt, Nigeria</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street
                            Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="appointment.html" class="btn btn-transparent btn-border btn-effect-4"><i
                                    class="fas fa-location-arrow"></i> Get An Appointment</a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="ltn__state-location">
                        <h2 class="ltn__state-location-title">New York</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Port Harcourt, Nigeria</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street
                            Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="appointment.html" class="btn btn-transparent btn-border btn-effect-4"><i
                                    class="fas fa-location-arrow"></i> Get An Appointment</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Port Harcourt, Nigeria</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street
                            Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="appointment.html" class="btn btn-transparent btn-border btn-effect-4"><i
                                    class="fas fa-location-arrow"></i> Get An Appointment</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ltn__map-item">
                        <h3 class="ltn__location-name">Port Harcourt, Nigeria</h3>
                        <h5 class="ltn__location-single-info"><i class="fas fa-map-marked-alt"></i>5816 S. Coulter Street
                            Amarillo, <br> TX 79119</h5>
                        <h4 class="ltn__location-single-info"><i class="fas fa-phone-volume"></i>0123456789</h4>
                        <div class="btn-wrapper">
                            <a href="appointment.html" class="btn btn-transparent btn-border btn-effect-4"><i
                                    class="fas fa-location-arrow"></i> Get An Appointment</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- GOOGLE MAP LOCATIONS LIST AREA END -->

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
