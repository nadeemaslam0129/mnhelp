<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" href="img/fav-icon.png" type="image/x-icon" /> -->

    <title>TV Mounting in Minneapolis</title>

    <link href="{{ url('frontend_asset/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend_asset/css/materialdesignicons.min.css') }}" rel="stylesheet">

    <link href="{{ url('frontend_asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend_asset/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend_asset/css/toastr.css') }}">
    <link rel="stylesheet" href="{{ url('frontend_asset/css/font-awesome.min.css') }}">

</head>

<style>
    .css-y3u5xm {
        box-sizing: border-box;
        background-color: rgb(255, 255, 255);
        padding: 33px;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 2px 8px 0px, rgba(0, 0, 0, 0.08) 0px 0px 1px 0px;
        margin-bottom: 2%;
    }

    .time-slots {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .drop {
        width: 24%;
    }

    .css-1ka1u4r {
        width: 100%;
        display: flex;
        align-items: center;
        border-color: rgb(224, 224, 224);
        border-style: solid;
        border-width: 1px;
        cursor: pointer;
        justify-content: center;
        letter-spacing: 0.5px;
        min-height: 55px;
        margin-top: 2%;
    }

    .css-f6ww1q {
        color: rgb(14, 14, 14);
        font-weight: 600;
        font-family: proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
        cursor: pointer;
        font-size: 16px;
    }

    .css-1ce2i1u {
        line-height: 18px;
        font-size: 16px;
        font-weight: 400;
        padding-bottom: 22px;
        margin: 0px;
        color: rgb(14, 14, 14);
        box-sizing: border-box;
        text-rendering: optimizelegibility;
        -webkit-font-smoothing: antialiased;
        font-family: proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
        cursor: pointer;
    }

    .css-yi2nna {
        border-width: 0px;
        cursor: pointer;
        display: inline-block;
        font-family: proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 600;
        justify-content: center;
        letter-spacing: 0.5px;
        line-height: 11px;
        text-decoration: underline;
        text-transform: uppercase;
        background-color: transparent;
        padding: 0px;
        min-height: 20px;
        text-overflow: ellipsis;
        font-size: 11px !important;
    }

    .css-yi2nna2 {
        border-width: 0px;
        cursor: pointer;
        display: inline-block;
        font-family: proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-weight: 600;
        justify-content: center;
        letter-spacing: 0.5px;
        line-height: 11px;
        /* text-decoration: underline; */
        text-transform: uppercase;
        background-color: transparent;
        padding: 0px;
        min-height: 20px;
        text-overflow: ellipsis;
        font-size: 11px !important;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 200px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
    }

    .show {
        display: block;
    }

    .header_top_area {
        background: black;
    }

    .header_social li {
        display: inline-block;
        margin-left: 10px;
    }

    .linka a {
        font-size: 13px;
        font-family: "Open Sans", sans-serif;
        color: #e8e8e8;
        line-height: 40px;
        margin-right: 5%;
    }

    .logo-image {
        width: 100px;
        height: 100px;
        margin-left: 4%;
    }

    .profile-image {
        width: 100px;
        height: 100px;
        margin-left: 4%;
        border-radius: 50px;
        float: right;
    }

    .css-bccdbr {
        margin: 0;
        font-family: var(--next-font-inter, "Inter"), Helvetica, sans-serif;
        font-weight: 800;
        font-size: 30px;
        line-height: 160%;
        letter-spacing: normal;
        color: black;
        /* color: #2B4C32; */
        z-index: 1;
        text-align: center;
    }

    @media (min-width: 900px) {
        .css-bccdbr {
            font-size: 55px;
        }
    }

    @media (min-width: 600px) {
        .css-bccdbr {
            font-size: 34px;
        }
    }

    @media (min-width: 768px) {
        .css-bccdbr {
            font-size: 34px;
        }
    }

    @media (min-width: 768px) {
        .linka a {
            margin-right: 3%;
        }
    }

    .project-tab {
        padding: 10%;
        margin-top: -8%;
    }

    .project-tab #tabs {
        background: #007b5e;
        color: #eee;
    }

    .project-tab #tabs h6.section-title {
        color: #eee;
    }

    .project-tab #tabs .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #0062cc;
        background-color: transparent;
        border-color: transparent transparent #f3f3f3;
        border: 3px solid !important;
        font-size: 16px;
        font-weight: bold;
    }

    .project-tab .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: .25rem;
        border-top-right-radius: .25rem;
        color: #0062cc;
        font-size: 16px;
        font-weight: 600;
    }

    .project-tab .nav-link:hover {
        border: none;
    }

    .project-tab thead {
        background: #f3f3f3;
        color: #333;
    }

    .project-tab a {
        text-decoration: none;
        color: #333;
        font-weight: 600;
    }

    .carousel {
        margin: 50px auto;
    }

    .carousel .carousel-item {
        color: #999;
        overflow: hidden;
        min-height: 120px;
        font-size: 13px;
    }

    .carousel .media {
        position: relative;
        padding: 0 0 0 20px;
        margin-left: 20px;
    }

    .carousel .media img {
        width: 75px;
        height: 75px;
        display: block;
        border-radius: 50%;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        border: 2px solid #fff;
    }

    .carousel .testimonial {
        color: #fff;
        position: relative;
        background: #9b9b9b;
        padding: 15px;
        margin: 0 0 20px 20px;
    }

    .carousel .testimonial::before,
    .carousel .testimonial::after {
        content: "";
        display: inline-block;
        position: absolute;
        left: 0;
        bottom: -20px;
    }

    .carousel .testimonial::before {
        width: 20px;
        height: 20px;
        background: #9b9b9b;
        box-shadow: inset 12px 0 13px rgba(0, 0, 0, 0.5);
    }

    .carousel .testimonial::after {
        width: 0;
        height: 0;
        border: 10px solid transparent;
        border-bottom-color: #fff;
        border-left-color: #fff;
    }

    .carousel .carousel-item .row>div:first-child .testimonial {
        margin: 0 20px 20px 0;
    }

    .carousel .carousel-item .row>div:first-child .media {
        margin-left: 0;
    }

    .carousel .testimonial p {
        text-indent: 40px;
        line-height: 21px;
        margin: 0;
    }

    .carousel .testimonial p::before {
        content: "\201D";
        font-family: Arial, sans-serif;
        color: #fff;
        font-weight: bold;
        font-size: 68px;
        line-height: 70px;
        position: absolute;
        left: -25px;
        top: 0;
    }

    .carousel .overview {
        padding: 3px 0 0 15px;
    }

    .carousel .overview .details {
        padding: 5px 0 8px;
    }

    .carousel .overview b {
        text-transform: uppercase;
        color: #ff5555;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 30px;
        height: 30px;
        background: #666;
        text-shadow: none;
        top: 4px;
    }

    .carousel-control-prev i,
    .carousel-control-next i {
        font-size: 16px;
    }

    .carousel-control-prev {
        left: auto;
        right: 40px;
    }

    .carousel-control-next {
        left: auto;
    }

    .carousel-indicators {
        bottom: -80px;
    }

    .carousel-indicators li,
    .carousel-indicators li.active {
        width: 17px;
        height: 17px;
        border-radius: 0;
        margin: 1px 5px;
        box-sizing: border-box;
    }

    .carousel-indicators li {
        background: #e2e2e2;
        border: 4px solid #fff;
    }

    .carousel-indicators li.active {
        color: #fff;
        background: #ff5555;
        border: 5px double;
    }

    .star-rating li {
        padding: 0 2px;
    }

    .star-rating i {
        font-size: 14px;
        color: #ffdc12;
    }

    .design-2 {
        margin-top: -16px;
        width: 200px;
        height: auto;
        z-index: 1000;
        float: right;
    }

    .design-4 {
        width: 80px;
        height: auto;
        z-index: 1000;
        float: left;
    }

    .design-3 {
        width: 50px;
        height: auto;
        z-index: 1000;
        margin-top: -1940px;
        float: right;
    }

    .design-3-1 {
        width: 45px;
        height: auto;
        z-index: 1000;
        margin-top: -1790px;
        float: right;
    }

    .design-3-2 {
        width: 35px;
        height: auto;
        z-index: 1000;
        margin-top: -1650px;
        float: right;
    }

    .design-5 {
        width: 80px;
        height: auto;
        z-index: 1000;
        margin-top: -1600px;
        float: left;
    }

    .design-5-1 {
        width: 60px;
        height: auto;
        z-index: 1000;
        margin-top: -1395px;
        float: left;
    }

    .design-5-2 {
        width: 40px;
        height: auto;
        z-index: 1000;
        margin-top: -1245px;
        float: left;
    }

    .design-1 {
        width: 100px;
        height: auto;
        float: right;
        margin-top: -400px;
    }

    body {
        display: flex;
        flex-direction: column;
    }
</style>

<body>

    <section class="py-3 position-relative">
        <!-- <img src="{{ url('designimage/top_right_shape.svg') }}" class="design-2"> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <img src="{{ url('logo/MN Helper-01.webp') }}" class="logo-image">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <img src="{{ url($profile_image->image) }}" class="profile-image">
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-md-1 col-sm-6"></div>
                <div class="col-md-10 col-sm-6">
                    <h1 class="css-bccdbr">Book Trusted Contractor To Help</h1>
                    <h1 class=" css-bccdbr">With Small Home Projects</h1>
                    <div class="row mt-5">
                        <div class="col-md-6 col-sm-6">
                            <h2>Background Check:</h2>
                            <p>I have a clean record on my background check.</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h2>Insurance:</h2>
                            <p>I have insurance up to $500,000 for your peace of mind</p>
                        </div>
                    </div>
                </div>
                <div>
                </div>
            </div>
    </section>
    <!------ Include the above in your HEAD tag ---------->
    <!-- <section class="position-relative">
        <img src="{{ url('designimage/top_left_shape.svg') }}" class="design-4">
    </section> -->
    <section id="tabs" class="project-tab mt-2" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">Assembly</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                role="tab" aria-controls="nav-contact" aria-selected="false">Mounting</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <section class="who_we_are_area mt-2">
                                <div class="container">
                                    <div class="css-y3u5xm">
                                        <form action="{{ url('assembly/appointment') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">First Name:</label>
                                                        <input type="text" id="last_name" class="form-control"
                                                            placeholder="First Name" name="name" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Last Name:</label>
                                                        <input type="text" id="last_name" class="form-control"
                                                            placeholder="Last Name" name="last_name" value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Phone:</label>
                                                        <input type="text" id="phone" class="form-control"
                                                            placeholder="User Phone" name="phone">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Email:</label>
                                                        <input type="text" id="email" class="form-control"
                                                            placeholder="User Email" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">More information:</label>
                                                        <textarea class="form-control" rows="4" name="more_information"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Is a 2 hour minimum at
                                                            ${{ $assemblyPrice->price }} per hour okay?:</label>
                                                        <select class="form-control assemly" name="status">
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 mt-3">
                                                    <div class="form-group">
                                                        <button class="btn btn-primary" type="submit"
                                                            id="assemblyButton">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </section>
                            {{-- <section  id="about-section">
                                <div class="container">
                                    <div class="css-y3u5xm mt-3">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <div class="who_we_left_content">
                                                    <div class="main_w_title">
                                                        <h1>TV Mounting in Minneapolis - Saint Paul For $85
                                                            Get A Discount for more than one TV
                                                        </h1>
                                                    </div>
                                                    <h2>Let an Active Elite Tasker from TaskRabbit help you mount your TV!</h2>
                                                    <p style="margin-top: 1%;">
                                                        My name is Kachi and I am a Professional Independent Contractor. I have used the
                                                        TaskRabbit Platform for over 2 years and I became an Elite Tasker in a very short period
                                                        of time!
                        
                                                        I still use the TaskRabbit platform as it provides a lot of volume for me but I am
                                                        looking to grow my business outside of the TaskRabbit app so I created this website!
                        
                                                        I have a clean background check just to give you that peace of mind!
                        
                                                        Please feel free to pick a date and time that works for you and I will reach out to you
                                                        to finalize the appointment!
                        
                                                        Looking forward to mounting your precious TV precisely where you want it!
                        
                                                        Please see below for other services I provide and submit the form and I will send you
                                                        quote.
                        
                                                        We accept payment after service has been provided!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </section>
                            <section class="py-1">
                                <div class="container">  
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                      @foreach ($galleries_images as $gallery)
                                      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img class="d-block w-100" src="{{url( $gallery->image)}}" alt="First slide">
                                      </div>
                                      @endforeach  
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                                </div>
                            </section>
                            <section class="mt-5">
                             <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">	
                                        <center><h1 class="css-bccdbr">Clients Says</h1></center>	
                                        <div id="myCarousel" class="carousel slide py-5" data-ride="carousel">
                                            
                                            <!-- Carousel indicators -->
                                            <ol class="carousel-indicators">
                                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                            </ol>   
                                            <!-- Wrapper for carousel items -->
                                            <div class="carousel-inner">
                                                @foreach ($assemblyClientReview as $assemblyclient)
                                                <div class="carousel-item @if ($loop->first) active @endif">
                                                    <div class="row">
                                                        @foreach ($assemblyClientReview as $assemblyclient)
                                                        <div class="col-sm-6">
                                                            <div class="testimonial">
                                                                <p>{{$assemblyclient->description}}</p>
                                                            </div>
                                                            <div class="media">
                                                                <img src="{{ url($assemblyclient->image) }}" class="mr-3" alt="">
                                                                <div class="media-body">
                                                                    <div class="overview">
                                                                        <div class="name"><b>{{$assemblyclient->name}}</b></div>
                                                                        <div class="details">{{$assemblyclient->position}}</div>
                                                                        <div class="star-rating">
                                                                            <ul class="list-inline">
                                                                                @for ($i = 1; $i <= $assemblyclient->rating; $i++)
                                                                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                                @endfor
                                                                                @for ($i = $assemblyclient->rating + 1; $i <= 5; $i++)
                                                                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                                @endfor
                                                                            </ul>
                                                                        </div>
                                                                    </div>										
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                       
                                                    </div>			
                                                </div>
                                                @endforeach
                                            </div>
                                            <!-- Carousel controls -->
                                            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                                <i class="fa fa-chevron-left" style="color: white"></i>
                                            </a>
                                            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                                <i class="fa fa-chevron-right" style="color: white"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </section> --}}
                        </div>

                        <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                            aria-labelledby="nav-contact-tab">
                            <section class="who_we_are_area mt-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <nav>
                                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-general-tab"
                                                        data-toggle="tab" href="#nav-general" role="tab"
                                                        aria-controls="nav-general" aria-selected="true">General
                                                        Mounting</a>
                                                    <a class="nav-item nav-link" id="nav-contact1-tab"
                                                        data-toggle="tab" href="#nav-contact1" role="tab"
                                                        aria-controls="nav-contact1" aria-selected="false">TV
                                                        Mounting</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-general"
                                                    role="tabpanel" aria-labelledby="nav-general-tab">
                                                    <section class="who_we_are_area mt-2">
                                                        <div class="container">
                                                            <div class="css-y3u5xm">
                                                                <form action="{{ url('appointment') }}"
                                                                    method="get">
                                                                    @csrf

                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <input type="hidden"
                                                                                    name="generalMounting"
                                                                                    value="generalMounting">
                                                                                <label for="first-name-column">First
                                                                                    Name:</label>
                                                                                <input type="text" id="last_name"
                                                                                    class="form-control"
                                                                                    placeholder="First Name"
                                                                                    name="name" value=""
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">Last
                                                                                    Name:</label>
                                                                                <input type="text" id="last_name"
                                                                                    class="form-control"
                                                                                    placeholder="Last Name"
                                                                                    name="last_name" value=""
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="first-name-column">Phone:</label>
                                                                                <input type="text" id="phone"
                                                                                    class="form-control"
                                                                                    placeholder="User Phone"
                                                                                    name="phone" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="first-name-column">Email:</label>
                                                                                <input type="text" id="email"
                                                                                    class="form-control"
                                                                                    placeholder="User Email"
                                                                                    name="email" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">Mounting
                                                                                    Selection:</label>
                                                                                <select class="form-control"
                                                                                    name="mounting">
                                                                                    <option value="">Select
                                                                                        Mounting </option>
                                                                                    <option value="Art Works">Art Works
                                                                                    </option>
                                                                                    <option value="Mirror">Mirror
                                                                                    </option>
                                                                                    <option value="Decor">Decor
                                                                                    </option>
                                                                                    <option value="Window blinds">
                                                                                        Window blinds</option>
                                                                                    <option value="Anchor Furniture">
                                                                                        Anchor Furniture</option>
                                                                                    <option value="Shelves">Shelves
                                                                                    </option>
                                                                                    <option value="Anchor Furniture">
                                                                                        Curtain Rods</option>
                                                                                    <option value="Kitchen Cabinets">
                                                                                        Kitchen Cabinets</option>
                                                                                    <option value="Other">Other
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">More
                                                                                    information:</label>
                                                                                <textarea class="form-control" rows="4" name="more_information"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">Is
                                                                                    ${{ $mountingPrice->price }} per
                                                                                    hour okay?:</label>
                                                                                <select
                                                                                    class="form-control generalMounting"
                                                                                    name="status">
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">No</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 mt-3">
                                                                            <div class="form-group">
                                                                                <button class="btn btn-primary"
                                                                                    type="submit"
                                                                                    id="generalMountingButton">Next</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                    </section>
                                                    {{-- <section>
                                                        <div class="container">
                                                            <div class="css-y3u5xm mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="who_we_left_content">
                                                                            <div class="main_w_title">
                                                                                <h1>TV Mounting in Minneapolis - Saint Paul For $85
                                                                                    Get A Discount for more than one TV
                                                                                </h1>
                                                                            </div>
                                                                            <h2>Let an Active Elite Tasker from TaskRabbit help you mount your TV!</h2>
                                                                            <p style="margin-top: 1%;">
                                                                                My name is Kachi and I am a Professional Independent Contractor. I have used the
                                                                                TaskRabbit Platform for over 2 years and I became an Elite Tasker in a very short period
                                                                                of time!
                                                
                                                                                I still use the TaskRabbit platform as it provides a lot of volume for me but I am
                                                                                looking to grow my business outside of the TaskRabbit app so I created this website!
                                                
                                                                                I have a clean background check just to give you that peace of mind!
                                                
                                                                                Please feel free to pick a date and time that works for you and I will reach out to you
                                                                                to finalize the appointment!
                                                
                                                                                Looking forward to mounting your precious TV precisely where you want it!
                                                
                                                                                Please see below for other services I provide and submit the form and I will send you
                                                                                quote.
                                                
                                                                                We accept payment after service has been provided!
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>   
                                                    </section>
                                                    <section class="py-1">
                                                        <div class="container">  
                                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                              @foreach ($galleries_images as $gallery)
                                                              <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                                <img class="d-block w-100" src="{{url( $gallery->image)}}" alt="First slide">
                                                              </div>
                                                              @endforeach  
                                                            </div>
                                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                              <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                              <span class="sr-only">Next</span>
                                                            </a>
                                                          </div>
                                                        </div>
                                                    </section>
                                                    <section class="mt-5">
                                                        <div class="container">
                                                           <div class="row">
                                                               <div class="col-sm-12">	
                                                                   <center><h1 class="css-bccdbr">Clients Says</h1></center>	
                                                                   <div id="myCarousel" class="carousel slide py-5" data-ride="carousel">
                                                                       
                                                                       <!-- Carousel indicators -->
                                                                       <ol class="carousel-indicators">
                                                                           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                                           <li data-target="#myCarousel" data-slide-to="1"></li>
                                                                           <li data-target="#myCarousel" data-slide-to="2"></li>
                                                                       </ol>   
                                                                       <!-- Wrapper for carousel items -->
                                                                       <div class="carousel-inner">
                                                                           @foreach ($generalClientReview as $generalclient)
                                                                           <div class="carousel-item @if ($loop->first) active @endif">
                                                                               <div class="row">
                                                                                   @foreach ($generalClientReview as $generalclient)
                                                                                   <div class="col-sm-6">
                                                                                       <div class="testimonial">
                                                                                           <p>{{$generalclient->description}}</p>
                                                                                       </div>
                                                                                       <div class="media">
                                                                                           <img src="{{ url($generalclient->image) }}" class="mr-3" alt="">
                                                                                           <div class="media-body">
                                                                                               <div class="overview">
                                                                                                   <div class="name"><b>{{$generalclient->name}}</b></div>
                                                                                                   <div class="details">{{$generalclient->position}}</div>
                                                                                                   <div class="star-rating">
                                                                                                       <ul class="list-inline">
                                                                                                           @for ($i = 1; $i <= $generalclient->rating; $i++)
                                                                                                               <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                                                           @endfor
                                                                                                           @for ($i = $generalclient->rating + 1; $i <= 5; $i++)
                                                                                                               <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                                                           @endfor
                                                                                                       </ul>
                                                                                                   </div>
                                                                                               </div>										
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                                   @endforeach
                                                                                  
                                                                               </div>			
                                                                           </div>
                                                                           @endforeach
                                                                       </div>
                                                                       <!-- Carousel controls -->
                                                                       <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                                                           <i class="fa fa-chevron-left" style="color: white"></i>
                                                                       </a>
                                                                       <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                                                           <i class="fa fa-chevron-right" style="color: white"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                         </div>
                                                    </section> --}}
                                                </div>

                                                <div class="tab-pane fade" id="nav-contact1" role="tabpanel"
                                                    aria-labelledby="nav-contact1-tab">
                                                    <section class="who_we_are_area mt-2">
                                                        <div class="container">
                                                            <div class="css-y3u5xm">
                                                                <form action="{{ url('appointment') }}"
                                                                    method="get">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">First
                                                                                    Name:</label>
                                                                                <input type="text" id="last_name"
                                                                                    class="form-control"
                                                                                    placeholder="First Name"
                                                                                    name="name" value=""
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">Last
                                                                                    Name:</label>
                                                                                <input type="text" id="last_name"
                                                                                    class="form-control"
                                                                                    placeholder="Last Name"
                                                                                    name="last_name" value=""
                                                                                    required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="first-name-column">Phone:</label>
                                                                                <input type="text" id="phone"
                                                                                    class="form-control"
                                                                                    placeholder="User Phone"
                                                                                    name="phone" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label
                                                                                    for="first-name-column">Email:</label>
                                                                                <input type="text" id="email"
                                                                                    class="form-control"
                                                                                    placeholder="User Email"
                                                                                    name="email" required>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">TV
                                                                                    size:</label>
                                                                                <select class="form-control"
                                                                                    name="tv_size">
                                                                                    <option value="">Select TV
                                                                                        size</option>
                                                                                    <option value="24">24</option>
                                                                                    <option value="32">32</option>
                                                                                    <option value="42">42</option>
                                                                                    <option value="48">48</option>
                                                                                    <option value="55">55</option>
                                                                                    <option value="65">65</option>
                                                                                    <option value="70">70</option>
                                                                                    <option value="85">85</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">How many
                                                                                    TVs:</label>
                                                                                <input type="text" id="email"
                                                                                    class="form-control"
                                                                                    placeholder="How many TVs"
                                                                                    name="many_tv">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">Type of
                                                                                    wall:</label>
                                                                                <select class="form-control"
                                                                                    name="wall">
                                                                                    <option value="">Select Wall
                                                                                    </option>
                                                                                    <option value="Dry Wall">Dry Wall
                                                                                    </option>
                                                                                    <option value="Concrete">Concrete
                                                                                    </option>
                                                                                    <option value="Brick or stone">
                                                                                        Brick or stone</option>
                                                                                    <option value="Wood">Wood
                                                                                    </option>
                                                                                    <option value="Not sure">Not sure
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">Will
                                                                                    someone be around to help:</label>
                                                                                <select class="form-control"
                                                                                    name="around_to_help">
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">No</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">Will you
                                                                                    be hiding the cords?:</label>
                                                                                <select class="form-control"
                                                                                    name="cords">
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">No</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">Do you
                                                                                    have a mount for the TV:</label>
                                                                                <select class="form-control"
                                                                                    name="mount_for_the_TV">
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">Dry Wall
                                                                                    </option>
                                                                                    <option
                                                                                        value="Not sure and need help">
                                                                                        Not sure and need help</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        {{-- <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">Mounting Selection:</label>
                                                                                <select class="form-control" name="mounting">
                                                                                    <option value="">Select Mounting </option>
                                                                                    <option value="Hang Art">Hang Art</option>
                                                                                    <option value="Mirror">Mirror</option>
                                                                                    <option value="Decor">Decor</option>
                                                                                    <option value="Window blinds">Window blinds</option>
                                                                                    <option value="Anchor Furniture">Anchor Furniture</option>
                                                                                    <option value="Shelves">Shelves</option>
                                                                                    <option value="Anchor Furniture">Curtain Rods</option>
                                                                                    <option value="Other">Other</option>
                                                                                </select>
                                                                            </div>
                                                                        </div> --}}
                                                                        <div class="col-md-12 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">More
                                                                                    information:</label>
                                                                                <textarea class="form-control" rows="4" name="more_information"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <div class="form-group">
                                                                                <label for="first-name-column">Is
                                                                                    ${{ $tvselectionPrice->price }}per
                                                                                    TV okay?:</label>
                                                                                <select
                                                                                    class="form-control tvSelection"
                                                                                    name="status">
                                                                                    <option value="Yes">Yes</option>
                                                                                    <option value="No">No</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 mt-3">
                                                                            <div class="form-group">
                                                                                <button class="btn btn-primary"
                                                                                    type="submit"
                                                                                    id="tvSelectionButton">Next</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <!--text--->
                                                    {{-- <section>
                                                        <div class="container">
                                                            <div class="css-y3u5xm mt-3">
                                                                <div class="row">
                                                                    <div class="col-md-12 col-sm-12">
                                                                        <div class="who_we_left_content">
                                                                            <div class="main_w_title">
                                                                                <h1>TV Mounting in Minneapolis - Saint Paul For $85
                                                                                    Get A Discount for more than one TV
                                                                                </h1>
                                                                            </div>
                                                                            <h2>Let an Active Elite Tasker from TaskRabbit help you mount your TV!</h2>
                                                                            <p style="margin-top: 1%;">
                                                                                My name is Kachi and I am a Professional Independent Contractor. I have used the
                                                                                TaskRabbit Platform for over 2 years and I became an Elite Tasker in a very short period
                                                                                of time!
                                                
                                                                                I still use the TaskRabbit platform as it provides a lot of volume for me but I am
                                                                                looking to grow my business outside of the TaskRabbit app so I created this website!
                                                
                                                                                I have a clean background check just to give you that peace of mind!
                                                
                                                                                Please feel free to pick a date and time that works for you and I will reach out to you
                                                                                to finalize the appointment!
                                                
                                                                                Looking forward to mounting your precious TV precisely where you want it!
                                                
                                                                                Please see below for other services I provide and submit the form and I will send you
                                                                                quote.
                                                
                                                                                We accept payment after service has been provided!
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>   
                                                    </section> --}}
                                                    <!--client say--->
                                                    {{-- <section class="py-1">
                                                        <div class="container">  
                                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                              @foreach ($galleries_images as $gallery)
                                                              <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                                                <img class="d-block w-100" src="{{url( $gallery->image)}}" alt="First slide">
                                                              </div>
                                                              @endforeach  
                                                            </div>
                                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                              <span class="sr-only">Previous</span>
                                                            </a>
                                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                              <span class="sr-only">Next</span>
                                                            </a>
                                                          </div>
                                                        </div>
                                                    </section>
                                                    <section class="mt-5">
                                                        <div class="container">
                                                           <div class="row">
                                                               <div class="col-sm-12">	
                                                                   <center><h1 class="css-bccdbr">Clients Says</h1></center>	
                                                                   <div id="myCarousel" class="carousel slide py-5" data-ride="carousel">
                                                                       
                                                                       <!-- Carousel indicators -->
                                                                       <ol class="carousel-indicators">
                                                                           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                                           <li data-target="#myCarousel" data-slide-to="1"></li>
                                                                           <li data-target="#myCarousel" data-slide-to="2"></li>
                                                                       </ol>   
                                                                       <!-- Wrapper for carousel items -->
                                                                       <div class="carousel-inner">
                                                                           @foreach ($selectionClientReview as $selectionclient)
                                                                           <div class="carousel-item @if ($loop->first) active @endif">
                                                                               <div class="row">
                                                                                   @foreach ($selectionClientReview as $selectionclient)
                                                                                   <div class="col-sm-6">
                                                                                       <div class="testimonial">
                                                                                           <p>{{$selectionclient->description}}</p>
                                                                                       </div>
                                                                                       <div class="media">
                                                                                           <img src="{{ url($selectionclient->image) }}" class="mr-3" alt="">
                                                                                           <div class="media-body">
                                                                                               <div class="overview">
                                                                                                   <div class="name"><b>{{$selectionclient->name}}</b></div>
                                                                                                   <div class="details">{{$selectionclient->position}}</div>
                                                                                                   <div class="star-rating">
                                                                                                       <ul class="list-inline">
                                                                                                           @for ($i = 1; $i <= $selectionclient->rating; $i++)
                                                                                                               <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                                                           @endfor
                                                                                                           @for ($i = $selectionclient->rating + 1; $i <= 5; $i++)
                                                                                                               <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                                                           @endfor
                                                                                                       </ul>
                                                                                                   </div>
                                                                                               </div>										
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                                   @endforeach
                                                                                  
                                                                               </div>			
                                                                           </div>
                                                                           @endforeach
                                                                       </div>
                                                                       <!-- Carousel controls -->
                                                                       <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                                                           <i class="fa fa-chevron-left" style="color: white"></i>
                                                                       </a>
                                                                       <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                                                           <i class="fa fa-chevron-right" style="color: white"></i>
                                                                       </a>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                         </div>
                                                    </section> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-section">
        <div class="container">
            <div class="css-y3u5xm mt-3">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="who_we_left_content">
                            <div class="main_w_title">
                                <h1>TV Mounting in Minneapolis - Saint Paul For $85
                                    Get A Discount for more than one TV
                                </h1>
                            </div>
                            <h2>Let an Active Elite Tasker from TaskRabbit help you mount your TV!</h2>
                            <p style="margin-top: 1%;">
                                My name is Kachi and I am a Professional Independent Contractor. I have used the
                                TaskRabbit Platform for over 2 years and I became an Elite Tasker in a very short period
                                of time!

                                I still use the TaskRabbit platform as it provides a lot of volume for me but I am
                                looking to grow my business outside of the TaskRabbit app so I created this website!

                                I have a clean background check just to give you that peace of mind!

                                Please feel free to pick a date and time that works for you and I will reach out to you
                                to finalize the appointment!

                                Looking forward to mounting your precious TV precisely where you want it!

                                Please see below for other services I provide and submit the form and I will send you
                                quote.

                                We accept payment after service has been provided!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-1">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach ($galleries_images as $gallery)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img class="d-block w-100" src="{{ url($gallery->image) }}" alt="First slide" style="height: 500px;">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <center>
                        <h1 class="css-bccdbr">Clients Says</h1>
                    </center>
                    <div id="myCarousel" class="carousel slide py-5" data-ride="carousel">

                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            @foreach ($assemblyClientReview->chunk(2) as $index => $chunk)
                                <li data-target="#myCarousel" data-slide-to="{{ $index }}" class="@if ($loop->first) active @endif"></li>
                            @endforeach
                        </ol>
                    
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            @foreach ($assemblyClientReview->chunk(2) as $chunk)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <div class="row">
                                        @foreach ($chunk as $assemblyclient)
                                            <div class="col-sm-6">
                                                <div class="testimonial">
                                                    <p>{{ $assemblyclient->description }}</p>
                                                </div>
                                                <div class="media">
                                                    <img src="{{ url($assemblyclient->image) }}" class="mr-3" alt="">
                                                    <div class="media-body">
                                                        <div class="overview">
                                                            <div class="name"><b>{{ $assemblyclient->name }}</b></div>
                                                            <div class="details">{{ $assemblyclient->position }}</div>
                                                            <div class="star-rating">
                                                                <ul class="list-inline">
                                                                    @for ($i = 1; $i <= $assemblyclient->rating; $i++)
                                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                                    @endfor
                                                                    @for ($i = $assemblyclient->rating + 1; $i <= 5; $i++)
                                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                                    @endfor
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    
                        <!-- Carousel controls -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-chevron-left" style="color: white"></i>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <i class="fa fa-chevron-right" style="color: white"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section class="position-relative">
        <img src="{{ url('designimage/mid_left_shapee.svg') }}" class="design-5">
    </section>
    <section class="position-relative">
        <img src="{{ url('designimage/mid_left_shapee.svg') }}" class="design-5-1">
    </section>
    <section class="position-relative">
        <img src="{{ url('designimage/mid_left_shapee.svg') }}" class="design-5-2">
    </section>
    <section class="position-relative">
        <img src="{{ url('designimage/mid_right_shape_first.bfe4482f.svg') }}" class="design-3">
    </section>
    <section class="position-relative">
        <img src="{{ url('designimage/mid_right_shape_first.bfe4482f.svg') }}" class="design-3-1">
    </section>
    <section class="position-relative">
        <img src="{{ url('designimage/mid_right_shape_first.bfe4482f.svg') }}" class="design-3-2">
    </section>
    <section class="position-relative">
        <img src="{{ url('designimage/mid_right_shape_se.svg') }}" class="design-1">
    </section>
    <footer class="footer_area">
        <div class="footer_copy_right">
            <div class="container">
                <h4>
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved Codesgeniustech
                    <div class="row mt-2">
                        <div class="col-lg-4 col-md-3 col-sm-6"></div>
                        <div class="col-lg-2 col-md-2 col-sm-6">
                            <a href="#about-section">About Us</a>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-6">
                            <a href="{{ url('helpe-form') }}">Help</a>
                        </div>
                    </div>
                </h4>


            </div>
        </div>

    </footer>
    <script src="{{ url('frontend_asset/js/moment.min.js') }}"></script>
    <script src="{{ url('frontend_asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('frontend_asset/js/rome.js') }}"></script>
    <script src="{{ url('frontend_asset/js/main.js') }}"></script>
    <script src="{{ url('frontend_asset/js/toastr.min.js') }}"></script>
    <script src="{{ url('frontend_asset/js/bootstrap1.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#assemblyButton').prop('disabled', false);
            $('.assemly').change(function() {
                if ($(this).val() === 'Yes') {
                    $('#assemblyButton').prop('disabled', false);
                } else {
                    $('#assemblyButton').prop('disabled', true);
                }
            });
        });
        $(document).ready(function() {
            $('#generalMountingButton').prop('disabled', false);
            $('.generalMounting').change(function() {
                if ($(this).val() === 'Yes') {
                    $('#generalMountingButton').prop('disabled', false);
                } else {
                    $('#generalMountingButton').prop('disabled', true);
                }
            });
        });
        $(document).ready(function() {
            $('#tvSelectionButton').prop('disabled', false);
            $('.tvSelection').change(function() {
                if ($(this).val() === 'Yes') {
                    $('#tvSelectionButton').prop('disabled', false);
                } else {
                    $('#tvSelectionButton').prop('disabled', true);
                }
            });
        });
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            // toastr.options.timeOut = 10000;
            toastr.success("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif
    </script>
    <script>
        $(document).ready(function() {
            $('a[href="#about-section"]').on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: $('#about-section').offset().top
                }, 1000);
            });
        });
    </script>

</body>

</html>
