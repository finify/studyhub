@extends('home.layout.layout')

@section('header')
<link rel="stylesheet" href="/homeassets/css/index.min.css" />
@endsection

@section('content')

 <!-- hero section start -->
<div class="underlay"></div>
<section class="hero">
    <div class="container d-lg-flex align-items-center">
        <div class="hero_content">
            <h3 class="hero_content-header" data-aos="fade-up">Homework Assistance Excellence for Everyone</h3>
            <div class="hero_content-rating d-flex flex-column flex-sm-row align-items-center">
                <p class="text" data-aos="fade-left">Hundreds of students trust us </p>
                <div class="wrapper" data-aos="fade-left" data-aos-delay="50">
                    <ul class="rating d-flex align-items-center">
                        <li class="rating_star">
                            <i class="icon-star icon"></i>
                        </li>
                        <li class="rating_star">
                            <i class="icon-star icon"></i>
                        </li>
                        <li class="rating_star">
                            <i class="icon-star icon"></i>
                        </li>
                        <li class="rating_star">
                            <i class="icon-star icon"></i>
                        </li>
                        <li class="rating_star">
                            <i class="icon-star icon"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="hero_content-text" data-aos="fade-up" data-aos-delay="50">
            Receive tailored expert support across a spectrum of academic disciplines. We cover over 100 courses and programs to cater to your needs.
            </p>
            <form action="" method="POST">
            @csrf
                <textarea
                    class="field required"
                    placeholder="Describe your project briefly"
                    data-type="message"
                    id="myForm"
                    col="15"
                    name="description"
                    style="height:200px;"
                ></textarea>
                <div class="contacts_form-form_footer">
                    
                    <button class="btn btn--gradient" type="submit">
                        <span class="text">Find an expert</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="hero_media col-lg-6">
            <lottie-player
                src="/homeassets/lottie/hero.json"
                background="transparent"
                speed="1"
                style="width: 100%; height: 100%"
                loop
                autoplay
            ></lottie-player>
        </div>
    </div>
</section>
<!-- hero section end -->

<!-- promo section start -->
<section class="promo">
    <div class="container d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
        <div class="row p-4">
            <div class="col-12 p-2">
                    <img src="/homeassets/img/dataanalysisimage.png" width="100%" alt="">
            </div>
            <!-- <lottie-player
                src="/homeassets/lottie/scene.json"
                background="transparent"
                speed="1"
                style="width: 100%; height: 100%"
                loop
                autoplay
            ></lottie-player> -->
            
        </div>
        <div class="promo_content">
            <h2 class="promo_content-header" data-aos="fade-left">We Have Data Scientist Available</h2>
            <p class="promo_content-text" data-aos="fade-up" data-aos-delay="50">
            Data Analysis is a vital component of modern business as it is crucial for making informed business decisions, but without the proper resources and expertise, it can be a costly and time-consuming endeavor. IntellectFusions offers partnerships to companies and individuals that want a reliable and cost-effective Data Analysis service enabling them to gain valuable insights quickly and efficiently. 
            As your trusted data analytics partner, we leverage our years of expertise and knowledge to deliver accurate and actionable insights tailored to your unique requirements.
            </p>
            <h4>Data areas covered by intellectfusions</h4>
            <ul class="popular_tags courses-tags d-flex flex-wrap align-items-start justify-content-start">
                <li class="list-item" data-aos="fade-left">
                    <a class="tag" href="#">Finances</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="50">
                    <a class="tag" href="#">Academics</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="100">
                    <a class="tag" href="#">Healthcare</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="150">
                    <a class="tag" href="#">Sales</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="200">
                    <a class="tag" href="#">HR</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="250">
                    <a class="tag" href="#">Assets</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="250">
                    <a class="tag" href="#">Brands and products</a>
                </li>
            </ul>
            <div class="wrapper" data-aos="fade-up" data-aos-delay="50">
                <a class="banner_content-btn btn btn--yellow" href="/data">Let get started</a>
            </div>
            <!-- <a class="promo_content-btn btn btn--gradient" href="#" data-aos="fade-up" data-aos-delay="100">
                <span class="text">Talk to an Expert</span>
            </a> -->
        </div>
    </div>
</section>
<!-- promo section end -->

<!-- features section start -->
<div class="features py-5">
    <div class="container">
        <ul class="features_list d-md-flex flex-wrap row">
            <li class="features_list-item col-md-4" data-order="1" data-aos="fade-up">
                <div class="card">
                    <div class="content">
                        <div class="card_media">
                            <i class="icon-user-graduate-solid icon"></i>
                        </div>
                        <div class="card_main">
                            <h5 class="card_main-title display-6">Huge Community of Experts</h5>
                            <p class="card_main-text">
                                We bring together verified college professors, practicing scientist.
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="features_list-item col-md-4" data-order="2" data-aos="fade-up">
                <div class="card">
                    <div class="content">
                        <div class="card_media">
                            <i class="icon-gem-solid icon"></i>
                        </div>
                        <div class="card_main">
                            <h5 class="card_main-title">Affordable Prices</h5>
                            <p class="card_main-text">
                                We use high-tech solutions such as AI-based tools to cover various parts of the process of each project. 
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="features_list-item col-md-4" data-order="3" data-aos="fade-up">
                <div class="card">
                    <div class="content">
                        <div class="card_media">
                            <i class="icon-headset-solid icon"></i>
                        </div>
                        <div class="card_main">
                            <h5 class="card_main-title">24/7 Support</h5>
                            <p class="card_main-text">
                            Our support team is here for you 24/7 to answer any questions and resolve any issues you might have
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="features_list-item col-md-4" data-order="3" data-aos="fade-up">
                <div class="card">
                    <div class="content">
                        <div class="card_media">
                            <i class="icon-money-check-alt-solid icon"></i>
                        </div>
                        <div class="card_main">
                            <h5 class="card_main-title">Safe payment method </h5>
                            <p class="card_main-text">
                            We offer secure payment options with advanced encryption to protect your financial information.
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="features_list-item col-md-4" data-order="3" data-aos="fade-up">
                <div class="card">
                    <div class="content">
                        <div class="card_media">
                            <i class="icon-user-shield-solid icon"></i>
                        </div>
                        <div class="card_main">
                            <h5 class="card_main-title">Money-Back Guarantee</h5>
                            <p class="card_main-text">
                            If you're not completely satisfied with your purchase, we offer a hassle-free refund
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="features_list-item col-md-4" data-order="3" data-aos="fade-up">
                <div class="card">
                    <div class="content">
                        <div class="card_media">
                            <i class="icon-project-diagram-solid icon"></i>
                        </div>
                        <div class="card_main">
                            <h5 class="card_main-title">Data Protection</h5>
                            <p class="card_main-text">
                            We implement robust data protection measures to safeguard your informations
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <!-- <li class="features_list-item col-md-4 col-6" data-order="3" data-aos="fade-up">
                <div class="card">
                    <div class="content">
                        <div class="card_media">
                            <i class="icon-money-check-alt-solid icon"></i>
                        </div>
                        <div class="card_main">
                            <h5 class="card_main-title">Plagiarism Checker</h5>
                            <p class="card_main-text">
                            Ensure the originality of your work with our plagiarism checker.
                            </p>
                        </div>
                    </div>
                </div>
            </li> -->
        </ul>
    </div>
</div>
<!-- features section end -->

<!-- about section start -->
<section class="about">
    <div class="container">
        <div class="about_deco">
            <lottie-player
                src="/homeassets/lottie/wave.json"
                background="transparent"
                speed="1"
                style="width: 100%; height: 100%"
                loop
                autoplay
            ></lottie-player>
        </div>
        <div class="about_main">
            <div class="content">
                <h2 class="about_main-header" data-aos="fade-in">How does it work?</h2>
                <ul class="about_main-list">
                    <li class="about_main-list_item" data-aos="fade-up">
                        <i class="icon-check icon"></i>
                        <div class="content">
                            <h5 class="title">Fill in a brief</h5>
                            <p class="text">Outline your project goals briefly.</p>
                        </div>
                    </li>
                    <li class="about_main-list_item" data-aos="fade-up" data-aos-delay="50">
                        <i class="icon-check icon"></i>
                        <div class="content">
                            <h5 class="title">Register</h5>
                            <p class="text">Join our community by registering as a user.</p>
                        </div>
                    </li>
                    <li class="about_main-list_item" data-aos="fade-up" data-aos-delay="50">
                        <i class="icon-check icon"></i>
                        <div class="content">
                            <h5 class="title">Provide project details </h5>
                            <p class="text">Provide project details in the dialogue box, including requirements, file if any and deadlines, then hit submit.</p>
                        </div>
                    </li>
                    <li class="about_main-list_item" data-aos="fade-up" data-aos-delay="100">
                        <i class="icon-check icon"></i>
                        <div class="content">
                            <h5 class="title">
                                ⁠Chat directly with Admin
                            </h5>
                            <p class="text">⁠Chat directly with any of our administrators to discuss your project in detail. </p>
                        </div>
                    </li>
                    <li class="about_main-list_item" data-aos="fade-up" data-aos-delay="100">
                        <i class="icon-check icon"></i>
                        <div class="content">
                            <h5 class="title">
                                ⁠Pay
                            </h5>
                            <p class="text">⁠Make your payment via any of our reliable gateway </p>
                        </div>
                    </li>
                    <li class="about_main-list_item" data-aos="fade-up" data-aos-delay="100">
                        <i class="icon-check icon"></i>
                        <div class="content">
                            <h5 class="title">
                                Get project delivered
                            </h5>
                            <p class="text">One of our certified writers will work on your assignment and deliver it on your registered email along with a free Plagiarism Report to prove originality of the work on or before the deadline date. </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="about_review" data-aos="zoom-in">
            <div class="about_review-wrapper">
               <img src="/homeassets/img/howitworks.jpeg" alt="" width="100%">
        </div>
    </div>
</section>
<!-- about section end -->
<!-- popular courses section start -->
<section class="popular py-5">
    <div class="container">
        <div class="popular_header">
            <h2 class="popular_header-title" data-aos="fade-up">Services</h2>
            <p class="popular_header-text" data-aos="fade-down">
               Explore the wide range of services we offer to discover how we can support your success:
            </p>
        </div>
        <ul class="popular_tags courses-tags d-flex flex-wrap align-items-center justify-content-center">
            @forelse ($projecttypes as $projecttype)
                <li class="list-item" data-aos="fade-left">
                    <a class="tag" href="#">{{ $projecttype['type_name']}}</a>
                </li>
            @empty
                <div class="alert alert-danger" role="alert">No project type</div>
            @endforelse
            
        </ul>
       
    </div>
</section>
<!-- info blocks section end -->
<!-- banner section start -->
<div class="banner">
    <div class="underlay"></div>
    <div class="container d-lg-flex align-items-center">
        <div class="banner_content">
            <h4 class="banner_content-title mb-3" data-aos="fade-up">
                What we do
            </h4>
            <p class="text-light" style="color:white!important;">
            IntellectFusions offers a wide range of services to help businesses and students succeed. Our data analysis services can transform raw data into valuable insights that drive growth, reduce costs, and improve decision-making. We also offer professional academic writing services for students, covering all types of assignments and papers. And for businesses, students, and other clients, we create high-quality PowerPoint presentations that effectively communicate information and ideas. In addition, we offer a variety of other services as needed, tailored to the unique requirements of our clients.
            </p>
            <div class="wrapper" data-aos="fade-up" data-aos-delay="50">
                <a class="banner_content-btn btn btn--yellow" href="/user/login">Get Started Today</a>
            </div>
        </div>
        <div class="banner_media">
            <picture>
                <source data-srcset="/homeassets/img/action.webp" srcset="/homeassets/img/action.webp" />
                <img class="lazy" data-src="/homeassets/img/action.webp" src="/homeassets/img/action.webp" alt="media" />
            </picture>
        </div>
    </div>
</div>
<!-- banner section end -->

 
@endsection