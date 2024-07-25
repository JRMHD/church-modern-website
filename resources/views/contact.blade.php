<!DOCTYPE html>
<html lang="en">



<head>
    <!--======  Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Contact Us | heaven vision church international</title>


    <!--====== Google Fonts ======-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900;1000&amp;display=swap"
        rel="stylesheet">



    <!--====== Fontawesome CDN ======-->
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css"
        integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css"
        integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css"
        integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/svg-with-js.min.css"
        integrity="sha512-FTnGkh+EGoZdexd/sIZYeqkXFlcV3VSscCTBwzwXv1IEN5W7/zRLf6aUBVf2Ahdgx3h/h22HNzaoeBnYT6vDlA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- favicon -->
    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!--====== Main Css ======-->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!--====== Other Css ======-->
    <link rel="stylesheet" href="assets/css/custom.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

</head>

<body>



    @include('header')




    <!--====== Page Title start ======-->
    <section class="page-title-area">
        <div class="container">
            <h2 class="title">Contact Us</h2>
            <ul class="breadcrumb-nav">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->



    <!--====== Contact Information Start ======-->
    <section class="contact-info-section section-gap">
        <div class="container">
            <div class="row align-items-center">


                <div class="col-lg-12">
                    <div class="contact-info-items mb-md-gap-50">
                        <div class="contact-info-item text-center">
                            <i class="fa-solid fa-phone"></i>
                            <h5 class="title">Phone Number</h5>
                            <p> +254 738 900 924<br> +254 780 823 843</p>
                        </div>
                        <div class="contact-info-item text-center">
                            <i class="fa-solid fa-envelope"></i>
                            <h5 class="title">Email Address</h5>
                            <p>info@heavenvisionchurchinternational.com </p>
                        </div>
                        <div class="contact-info-item text-center">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                            <h5 class="title">Church Location</h5>
                            <p>Umoja 1, Nairobi, Kenya.</p>
                        </div>
                        <div class="contact-info-item text-center">
                            <i class="fa-solid fa-church"></i>
                            <h5 class="title">heaven vision church international</h5>
                            <p>heaven vision</p>
                        </div>
                    </div>
                </div>








            </div>
        </div>
    </section>
    <!--====== Contact Information End ======-->

    <!--====== Contact Form Start ======-->
    <section class="contact-map-section section-gap soft-blue-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="section-title text-left mb-45">
                        <span>Get In Touch</span>
                        <h2 class="title">Prayer // Counselling & Etc... </h2>
                    </div>

                    <div class="form-area">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if (session('warning'))
                            <div class="alert alert-warning">
                                {{ session('warning') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form id="contact-form" action="{{ route('contact.submit') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <input type="text" name="name" placeholder="Enter your name"
                                    value="{{ old('name') }}">
                                <div class="icon"><i class="fa-solid fa-user"></i></div>
                            </div>
                            <div class="input-group mt-20">
                                <input type="text" name="mobile" placeholder="Enter your Phone No."
                                    value="{{ old('mobile') }}">
                                <div class="icon"><i class="fa-solid fa-mobile"></i></div>
                            </div>
                            <div class="input-group mt-20">
                                <input type="email" name="email" placeholder="Enter your email"
                                    value="{{ old('email') }}">
                                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                            </div>
                            <div class="input-group textarea-group mt-20">
                                <textarea name="message" cols="30" rows="10" placeholder="Enter your message">{{ old('message') }}</textarea>
                                <div class="icon"><i class="fa-solid fa-pen-to-square"></i></div>
                            </div>
                            <div class="input-group mt-20">
                                <button class="main-btn" type="submit">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9">
                    <div class="contact-video mt-md-gap-50">
                        <img class="img-fluid" class="" src="images/about.png" alt=" ">
                        <a class="video-popup" href=" "><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Form End ======-->




    <!--====== Back to top start ======-->
    <div class="back-to-top">
        <a href="#"> <i class="fas fa-arrow-up"></i> </a>
    </div>
    <!--====== Back to top start ======-->

    @include('footer')
    <script>
        document.addEventListener("contextmenu", (event) => {
            event.preventDefault();
        });
    </script>













    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!--====== Bootstrap ======-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--====== Slick slider ======-->
    <script src="assets/js/slick.min.js"></script>
    <!--====== Magnific ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--====== Isotope ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--====== Imagesloaded ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!--====== Inview ======-->
    <script src="assets/js/jquery.inview.min.js"></script>
    <!--====== Easy Pie Chart ======-->
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <!--====== Syotimer ======-->
    <script src="assets/js/jquery.syotimer.min.js"></script>
    <!--====== Wow ======-->
    <script src="assets/js/wow.min.js"></script>
    <!--====== Main JS ======-->
    <script src="assets/js/main.js"></script>
</body>



</html>
