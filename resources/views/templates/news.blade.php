<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wallsproperty.netlify.app/homepage-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Aug 2020 09:44:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
@include('templates.partials._head')

<body>
<!-- HEADER -->
<header class="jumbotron bg-theme-v5">
    <div class="bg-overlay"></div>
    <!-- NAVBAR -->
   @include('templates.partials._navbar')
    <!-- END NAVBAR -->
    <!-- HERO -->
    <div class="wrap__intro d-flex align-items-md-center  ">
        <div class="container  ">
            <div class="row align-items-center justify-content-start flex-wrap">
                <div class="col-lg-12 mx-auto">
                    <div class="wrap__intro-heading" data-aos="fade-up">

                        <h1 class="text-capitalize">
                            Find your dream house </h1>
                        <p>Your Property, Our Priority and From as low as $10 per day with limited time offer
                            discounts</p>

                        <div class="bg__overlay-black p-4">
                            <div class="search__property">
                                <div class="position-relative">
                                    <ul class="nav nav-tabs nav-tabs-02 mb-3 justify-content-start" id="pills-tab"
                                        role="tablist">
                                        <li class="nav-item mr-1">
                                            <a class="nav-link active" id="buy-tab" data-toggle="pill" href="#buy"
                                               role="tab" aria-controls="buy" aria-selected="true">Buy </a>
                                        </li>
                                        <li class="nav-item mr-1">
                                            <a class="nav-link" id="rent-tab" data-toggle="pill" href="#rent"
                                               role="tab" aria-controls="rent" aria-selected="false">Rent</a>
                                        </li>

                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade active show" id="buy" role="tabpanel"
                                             aria-labelledby="buy-tab">
                                            <div class=" search__container">
                                                <div class="row input-group no-gutters">
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option selected>Type Property</option>
                                                            <option>House</option>
                                                            <option>Apartement </option>
                                                            <option>Hotel</option>
                                                            <option>Residential</option>
                                                            <option>Land</option>
                                                            <option>Luxury</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Area From">Area From </option>
                                                            <option>1500</option>
                                                            <option>1200</option>
                                                            <option>900</option>
                                                            <option>600</option>
                                                            <option>300</option>
                                                            <option>100</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Bedrooms">Bedrooms</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Bathrooms">Bathrooms</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Locations">Locations</option>
                                                            <option>United Kingdom</option>
                                                            <option>American Samoa</option>
                                                            <option>Belgium</option>
                                                            <option>Canada</option>
                                                            <option>Delaware</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 input-group-append">
                                                        <button class="btn btn-primary btn-block" type="submit">
                                                            <i class="fa fa-search"></i> <span
                                                                    class="ml-1 text-uppercase">search</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="rent" role="tabpanel"
                                             aria-labelledby="rent-tab">
                                            <div class=" search__container">
                                                <div class="row input-group no-gutters">
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option selected>Type Property</option>
                                                            <option>House</option>
                                                            <option>Apartement </option>
                                                            <option>Hotel</option>
                                                            <option>Residential</option>
                                                            <option>Land</option>
                                                            <option>Luxury</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Area From">Area From </option>
                                                            <option>1500</option>
                                                            <option>1200</option>
                                                            <option>900</option>
                                                            <option>600</option>
                                                            <option>300</option>
                                                            <option>100</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Bedrooms">Bedrooms</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Bathrooms">Bathrooms</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select class="select_option form-control" name="select">
                                                            <option data-display="Locations">Locations</option>
                                                            <option>United Kingdom</option>
                                                            <option>American Samoa</option>
                                                            <option>Belgium</option>
                                                            <option>Canada</option>
                                                            <option>Delaware</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-lg-2 input-group-append">
                                                        <button class="btn btn-primary btn-block" type="submit">
                                                            <i class="fa fa-search"></i> <span
                                                                    class="ml-1 text-uppercase">search</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HERO -->
</header>
<!-- END HEADER -->
<section>
    <div class="container">
@yield('content')
    </div>
</section>


<!-- FOOTER -->
<!-- Footer  -->
@include('templates.partials._footer')
<!-- End Footer  -->
<!-- END FOOTER -->

<!-- SCROLL TO TOP -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TO TOP -->
<script src="{{ asset('assets/js/index.bundlebd04.js?8918068d71def746395d') }}"></script>
</body>


<!-- Mirrored from wallsproperty.netlify.app/homepage-v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Aug 2020 09:44:43 GMT -->
</html>