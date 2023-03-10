<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="shortcut icon" href="images/bismar-1.png" type="">
    <title>Indo Bismar - Retail IT</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- ?/header -->
        @include('home.header')
        <!-- slider section -->
        @include('home.slider')

        <!-- end slider section -->
    </div>
    <!-- why section -->

    <!-- end why section -->
    @include('home.why')
    <!-- arrival section -->
    @include('home.new_arrival')
    <!-- end arrival section -->

    <!-- product section -->
    @include('home.product')
    <section class="product_section layout_padding">
        <div class="container">
            <div class="btn-box">
                <a href="{{ url('/allproduct')}}">
                    View All products
                </a>
            </div>
        </div>
    </section>
        <!-- end product section -->

        <!-- subscribe section -->
        @include('home.subscribe')
        <!-- end subscribe section -->
        <!-- client section -->
        @include('home.client')
        <!-- end client ection -->
        <!-- footer start -->
        @include('home.footer')
        <!-- footer end -->
        <div class="cpy_">
            <p class="mx-auto">© 2022 All Rights Reserved By <a href="https://html.design/">POLINEMA</a><br>

                Distributed By <a href="https://KELOMPOK 3.com/" target="_blank">KELOMPOK 3</a>

            </p>
        </div>
        <!-- jQery -->
        <script src="home/js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="home/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="home/js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="home/js/custom.js"></script>
</body>

</html>