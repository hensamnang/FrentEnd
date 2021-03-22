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
                    <h3>With Swimming Pool</h3>
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


@endsection
