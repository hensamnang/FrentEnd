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
    {{-- slid show --}}
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
        <div class="row img_">
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
    {{-- Recent Properties --}}
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
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4 view-all"></div>
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4 view-all">
                <a href=""><button class="view-properties">View All Properties</button></a>
            </div>
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4 view-all"></div>
        </div>
    </div>
    {{-- Real Estate Tools and Resources --}}
    <div class="real-estate">
        <img src="../images/3.jpg">
        <div class="container">
            <div class="text-real-estate tools-resources">
                <h2 class="text-center">Real Estate Tools and Resources</h2>
                <div class="row justify-realEstate">
                    <div class="col-md-4 text-center">
                        <button class="btn real-estate-bg">999</button>
                        <h3 class="text reat-estate">TOP-RATED AGENTS</h3>
                        <p class="text-light">Check up to 40% more houses for sale. See pictures of your new life at a new place. See maps, markets, etc.</p>
                    </div>

                    <div class="col-md-4 text-center">
                        <button class="btn real-estate-bg">999</button>
                        <h3 class="text reat-estate">MORE LISTINGS</h3>
                        <p class="text-light">All our real estate agents are professionals in your neighborhood, which are ready to help you find your new home.</p>
                    </div>

                    <div class="col-md-4 text-center">
                        <button class="btn real-estate-bg">999</button>
                        <h3 class="text reat-estate">HOME ESTIMATES</h3>
                        <p class="text-light">Wanna know how much your new home will cost? See estimates for any neighborhood and check prices for similar homes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Real Estate Agents --}}
    <div class="container">
        <div class="row">
            <h1 class="text-center">Real Estate Agents</h1>
            <hr class="line-horizontal">
            <div class="col-ms-3 col-md-3 col-sm-3 col-lg-3 agents_img">
                <img src="../images/3.jpg" alt="">
                <div class="text-header">
                    <a href="">Ashley Mason</a>
                </div>
                <div class="text-para">
                    <a> 1-800-7650-986</a>
                    <a> ashley@demolink.org</a>
                </div>
            </div>
            <div class="col-ms-3 col-md-3 col-sm-3 col-lg-3 agents_img">
                <img src="../images/3.jpg" alt="">
                <div class="text-header">
                    <a href="">Russell Myers</a>
                </div>
                <div class="text-para">
                    <a> 1-800-7650-986</a>
                    <a> ashley@demolink.org</a>
                </div>
            </div>
            <div class="col-ms-3 col-md-3 col-sm-3 col-lg-3 agents_img">
                <img src="../images/3.jpg" alt="">
                <div class="text-header">
                    <a href="">Shirley Vasquez</a>
                </div>
                <div class="text-para">
                    <a> 1-800-7650-986</a>
                    <a> ashley@demolink.org</a>
                </div>
            </div>
            <div class="col-ms-3 col-md-3 col-sm-3 col-lg-3 agents_img">
                <img src="../images/3.jpg" alt="">
                <div class="text-header">
                    <a href="">Terry Sandoval</a>
                </div>
                <div class="text-para">
                    <a> 1-800-7650-986</a>
                    <a> ashley@demolink.org</a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4"></div>
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4">
                <a href=""><button class="view-agents">View All Agents</button></a>
            </div>
            <div class="col-ms-4 col-md-4 col-sm-4 col-lg-4"></div>
        </div>
    </div>
    {{-- Testimonials --}}
    <div class="testimonials">
        <div class="container">
            <h3 class="text-center">Testimonials</h3>
            <hr>
            <div class="row">
                <div class="col-md-4 testimon">
                    <div class="img-circle-left">
                        <img src="../images/4.jpg" class="rounded-circle" width="80" height="80">
                    </div>
                    <div class="text-left quote">
                        <p>
                            <q>When you are not making an effort to be happy, then unexpectedly, mysteriously, happiness is there, born of purity, of a loveliness of being.</q>
                        </p>
                        <h4><b>- Naphat Nam</b></h4>
                    </div>
                </div>

                <div class="col-md-4 testimon">
                    <div class="img-circle-left">
                        <img src="../images/5.jpg" class="rounded-circle" width="80" height="80">
                    </div>
                    <div class="text-left quote">
                        <p>
                            <q>Love will arise in your heart when you have no barrier between yourself and another, when you meet and observe people without judging them.</q>
                        </p>
                        <h4><b>- Socheat Lean</b></h4>
                    </div>
                </div>

                <div class="col-md-4 testimon">
                    <div class="img-circle-left">
                        <img src="../images/6.jpeg" class="rounded-circle" width="80" height="80">
                    </div>
                    <div class="text-left quote">
                        <p>
                            <q>If there is to be any kind of social change, there must be a different kind of education so that children are not brought up to conform.</q>
                        </p>
                        <h4><b>- Minea Hen</b></h4>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- Get In Touch --}}
    <div class="get-intouch">
        <img src="../images/1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form action="">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="inputPassword2" class="sr-only">First Name:</label>
                                    <input type="text" class="form-control" placeholder="first_name">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="inputPassword2" class="sr-only">First Name:</label>
                                    <input type="text" class="form-control" placeholder="first_name">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
