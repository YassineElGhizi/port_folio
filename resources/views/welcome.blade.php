<!DOCTYPE html>
<html lang="en">

@include('components.head')

<body class="template-color-1 home-sticky spybody" data-spy="scroll" data-target=".navbar-example2" data-offset="150">


<!-- start Header area -->
<div class="d-none d-xl-block">
    <header class="rn-header-area d-flex align-items-start flex-column left-header-style">
        <div class="logo-area">
            <a>
                <img src="https://avatars.githubusercontent.com/u/86019502?v=4" alt="personal-logo">
            </a>
        </div>
        <nav id="sideNavs" class="mainmenu-nav navbar-example2">
            <ul class="primary-menu nav nav-pills">
                <li class="nav-item"><a class="nav-link smoth-animation-two" href="#features"> <i
                            data-feather="briefcase"></i>Features</a></li>
                <li class="nav-item"><a class="nav-link smoth-animation-two" href="#resume"><i data-feather="user"></i>Resume</a>
                </li>
                <li class="nav-item"><a class="nav-link smoth-animation-two" href="#portfolio"><i
                            data-feather="layers"></i>Portfolio</a></li>

                <li class="nav-item"><a class="nav-link smoth-animation-two" href="#contacts"><i
                            data-feather="message-circle"></i>Contact</a></li>
            </ul>
        </nav>
        <div class="footer">
            <div class="social-share-style-1 mt--40">
                <span class="title">find me in</span>
                <ul class="social-share d-flex liststyle">
                    <li class="facebook">
                        <a href="https://github.com/YassineElGhizi"><i data-feather="github"></i></a>
                    </li>
                    <li class="instagram">
                        <a href="https://www.linkedin.com/in/yassine-el-ghizi/"><i data-feather="linkedin"></i></a>
                    </li>

                </ul>
            </div>
        </div>
    </header>
</div>
<!-- start Header area end -->

<!-- Header Mobile Bar  -->
<div class="header-style-2 d-block d-xl-none">
    <div class="row align-items-center">
        <div class="col-6">
            <div class="logo">
                <a href="">
                    <img src="https://avatars.githubusercontent.com/u/86019502?v=4" alt="Logo"
                         style="border-radius: 50%">
                </a>
            </div>
        </div>
        <div class="col-6">
            <div class="header-right text-right">
                <div class="hamberger-menu">
                    <i id="menuBtn" class="feather-menu humberger-menu"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Mobile Bar  -->

<!-- Start Popup Mobile Menu  -->
<div class="popup-mobile-menu">
    <div class="inner">
        <div class="menu-top">
            <div class="menu-header">
                <a class="logo" href="">
                    <img src="https://avatars.githubusercontent.com/u/86019502?v=4" alt="Personal Portfolio"
                         style="border-radius: 50%">
                </a>
                <div class="close-button">
                    <button class="close-menu-activation close"><i data-feather="x"></i></button>
                </div>
            </div>

        </div>
        <div class="content">
            <ul class="primary-menu nav nav-pills">
                <li class="nav-item"><a class="nav-link smoth-animation-two" href="#features">Features</a></li>
                <li class="nav-item"><a class="nav-link smoth-animation-two" href="#resume">Resume</a></li>
                <li class="nav-item"><a class="nav-link smoth-animation-two" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link smoth-animation-two" href="#contacts">Contact</a></li>
            </ul>
            <!-- social sharea area -->
            <div class="social-share-style-1 mt--40">
                <span class="title">find me in</span>
                <ul class="social-share d-flex liststyle">
                    <li class="facebook">
                        <a href="https://github.com/YassineElGhizi"><i data-feather="github"></i></a>
                    </li>
                    <li class="instagram">
                        <a href="https://www.linkedin.com/in/yassine-el-ghizi/"><i data-feather="linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <!-- end -->
        </div>
    </div>
</div>
<!-- End Popup Mobile Menu  -->

<main class="page-wrapper-two">


    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif


    <!-- start slider area -->
    <section id="home" class="slider-style-5 rn-section-gap pb--110 align-items-center with-particles"
             style="height: 100vh">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="height: 55vh;">
                    <div class="banner-inner" style="padding-top: 16rem">
                        <h1>Yassine EL GHIZI</h1>
                        <!-- type headline start-->
                        <span class="cd-headline clip is-full-width">
                                <span>I am a</span>
                            <!-- ROTATING TEXT -->
                            <span class="cd-words-wrapper">
                                    <b class="is-visible">Full Stack Developer.</b>
                                    <b class="is-hidden">Data Engineer.</b>
                                    <b class="is-hidden">Backend Developer.</b>
                                </span>
                            </span>
                        <!-- type headline end -->
                        <div class="button-area">
                            <a class="rn-btn" href="#contacts"><span>CONTACT ME</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start slider area End -->

    @include('components.services')

    @include('components.resume')

    <!-- Start Portfolio Area -->
    <div class="rn-portfolio-area rn-section-gap section-separator" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div data-aos="fade-up" data-aos-duration="500" data-aos-delay="100" data-aos-once="true"
                         class="section-title text-center">
                        <span class="subtitle">Visit my personal projects</span>
                        <h2 class="title">My Personal Projects</h2>
                    </div>
                </div>
            </div>

            <div class="row row--25 mt--10 mt_md--10 mt_sm--10">


                <!-- Start Single Portfolio -->
                <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true"
                     class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-portfolio" data-toggle="modal" data-target="#ukranews">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img src="{{url('/images/ukranews/ukra2.png')}}">
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Full Stack | Data Engineering</a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">News Platform Regarding The
                                        Russo-Ukrainian War
                                        <i class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio -->

                <!-- Start Single Portfolio -->
                <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true"
                     class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-portfolio" data-toggle="modal" data-target="#stock">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img
                                        src="https://user-images.githubusercontent.com/86019502/189386615-871a81e3-8624-4627-9fa9-ffe9e0171bf9.png">
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Full Stack Spring Boot/Angular</a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">Rock Paper Scissors<i
                                            class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio -->

                <!-- Start Single Portfolio -->
                <div data-aos="fade-up" data-aos-delay="100" data-aos-once="true"
                     class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-portfolio" data-toggle="modal" data-target="#exampleModalCenter">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img
                                        src="https://user-images.githubusercontent.com/86019502/144761617-7a15e130-5f76-4b92-aec1-63215bd0de51.png"
                                    >
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Data Engineering</a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">Fake News Detection.<i
                                            class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio -->

                <!-- Start Single Portfolio -->
                <div data-aos="fade-up" data-aos-delay="300" data-aos-once="true"
                     class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-portfolio" data-toggle="modal" data-target="#gabor">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img
                                        src="https://user-images.githubusercontent.com/86019502/147651036-0b0e0e5b-ef1c-47c8-b8f6-6a2f50e24811.jpg"
                                    >
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Search Engine</a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">Content based image search (Gabor
                                        Filters)<i class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio -->

                <!-- Start Single Portfolio -->
                <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true"
                     class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-portfolio" data-toggle="modal" data-target="#spring">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img
                                        src="https://user-images.githubusercontent.com/86019502/185987109-a7bcf75b-d463-4756-b132-18d80d5b46ff.png"
                                    >
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Spring Boot</a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">Spring Boot - Thymeleaf
                                        <i class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio -->

                <!-- Start Single Portfolio -->
                <div data-aos="fade-up" data-aos-delay="500" data-aos-once="true"
                     class="col-lg-6 col-xl-4 col-md-6 col-12 mt--50 mt_md--30 mt_sm--30">
                    <div class="rn-portfolio" data-toggle="modal" data-target="#express">
                        <div class="inner">
                            <div class="thumbnail">
                                <a href="javascript:void(0)">
                                    <img
                                        src="https://user-images.githubusercontent.com/86019502/175571375-2a56f5e1-904a-4d5b-bd32-5bcd94dbfee6.png"
                                    >
                                </a>
                            </div>
                            <div class="content">
                                <div class="category-info">
                                    <div class="category-list">
                                        <a href="javascript:void(0)">Rest API</a>
                                    </div>
                                </div>
                                <h4 class="title"><a href="javascript:void(0)">ExpressJS - Rest API
                                        <i class="feather-arrow-up-right"></i></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Portfolio -->


            </div>
        </div>
    </div>
    <!-- End portfolio Area -->


    @include('components.contact')

    <!-- Start Footer Area -->
    {{--    <div class="rn-footer-area rn-section-gap section-separator">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12">--}}
    {{--                    <div class="footer-area text-center">--}}
    {{--                        <p class="description mt--30">Created by El GHIZI Yassine--}}
    {{--                        </p>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- End Footer Area -->
    <!-- modal area -->
    <!-- Modal Portfolio Body area Start -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i data-feather="x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="portfolio-popup-thumbnail">
                                <div class="image">
                                    <img class="w-100"
                                         src="https://user-images.githubusercontent.com/86019502/144761617-7a15e130-5f76-4b92-aec1-63215bd0de51.png"
                                         alt="slide">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-content">
                                <h3>
                                    <span>Data Engineering</span> Fake News Detection.
                                </h3>
                                <p class="mb--30">This project aims at developing an application that uses a Data
                                    Pipeline in order to collect data, apply on them some preprocessing in order to
                                    consume them by a Machine Learning model, and finally consume them by a SPA.</p>
                                <br>
                                <p><a class="title" href="https://github.com/YassineElGhizi/Fake_News_Detection"><i
                                            class="feather-arrow-up-right"></i>Github Repo</a></p>
                            </div>
                            <!-- End of .text-content -->
                        </div>
                    </div>
                    <!-- End of .row Body-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Portfolio area -->
    <div class="modal fade" id="gabor" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i data-feather="x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="portfolio-popup-thumbnail">
                                <div class="image">
                                    <img class="w-100"
                                         src="https://user-images.githubusercontent.com/86019502/147651036-0b0e0e5b-ef1c-47c8-b8f6-6a2f50e24811.jpg"
                                         alt="slide">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-content">
                                <h3>
                                    <span>Search Engine</span> Content based image search (Gabor Filters).
                                </h3>
                                <p class="mb--30">this project is a CBIR (content based image search) that uses Gabor
                                    filters as the main measure to find similar images to a given query image.</p>
                                <br>
                                <p><a class="title"
                                      href="https://github.com/YassineElGhizi/content_based_image_search_gabor_filters"><i
                                            class="feather-arrow-up-right"></i>Github Repo</a></p>
                            </div>
                            <!-- End of .text-content -->
                        </div>
                    </div>
                    <!-- End of .row Body-->
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="ukranews" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i data-feather="x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="portfolio-popup-thumbnail">
                                <div class="image">
                                    <img class="w-100" src="{{url('/images/ukranews/ukra1.png')}}">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-content">
                                <h3>
                                    <span>Full Stack | Data Engineering</span> News Platform Regarding The
                                    Russo-Ukrainian War News.
                                </h3>
                                <p class="mb--30">This Web Application is the Fruits of a two Months Efforts. A Platform
                                    That Covers The Latest Updates Regarding The Russo-ukrainian War. A project that is
                                    Already In Production And That I'm Proud Of.</p>
                                <br>
{{--                                <p><a class="title" href="https://ukranews.net/"><i--}}
{{--                                            class="feather-arrow-up-right"></i>Visit The Website</a></p>--}}
                            </div>
                            <!-- End of .text-content -->
                        </div>
                    </div>
                    <!-- End of .row Body-->
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="express" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i data-feather="x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="portfolio-popup-thumbnail">
                                <div class="image">
                                    <img class="w-100"
                                         src="https://user-images.githubusercontent.com/86019502/175571375-2a56f5e1-904a-4d5b-bd32-5bcd94dbfee6.png"
                                         alt="slide">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-content">
                                <h3>
                                    <span>Rest API</span> ExpressJS Rest API.
                                </h3>
                                <p class="mb--30">An Express JS Complete Rest Api that includes ; connection with Mysql
                                    , Prisma as ORM , Data Validation, Pagination, Status code ...</p>
                                <br>
                                <p><a class="title" href="https://github.com/YassineElGhizi/express_complet_rest_api"><i
                                            class="feather-arrow-up-right"></i>Github Repo</a></p>
                            </div>
                            <!-- End of .text-content -->
                        </div>
                    </div>
                    <!-- End of .row Body-->
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="spring" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i data-feather="x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="portfolio-popup-thumbnail">
                                <div class="image">
                                    <img class="w-100"
                                         src="https://user-images.githubusercontent.com/86019502/185987109-a7bcf75b-d463-4756-b132-18d80d5b46ff.png"
                                         alt="slide">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-content">
                                <h3>
                                    <span>Full Stack Application</span>Java Spring Boot.
                                </h3>
                                <p class="mb--30">This project represents a Full stack web application that includes the
                                    following features ; authentication ,sessions management, CRUD operations
                                    ,supporting file upload. This application is built using Java Spring Boot &
                                    thymeleaf.</p>
                                <br>
                                <p><a class="title"
                                      href="https://github.com/YassineElGhizi/spring_boot_mvc_with_authentication_todo_app"><i
                                            class="feather-arrow-up-right"></i>Github Repo</a></p>
                            </div>
                            <!-- End of .text-content -->
                        </div>
                    </div>
                    <!-- End of .row Body-->
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="spring" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i data-feather="x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="portfolio-popup-thumbnail">
                                <div class="image">
                                    <img class="w-100"
                                         src="https://user-images.githubusercontent.com/86019502/184879502-24bb332d-a70f-4d15-850a-c7cca8456e2a.png"
                                         alt="slide">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-content">
                                <h3>
                                    <span>Full Stack Application</span>Java Spring Boot.
                                </h3>
                                <p class="mb--30">This project represents a Full stack application that includes the
                                    following features ; classical authentication (email & Hashed password) , CRUD
                                    operations with file upload. This application is built using Java Spring Boot &
                                    thymeleaf</p>
                                <br>
                                <p><a class="title"
                                      href="https://github.com/YassineElGhizi/spring_boot_mvc_with_authentication_todo_app"><i
                                            class="feather-arrow-up-right"></i>Github Repo</a></p>
                            </div>
                            <!-- End of .text-content -->
                        </div>
                    </div>
                    <!-- End of .row Body-->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="stock" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i data-feather="x"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="portfolio-popup-thumbnail">
                                <div class="image">
                                    <img class="w-100"
                                         src="https://user-images.githubusercontent.com/86019502/189386636-349b9988-8c93-4d46-a3cf-eb44445871c2.png">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-content">
                                <h3>
                                    Java Spring Boot & Angular.
                                </h3>
                                <p class="mb--30">A rock paper scissors mini-game where you can play and compare you
                                    results with other players. This App has been developed using Java Spring Boot(JPA,
                                    Spring security) and Angular 14(State Management using Redux)</p>
                                <br>
                                <p><a class="title"
                                      href="https://github.com/YassineElGhizi/spring_boot_mvc_with_authentication_todo_app"><i
                                            class="feather-arrow-up-right"></i>Github Repo</a></p>
                            </div>
                            <!-- End of .text-content -->
                        </div>
                    </div>
                    <!-- End of .row Body-->
                </div>
            </div>
        </div>
    </div>


    <!-- Back to  top Start -->
    <div class="backto-top">
        <div>
            <i data-feather="arrow-up"></i>
        </div>
    </div>
    <!-- Back to top end -->

</main>


<!-- JS ============================================ -->
<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/vendor/modernizer.min.js"></script>
<script src="assets/js/vendor/feather.min.js"></script>
<script src="assets/js/vendor/slick.min.js"></script>
<script src="assets/js/vendor/bootstrap.js"></script>
<script src="assets/js/vendor/text-type.js"></script>
<script src="assets/js/vendor/wow.js"></script>
<script src="assets/js/vendor/aos.js"></script>
<script src="assets/js/vendor/particles.js"></script>
<!-- main JS -->
<script src="assets/js/main.js"></script>

<script>
    particlesJS('particles-js',

        {
            "particles": {
                "number": {
                    "value": 20,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": ["#ffffff",]
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 4
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.8,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 4,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": false,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 800,
                        "size": 40,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true,
            "config_demo": {
                "hide_card": false,
                "background_color": "#b61924",
                "background_image": "",
                "background_position": "50% 50%",
                "background_repeat": "no-repeat",
                "background_size": "cover"
            }
        }
    );
</script>
</body>

</html>


