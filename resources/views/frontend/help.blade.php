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
        box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        border: 2px solid #fff;
    }
    .carousel .testimonial {
        color: #fff;
        position: relative;    
        background: #9b9b9b;
        padding: 15px;
        margin: 0 0 20px 20px;
    }
    .carousel .testimonial::before, .carousel .testimonial::after {
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
        box-shadow: inset 12px 0 13px rgba(0,0,0,0.5);
    }
    .carousel .testimonial::after {
        width: 0;
        height: 0;
        border: 10px solid transparent;
        border-bottom-color: #fff;
        border-left-color: #fff;
    }
    .carousel .carousel-item .row > div:first-child .testimonial {
        margin: 0 20px 20px 0;
    }
    .carousel .carousel-item .row > div:first-child .media {
        margin-left: 0;
    }
    .carousel .testimonial p {
        text-indent: 40px;
        line-height: 21px;
        margin: 0;
    }
    .carousel .testimonial p::before {
        content: "\201D";
            font-family: Arial,sans-serif;
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
    .carousel-control-prev, .carousel-control-next {
        width: 30px;
        height: 30px;
        background: #666;
        text-shadow: none;
        top: 4px;
    }
    .carousel-control-prev i, .carousel-control-next i {
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
    .carousel-indicators li, .carousel-indicators li.active {
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
.design-2{
    margin-top: -16px;    
    width: 200px; 
    height: auto; 
    z-index: 1000; 
    float:right;
    }
    .design-4{
    width: 80px; 
    height: auto; 
    z-index: 1000; 
    float:left;
    }
    .design-3{
     width: 50px; 
     height: auto; 
     z-index: 1000; 
     margin-top: -1100px;
     float: right;
    }
    .design-3-1{
     width: 45px; 
     height: auto; 
     z-index: 1000; 
     margin-top: -940px;
     float: right;
    }
    .design-3-2{
     width: 35px; 
     height: auto; 
     z-index: 1000; 
     margin-top: -800px;
     float: right;
    }
    .design-5{
     width: 80px; 
     height: auto; 
     z-index: 1000; 
     margin-top: -600px;
     float: left;
    }
    .design-5-1{
     width: 60px; 
     height: auto; 
     z-index: 1000; 
     margin-top: -395px;
     float: left;
    }
    .design-5-2{
     width: 40px; 
     height: auto; 
     z-index: 1000; 
     margin-top: -245px;
     float: left;
    }
    .design-1{  
    width: 100px; 
    height: auto; 
    float:right;
    margin-top: -400px;
    }
    body {
    display: flex;
    flex-direction: column;
   }
</style>

<body>

    <section class="py-3 position-relative">
        <!-- <img src="{{url('designimage/top_right_shape.svg')}}" class="design-2"> -->
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
     <img src="{{url('designimage/top_left_shape.svg')}}" class="design-4">
    </section> -->
    <section class="who_we_are_area"  style="">
        <div class="container">
            <div class="css-y3u5xm">
                  <!-- <h1>Help: This will be a form:</h1> -->
                <form action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="first-name-column">First Name:</label>
                                <input type="text" id="first_name" class="form-control" placeholder="First Name"
                                    name="first_name" value="" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="first-name-column">Last Name:</label>
                                <input type="text" id="last_name"   class="form-control" placeholder="Last Name"
                                    name="last_name" value="" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="first-name-column">Phone:</label>
                                <input type="text" id="phone" class="form-control" placeholder="User Phone"
                                    name="phone" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="first-name-column">Email:</label>
                                <input type="text" id="email" class="form-control" placeholder="User Email"
                                    name="email" required>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label for="first-name-column">More information:</label>
                                <textarea class="form-control" rows="4" name="message"></textarea>
                            </div>
                        </div>
                        
                        <div class="col-md-12 col-sm-12 mt-3">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
    {{-- <section class="position-relative">
        <img src="{{url('designimage/mid_left_shapee.svg')}}" class="design-5">
    </section>
    <section class="position-relative">
        <img src="{{url('designimage/mid_left_shapee.svg')}}" class="design-5-1">
    </section>
    <section class="position-relative">
        <img src="{{url('designimage/mid_left_shapee.svg')}}" class="design-5-2">
    </section> --}}
    {{-- <section class="position-relative">
        <img src="{{url('designimage/mid_right_shape_first.bfe4482f.svg')}}" class="design-3">
    </section>
    <section class="position-relative">
        <img src="{{url('designimage/mid_right_shape_first.bfe4482f.svg')}}" class="design-3-1">
    </section>
    <section class="position-relative">
        <img src="{{url('designimage/mid_right_shape_first.bfe4482f.svg')}}" class="design-3-2">
    </section> --}}
    <section class="position-relative">
        <img src="{{url('designimage/mid_right_shape_se.svg')}}" class="design-1">
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
                            <a href="">About Us</a>
                        </div>  
                        <div class="col-lg-1 col-md-1 col-sm-6">  
                            <a href="">Help</a>
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
         $('#tvSelectionButton').prop('disabled', false);
         $('.tvSelection').change(function() {
            if ($(this).val() === 'Yes') {
                $('#tvSelectionButton').prop('disabled', false);
            } else {
                $('#tvSelectionButton').prop('disabled', true);
            }
         });
        });
        @if(Session::has('success'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            // toastr.options.timeOut = 10000;
            toastr.success("{{ session('success') }}");
        @endif
      
        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("{{ session('error') }}");
        @endif
      </script>
</body>

</html>
