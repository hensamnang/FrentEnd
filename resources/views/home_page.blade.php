@extends('layouts.master')
@section('main')
    <ul>
        <li><a href="#"></a></li>
        <li><a href="">HOME</a></li>
        <li><a href="">ABOUT</a></li>
        <li><a href="">CATOLOG</a></li>
        <li><a href="">PAGES</a></li>
        <li><a href="">SERVICES</a></li>
        <li><a href="">CONTACTS</a></li>
        <li><a href="">BLOCKS</a></li>
    </ul>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active" id="slide1">
                <img src="../images/1.jpg" alt="Slide 1">
                <div class="carousel-caption">
                    <h1>Professional realtor works for you</h1>
                    <a href="#" class="btn btn-primary">View More</a>
                    <a href="#" class="btn btn-outline-light">Contact Us</a>
                </div>
            </div>
            <div class="item" id="slide2">
                <img src="../images/2.jpg" alt="Slide 2">
                <div class="carousel-caption">
                    <h1>Professional realtor works for you</h1>
                    <a href="#" class="btn btn-primary">View More</a>
                    <a href="#" class="btn btn-outline-light">Contact Us</a>
                </div>
            </div>
            <div class="item" id="slide3">
                <img src="../images/3.jpg" alt="Slide 3">
                <div class="carousel-caption">
                    <h1>Professional realtor works for you</h1>
                    <a href="#" class="btn btn-primary">View More</a>
                    <a href="#" class="btn btn-outline-light">Contact Us</a>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>

    </div>

    <div class="container-fluid">
        <div class="col-ms-12 col-md-12 col-sm-12 col-lg-12 justify-contain">
            <div class="row">
                <div class="col-ms-3 col-md-3 col-sm-3 col-lg-3 image-food">
                    <img src="../images/2.jpg" alt="">
                </div>
                <div class="col-ms-3 col-md-3 col-sm-3 col-lg-3 image-food">
                    <img src="../images/1.jpg" alt="">
                </div>
                <div class="col-ms-3 col-md-3 col-sm-3 col-lg-3 image-food">
                    <img src="../images/2.jpg" alt="">
                </div>
                <div class="col-ms-3 col-md-3 col-sm-3 col-lg-3 image-food">
                    <img src="../images/3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <h1 class="text-center">Recent Properties</h1>
            <hr class="line-horizontal">
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4 recent_img">
                <img src="../images/3.jpg" alt="">
                <div class="text-header">
                    <a href="">AVA Nob Hill</a>
                </div>
                <h3 class="price">$1200/mon</h3>
                <div class="text-para">
                    <p>AVA Nob Hill includes studios and 1 and 2 bedroom apartments that feature an urban-inspired design
                    that extends beyond your walls and throughout the entire community.</p>
                </div>
            </div>
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4 recent_img">
                <img src="../images/3.jpg" alt="">
                <div class="text-header">
                    <a href="">Ashton San Francisco</a>
                </div>
                <h3 class="price">$1200/mon</h3>
                <div class="text-para">
                    <p>Ashton San Francisco offers luxury apartments, eco-friendly features, and remarkable on-site resident amenities.
                    Enjoy premier services and access to our state-of-the-art fitness center, clubhouse, business center, and outdoor fire pit lounge.</p>
                </div>
            </div>
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4 recent_img">
                <img src="../images/3.jpg" alt="">
                <div class="text-header">
                    <a href="">The Presidio Residences</a>
                </div>
                <h3 class="price">$1200/mon</h3>
                <div class="text-para">
                    <p>The Presidio Residences offer a unique opportunity to live in a national park setting and enjoy quiet neighborhoods,
                    convenient location, beautiful open spaces, and outstanding recreational amenities.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4 recent_img">
                <img src="../images/3.jpg" alt="">
                <div class="text-header">
                    <a href="">AVA Nob Hill</a>
                </div>
                <h3 class="price">$1200/mon</h3>
                <div class="text-para">
                    <p>AVA Nob Hill includes studios and 1 and 2 bedroom apartments that feature an urban-inspired design
                    that extends beyond your walls and throughout the entire community.</p>
                </div>
            </div>
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4 recent_img">
                <img src="../images/3.jpg" alt="">
                <div class="text-header">
                    <a href="">Ashton San Francisco</a>
                </div>
                <h3 class="price">$1200/mon</h3>
                <div class="text-para">
                    <p>Ashton San Francisco offers luxury apartments, eco-friendly features, and remarkable on-site resident amenities.
                    Enjoy premier services and access to our state-of-the-art fitness center, clubhouse, business center, and outdoor fire pit lounge.</p>
                </div>
            </div>
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4 recent_img">
                <img src="../images/3.jpg" alt="">
                <div class="text-header">
                    <a href="">The Presidio Residences</a>
                </div>
                <h3 class="price">$1200/mon</h3>
                <div class="text-para">
                    <p>The Presidio Residences offer a unique opportunity to live in a national park setting and enjoy quiet neighborhoods,
                    convenient location, beautiful open spaces, and outstanding recreational amenities.</p>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4 recent_img"></div>
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4 recent_img">
                <a href=""><button>View All Properties</button></a>
            </div>
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4 recent_img"></div>
        </div>
    </div>

    <div class="real-estate">
        <img src="../images/3.jpg">
    </div>

@endsection
