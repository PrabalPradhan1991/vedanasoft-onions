@extends('frontend.main')    

@section('content')
    <!-- Hero Header -->
    <header class="hero-header" style="background-image: url({{ asset('onion/img/hero-header.webp') }}">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Onion Films!</div>
                <div class="intro-heading">We  bring stories to life</div>
                <a href="#services" class="btn btn-primary btn-lg">See More</a>
            </div>
        </div>
    </header>


 <!-- Our Services -->
    <section class="page-section " id="services">
        <div class="container ">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="title-section"><span class="title-regular">OUR</span><br/>SERVICES</h2>
                    <hr class="title-underline" />
                </div>
                <div class="col-md-4 ">
                    <div class="col-xs-2 box-icon">
                        <div class="fa fa-camera"></div>
                    </div>
                    <div class="col-xs-10">
                        <h4>PHOTOGRAPHY</h4>
                        
                    </div>
                    <div class="col-md-12">
                        <p>
                            Our photography services include: Full day or half day photoshoot with all nescessary equipment.Professional camera and lens kit.Professional lighting setup. 
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="col-xs-2 box-icon">
                        <div class="fa fa-camera"></div>
                    </div>
                    <div class="col-xs-10">
                        <h4>VIDEOGRAPHY</h4>
                        <h5></h5>
                    </div>
                    <div class="col-md-12">
                        <p>
                            Our video production services include: Video marketing strategy. Scriptwriting and editing. Storyboarding.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <!--<div class="col-xs-2 box-icon">
                        <div class="fa fa-camera"></div>
                    </div>
                    <div class="col-xs-10">
                        <h4>PHOTOGRAPHY</h4>
                        <h5>Lorem Ipsum Dolor</h5>
                    </div>
                    <div class="col-md-12">
                        <p>
                            Maecenas luctus nisi in sem fermentum blat. In nec elit solliudin, elementum, dictum pur quam volutpat suscipit antena.
                        </p>
                    </div>-->
                </div>
                <div class="col-md-4 ">
                    <div class="col-xs-2 box-icon">
                        <div class="fa fa-pencil"></div>
                    </div>
                    <div class="col-xs-10">
                        <h4>GRAPHICS</h4>
                        
                    </div>
                    <div class="col-xs-12">
                        <p>
                            We are experts in the art of full-service commercial printing, packaging and on time delivery. Behind every project are committed master craftmanship.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="col-xs-2 box-icon">
                        <div class="fa fa-bullseye"></div>
                    </div>
                    <div class="col-xs-10">
                        <h4>BRANDING</h4>
                        
                    </div>
                    <div class="col-md-12">
                        <p>
                            The process involved in creating a unique name and image for a product in the comsumers' mind, mainly through advertising campaigns with a consistent theme.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!-- VIDEO -->
    <div class="page-section-no-padding  video-container" style="background-image: url(https://youtu.be/uhTze2v9cbE); background-size: cover;">
        <div class="video-content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12 ">
                        SEE HOW
                        <a class="fancybox-media vide-icon" href="https://youtu.be/uhTze2v9cbE"><i class=" fa fa-play-circle-o"></i></a> WE WORK
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Full Spotlight left-->
    <div class="featured-work">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <h1>Featured Work</h1>
                       
                    </div>
                </div>
            </div>
        </div>
    <section class="page-section-no-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="container col-md-6">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-4 spotlight-container">
                            <h2 class="title-section"><span class="title-regular">WILDLIFE</span><br/>PHOTOGRAPHY</h2>
                            <hr class="title-underline" />
                            <p>
                                Wildlife photography is a genre of photography concerned with documenting various forms of wildlife in there natural habitat. As well as requiring photography skills, wildlife photographers may need field craft skills.
                            </p>
                            <a href="#" class="btn btn-primary">More Information</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 spotlight-img-cont" style="background-image: url({{ asset('onion/img/spotlight-left.webp') }}); "> </div>
            </div>
        </div>
    </section>





    <!-- Full Spotlight right-->
    <section class="page-section-no-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="container col-md-6 col-md-push-6">
                    <div class="row">
                        <div class="col-md-7 col-md-offset-1 spotlight-container">
                            <h2 class="title-section"><span class="title-regular">WILDLIFE</span><br/>PHOTOGRAPHY</h2>
                            <hr class="title-underline" />
                            <p>
                                 Wildlife photography is a genre of photography concerned with documenting various forms of wildlife in there natural habitat. As well as requiring photography skills, wildlife photographers may need field craft skills.
                            </p>
                            <a href="#" class="btn btn-primary">More Information</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-6 spotlight-img-cont" style="background-image: url({{ asset('onion/img/spotlight-right.webp') }}); "> </div>
            </div>
        </div>
    </section>





   



    <!-- Portfolio / Projects -->
    <section class="page-section">
        <div class="container">
            <!-- /3 Column Portfolio -->
            <div class="filter-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                        <h2 class="title-section"><span class="title-regular">RECENT</span><br/>WORK</h2>
                        <hr class="title-underline" />
                    </div>
                    </div>
                </div>
            </div>

            <div class="portfolio-section port-col">

                <div class="row">
                    <div class="isotopeContainer">

                        <div class="col-md-4 isotopeSelector photography">
                            <article class="">
                                <figure>
                                    <img src="{{ asset('onion/img/portfolio.webp') }}" alt="">
                                    <div class="overlay-background">
                                        <div class="inner"></div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inner-overlay">
                                            <div class="row margin-0 project-content">
                                                <div class="col-md-12 info-head">
                                                    <h3>Project Title</h3>
                                                    <h4>Category</h4>
                                                </div>
                                                <div class="col-md-12 info">
                                                    <p>The ultimate goal is taking great photos of photos, but do not let your end goal distract you form your experience...</p>
                                                    <p><a title="Project Image" class="fancybox-pop fancybox.image" href="{{ asset('onion/img/portfolio.webp') }}"><i class="fa fa-search fa-border fa-2x"></i></a>
                                                        <a title="Project Link" href="{{ route('portfolio-item') }}"><i class="fa fa-link fa-border fa-2x"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>

                        <div class="col-md-4 isotopeSelector photography illustrations">
                            <article class="">
                                <figure>
                                    <img src="{{ asset('onion/img/portfolio.webp') }}" alt="">
                                    <div class="overlay-background">
                                        <div class="inner"></div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inner-overlay">
                                            <div class="row margin-0 project-content">
                                                <div class="col-md-12 info-head">
                                                    <h3>Project Title</h3>
                                                    <h4>Category</h4>
                                                </div>
                                                <div class="col-md-12 info">
                                                    <p>The ultimate goal is taking great photos of photos, but do not let your end goal distract you form your experience...</p>
                                                    <p><a title="Project Image" class="fancybox-pop fancybox.image" href="{{ asset('onion/img/portfolio.webp') }}"><i class="fa fa-search fa-border fa-2x"></i></a>
                                                        <a title="Project Link" href="{{ route('portfolio-item') }}"><i class="fa fa-link fa-border fa-2x"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>

                        <div class="col-md-4 isotopeSelector art">
                            <article class="">
                                <figure>
                                    <img src="{{ asset('onion/img/portfolio.webp') }}" alt="">
                                    <div class="overlay-background">
                                        <div class="inner"></div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inner-overlay">
                                            <div class="row margin-0 project-content">
                                                <div class="col-md-12 info-head">
                                                    <h3>Project Title</h3>
                                                    <h4>Category</h4>
                                                </div>
                                                <div class="col-md-12 info">
                                                    <p>The ultimate goal is taking great photos of photos, but do not let your end goal distract you form your experience...</p>
                                                    <p><a title="Project Image" class="fancybox-pop fancybox.image" href="{{ asset('onion/img/portfolio.webp') }}"><i class="fa fa-search fa-border fa-2x"></i></a>
                                                        <a title="Project Link" href="{{ route('portfolio-item') }}"><i class="fa fa-link fa-border fa-2x"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>

                        <div class="col-md-4 isotopeSelector photography">
                            <article class="">
                                <figure>
                                    <img src="{{ asset('onion/img/portfolio.webp') }}" alt="">
                                    <div class="overlay-background">
                                        <div class="inner"></div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inner-overlay">
                                            <div class="row margin-0 project-content">
                                                <div class="col-md-12 info-head">
                                                    <h3>Project Title</h3>
                                                    <h4>Category</h4>
                                                </div>
                                                <div class="col-md-12 info">
                                                    <p>The ultimate goal is taking great photos of photos, but do not let your end goal distract you form your experience...</p>
                                                    <p><a title="Project Image" class="fancybox-pop fancybox.image" href="{{ asset('onion/img/portfolio.webp') }}"><i class="fa fa-search fa-border fa-2x"></i></a>
                                                        <a title="Project Link" href="{{ route('portfolio-item') }}"><i class="fa fa-link fa-border fa-2x"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>

                        <div class="col-md-4 isotopeSelector photography websites">
                            <article class="">
                                <figure>
                                    <img src="{{ asset('onion/img/portfolio.webp') }}" alt="">
                                    <div class="overlay-background">
                                        <div class="inner"></div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inner-overlay">
                                            <div class="row margin-0 project-content">
                                                <div class="col-md-12 info-head">
                                                    <h3>Project Title</h3>
                                                    <h4>Category</h4>
                                                </div>
                                                <div class="col-md-12 info">
                                                    <p>The ultimate goal is taking great photos of photos, but do not let your end goal distract you form your experience...</p>
                                                    <p><a title="Project Image" class="fancybox-pop fancybox.image" href="{{ asset('onion/img/portfolio.webp') }}"><i class="fa fa-search fa-border fa-2x"></i></a>
                                                        <a title="Project Link" href="{{ route('portfolio-item') }}"><i class="fa fa-link fa-border fa-2x"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>

                        <div class="col-md-4 isotopeSelector photography art">
                            <article class="">
                                <figure>
                                    <img src="{{ asset('onion/img/portfolio.webp') }}" alt="">
                                    <div class="overlay-background">
                                        <div class="inner"></div>
                                    </div>
                                    <div class="overlay">
                                        <div class="inner-overlay">
                                            <div class="row margin-0 project-content">
                                                <div class="col-md-12 info-head">
                                                    <h3>Project Title</h3>
                                                    <h4>Category</h4>
                                                </div>
                                                <div class="col-md-12 info">
                                                    <p>The ultimate goal is taking great photos of photos, but do not let your end goal distract you form your experience...</p>
                                                    <p><a title="Project Image" class="fancybox-pop fancybox.image" href="{{ asset('onion/img/portfolio.webp') }}"><i class="fa fa-search fa-border fa-2x"></i></a>
                                                        <a title="Project Link" href="{{ route('portfolio-item') }}"><i class="fa fa-link fa-border fa-2x"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>


                    </div>

                </div>
            </div>
            <!-- END Columns Portfolio -->

            <div class="text-center">
                <a href="{{ route('portfolio') }}">
                <button type="button" class="btn btn-primary ">VIEW MORE PROJECTS <i class="fa fa-arrow-right"></i></button>
                </a>
            </div>
        </div>

    </section>





    <!-- Our Clients -->
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-8">
                    <h2 class="title-section"><span class="title-regular">OUR</span><br/>CLIENTS</h2>
                    <hr class="title-underline" />
                    <p>
                        Serving our clients is privilege and responsibility that we do not take lightly.
                    </p>
                </div>
                <div class="col-md-8 col-md-pull-4 text-center">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('onion/img/clients/clients.webp') }}" alt="" class="client-logo" />
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('onion/img/clients/clients02.webp') }}" alt="" class="client-logo" />
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('onion/img/clients/clients03.webp') }}" alt="" class="client-logo" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('onion/img/clients/clients04.webp') }}" alt="" class="client-logo" />
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('onion/img/clients/clients05.webp') }}" alt="" class="client-logo" />
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('onion/img/clients/clients06.webp') }}" alt="" class="client-logo" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EVENT/LATEST NEWS-->
    <section class="page-section-no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-section"><span class="title-regular">LATEST</span><br/>EVENTS</h2>
                    <hr class="title-underline" />
                </div>
            </div>
            <div class="row blog-listing">
                <div class="col-md-4">
                    <article>
                        <img class="img-thumbnail" src="{{ asset('onion/img/events.webp') }}" alt="" />
                        <h2>Event 1</h2>
                        <hr class="title-underline">
                        <p>
                            In the last year alone, there has been a major spike in interest for photography that defies the tired clichés that we are used to seeing in advertising.Searches for “women leaders,” “real people,” “strong women,” ...
                        </p>
                        <div class="post-meta">
                            <ul style="list-style: none; padding-inline-start: 0px;">
                                <li>
                                    <span><i class="fa fa-calendar"></i> Event Date: Aug 17, 2019 - Aug 20, 2019 </span>
                                </li>
                                <li>
                                    <span><i class="fa fa-hourglass"></i> Event Time: 10am - 4pm </span>
                                </li>
                                <li>
                                    <span><i class="fa fa-compass"></i> Location: Samakhusi, Kathmandu</span>
                                </li>
                                <li>
                                    <span><i class="fa fa-calendar"></i> Deadline: Aug 17, 2019  </span>
                                </li>
                            </ul>
                        </div>
                        <a href="{{ route('event-single-post') }}" class="btn btn-xs btn-primary">Learn more...</a>
                    </article>
                </div>
                <div class="col-md-4">
                   <article>
                        <img class="img-thumbnail" src="{{ asset('onion/img/events.webp') }}" alt="" />
                        <h2>Event 2</h2>
                        <hr class="title-underline">
                        <p>
                            In the last year alone, there has been a major spike in interest for photography that defies the tired clichés that we are used to seeing in advertising.Searches for “women leaders,” “real people,” “strong women,” ...
                        </p>
                        <div class="post-meta">
                            <ul style="list-style: none; padding-inline-start: 0px;">
                                <li>
                                    <span><i class="fa fa-calendar"></i> Event Date: Aug 17, 2019 - Aug 20, 2019 </span>
                                </li>
                                <li>
                                    <span><i class="fa fa-hourglass"></i> Event Time: 10am - 4pm </span>
                                </li>
                                <li>
                                    <span><i class="fa fa-compass"></i> Location: Samakhusi, Kathmandu</span>
                                </li>
                                <li>
                                    <span><i class="fa fa-calendar"></i> Deadline: Aug 17, 2019  </span>
                                </li>
                            </ul>
                        </div>
                        <a href="{{ route('event-single-post') }}" class="btn btn-xs btn-primary">Learn more...</a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <img class="img-thumbnail" src="{{ asset('onion/img/events.webp') }}" alt="" />
                        <h2>Event 3</h2>
                        <hr class="title-underline">
                        <p>
                            In the last year alone, there has been a major spike in interest for photography that defies the tired clichés that we are used to seeing in advertising.Searches for “women leaders,” “real people,” “strong women,” ...
                        </p>
                        <div class="post-meta">
                            <ul style="list-style: none; padding-inline-start: 0px;">
                                <li>
                                    <span><i class="fa fa-calendar"></i> Event Date: Aug 17, 2019 - Aug 20, 2019 </span>
                                </li>
                                <li>
                                    <span><i class="fa fa-hourglass"></i> Event Time: 10am - 4pm </span>
                                </li>
                                <li>
                                    <span><i class="fa fa-compass"></i> Location: Samakhusi, Kathmandu</span>
                                </li>
                                <li>
                                    <span><i class="fa fa-calendar"></i> Deadline: Aug 17, 2019  </span>
                                </li>
                            </ul>
                        </div>
                        <a href="{{ route('event-single-post') }}" class="btn btn-xs btn-primary">Learn more...</a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG/LATEST NEWS-->
    <section class="page-section-no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title-section"><span class="title-regular">LATEST</span><br/>BLOGS</h2>
                    <hr class="title-underline" />
                </div>
            </div>
            <div class="row blog-listing">
                <div class="col-md-4">
                    <article>
                        <img class="img-thumbnail" src="{{ asset('onion/img/latest-news.webp') }}" alt="" />
                        <h2>Article 1</h2>
                        <hr class="title-underline">
                        <p>
                            In the last year alone, there has been a major spike in interest for photography that defies the tired clichés that we are used to seeing in advertising.Searches for “women leaders,” “real people,” “strong women,” and “diverse women” have more than doubled, with increases of 202%, 192%, 187%, and 168%, respectively...
                        </p>
                        <div class="post-meta">
                            <span><i class="fa fa-calendar"></i> Aug 17, 2016 - 6:53</span>
                            <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                            <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                        </div>
                        <a href="{{ route('blog-single-post') }}" class="btn btn-xs btn-primary">Read more...</a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <img class="img-thumbnail" src="{{ asset('onion/img/latest-news.webp') }}" alt="" />
                        <h2>Article 2</h2>
                        <hr class="title-underline">
                        <p>
                            In the last year alone, there has been a major spike in interest for photography that defies the tired clichés that we are used to seeing in advertising.Searches for “women leaders,” “real people,” “strong women,” and “diverse women” have more than doubled, with increases of 202%, 192%, 187%, and 168%, respectively...
                        </p>
                        <div class="post-meta">
                            <span><i class="fa fa-calendar"></i> Aug 17, 2016 - 6:53</span>
                            <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                            <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                        </div>
                        <a href="{{ route('blog-single-post') }}" class="btn btn-xs btn-primary">Read more...</a>
                    </article>
                </div>
                <div class="col-md-4">
                    <article>
                        <img class="img-thumbnail" src="{{ asset('onion/img/latest-news.webp') }}" alt="" />
                        <h2>Article 3</h2>
                        <hr class="title-underline">
                        <p>
                             In the last year alone, there has been a major spike in interest for photography that defies the tired clichés that we are used to seeing in advertising.Searches for “women leaders,” “real people,” “strong women,” and “diverse women” have more than doubled, with increases of 202%, 192%, 187%, and 168%, respectively...
                        </p>
                        <div class="post-meta">
                            <span><i class="fa fa-calendar"></i> Aug 17, 2016 - 6:53</span>
                            <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                            <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                        </div>
                        <a href="{{ route('blog-single-post') }}" class="btn btn-xs btn-primary">Read more...</a>
                    </article>
                </div>
            </div>
        </div>
    </section>
@stop