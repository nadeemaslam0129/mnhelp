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
    {{-- <link href="{{ url('frontend_asset/css/responsive.css') }}" rel="stylesheet"> --}}
    
    <link rel="stylesheet" href="{{ url('frontend_asset/css/rome.css') }}">
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
        float: right;
        border-radius: 50px;
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
        border-bottom: 3px solid !important;
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
     margin-top: -800px;
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
     margin-top: -400px;
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
    margin-top: -320px;
    }
    body {
    display: flex;
    flex-direction: column;
   }
</style>

<body>
    <section class="logo py-3 position-relative">
        <img src="{{url('designimage/top_right_shape.svg')}}" class="design-2">
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
    <section class="position-relative">
        <img src="{{url('designimage/top_left_shape.svg')}}" class="design-4">
       </section>
    <section class="who_we_are_area mt-2" style="margin-top: -280px!important;">
      <div class="container">
            
            <form action="{{url('appointment/process')}}" method="POST" id="mounting-form-submit">
                @csrf
                <input type="hidden" name="date" value="" id="mounting-date">
                <input type="hidden" name="time" value="" id="mounting-time">
                 <input type="hidden" name="generalMounting" value="{{$generalMounting}}">
                 <input type="hidden" name="name" value="{{$name}}">
                 <input type="hidden" name="last_name" value="{{$last_name}}">
                 <input type="hidden" name="phone" value="{{$phone}}">
                 <input type="hidden" name="email" value="{{$email}}">
                 <input type="hidden" name="mounting" value="{{$mounting}}">
                 <input type="hidden" name="many_tv" value="{{$many_tv}}">
                 <input type="hidden" name="wall" value="{{$wall}}">
                 <input type="hidden" name="around_to_help" value="{{$around_to_help}}">
                 <input type="hidden" name="cords" value="{{$cords}}">
                 <input type="hidden" name="mount_for_the_TV" value="{{$mount_for_the_TV}}">
                 <input type="hidden" name="tv_size" value="{{$tv_size}}">
                 <input type="hidden" name="status" value="{{$status}}">
                 <input type="hidden" name="more_information" value="{{$more_information}}">
            </form>
            <div class="css-y3u5xm">
                <div class="row">
                    <div class="col-md-6">
                        <div id="inline_cal"></div>
                    </div>
                    <div class="col-md-6">
                        <div id="getdate">
                            @include('frontend._list')
                        </div>
                    </div>

                </div>
            </div>
            {{-- <div class="css-y3u5xm mt-3">
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
            </div> --}}

    </section>
    <section class="position-relative">
        <img src="{{url('designimage/mid_left_shapee.svg')}}" class="design-5">
    </section>
    <section class="position-relative">
        <img src="{{url('designimage/mid_left_shapee.svg')}}" class="design-5-1">
    </section>
    <section class="position-relative">
        <img src="{{url('designimage/mid_left_shapee.svg')}}" class="design-5-2">
    </section>
    <section class="position-relative">
        <img src="{{url('designimage/mid_right_shape_first.bfe4482f.svg')}}" class="design-3">
    </section>
    <section class="position-relative">
        <img src="{{url('designimage/mid_right_shape_first.bfe4482f.svg')}}" class="design-3-1">
    </section>
    <section class="position-relative">
        <img src="{{url('designimage/mid_right_shape_first.bfe4482f.svg')}}" class="design-3-2">
    </section>
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
                </h4>
            </div>
        </div>
    </footer>


    <script src="{{ url('frontend_asset/js/moment.min.js') }}"></script>
    <script src="{{ url('frontend_asset/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('frontend_asset/js/rome.js') }}"></script>
    <script src="{{ url('frontend_asset/js/main.js') }}"></script>
    <script src="{{ url('frontend_asset/js/toastr.min.js') }}"></script>
    <script>
        function toggleDropdown(dropdownId) {
            var dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle("show");

            // Close all other dropdowns
            var allDropdowns = document.querySelectorAll('.dropdown-content');
            allDropdowns.forEach(function(dd) {
                if (dd.id !== dropdownId) {
                    dd.classList.remove('show');
                }
            });
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.css-1ka1u4r') && !event.target.matches('.css-f6ww1q')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

        $(document).ready(function() {
            $(document).on('click', '#test', function() {
                var selectedTime = $(this).closest('.drop').find('.time').data('val');
                var dateValue = $('#result').text();
                $('#mounting-date').val(dateValue);
                $('#mounting-time').val(selectedTime);
                $('#mounting-form-submit').submit();
                // var url = '/appointment/' + dateValue + '/' + selectedTime;
                // url = url.replace(/%20/g, '').replace(/\s/g, '');
                // window.location.href = url;
            });
        });
    </script>
    <script>
        document.getElementById('timezone-offset').addEventListener('change', function() {
            const selectedOffset = this.value;
            const timeElements = document.querySelectorAll('.time');

            timeElements.forEach(function(timeElement) {
                const originalTime = timeElement.getAttribute('data-val');
                const convertedTime = convertTimeToNewOffset(originalTime, selectedOffset);
                timeElement.textContent = convertedTime;
            });
        });

        function convertTimeToNewOffset(time, offset) {
            const [timePart, period] = time.split(' ');
            let [hours, minutes] = timePart.split(':').map(Number);

            // Adjust for AM/PM
            if (period === 'PM' && hours < 12) {
                hours += 12;
            } else if (period === 'AM' && hours === 12) {
                hours = 0;
            }

            const [offsetSign, offsetHours, offsetMinutes] = parseOffset(offset);

            // Create a date object starting from a fixed reference date and time in UTC
            let date = new Date(Date.UTC(1970, 0, 1, hours, minutes, 0, 0));

            // Adjust the date object with the selected offset
            date.setUTCHours(date.getUTCHours() + (offsetSign * offsetHours));
            date.setUTCMinutes(date.getUTCMinutes() + (offsetSign * offsetMinutes));

            // Format the time in HH:MM AM/PM
            let convertedHours = date.getUTCHours();
            let convertedMinutes = date.getUTCMinutes();
            const newPeriod = convertedHours >= 12 ? 'PM' : 'AM';

            convertedHours = convertedHours % 12;
            if (convertedHours === 0) {
                convertedHours = 12;
            }

            const formattedHours = String(convertedHours).padStart(2, '0');
            const formattedMinutes = String(convertedMinutes).padStart(2, '0');

            return `${formattedHours}:${formattedMinutes} ${newPeriod}`;
        }

        function parseOffset(offset) {
            const sign = offset.startsWith('-') ? -1 : 1;
            const [hours, minutes] = offset.replace(/[+-]/, '').split(':').map(Number);
            return [sign, hours, minutes];
        }
    </script>
    <script>
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
