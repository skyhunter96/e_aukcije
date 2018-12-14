<!doctype html>

<html>

    <head>
        <title>e-aukcije - </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @section('appendCss')
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/normalize.css">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/jquery.countdown.css">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/customScrollbar.css">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/jquery-ui.css">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/owl.theme.css">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/prettyPhoto.css">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/owl.carousel.css">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/prettyPhoto.css">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/jquery.fullPage.css">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/transitions.css">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/main.css">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/color.css">
        <link rel="stylesheet" href="{{ asset('/') }}pics/product1/css/responsive.css">
        <script src="{{ asset('/') }}pics/product1/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        @show
    </head>
    <body class="tg-login">

        <div id="tg-wrapper" class="tg-wrapper tg-haslayout">

        @include('components.nav')

        <main id="tg-main" class="tg-main tg-haslayout">
        <!--************************************
                        Header End
                *************************************-->
        <!--************************************
                Home Slider Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">		<!--************************************
				Header End
		*************************************-->
        <!--************************************
                Home Slider Start
        *************************************-->
        <div class="tg-homeslider tg-homerslidertwo">
            <img src="{{ asset('/') }}pics/product1/test_files/img-04.jpg" alt="image description" style="
                height: 200px;
                width: 100%;
                padding-bottom:  20px;">
        </div><!--************************************
				Home Slider End
		*************************************-->
        <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-mainvtwo tg-haslayout">

            @include('pages.logreg')

        </main>
        <!--************************************
                Main End
        *************************************-->
        <!-- OVO OVDE JE FALILO AKO BUDE PROBLEM SKINI -->
        </main>
        </main>
        </div>
        <!-- OVO OVDE JE FALILO AKO BUDE PROBLEM SKINI END -->
        <!--************************************
                Footer Start
        *************************************-->

        @include('components.footer')

        @section('appendJs')
        <script src="{{ asset('/') }}pics/product1/test_files/jquery-library.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/bootstrap.min.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/js"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/customScrollbar.min.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/jquery.easings.min.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/scrolloverflow.min.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/jquery.fullPage.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/jquery.countdown.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/owl.carousel.min.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/isotope.pkgd.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/packery-mode.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/prettyPhoto.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/jquery-ui.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/parallax.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/countTo.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/hoverdir.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/appear.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/gmap3.js.download"></script>
        <script src="{{ asset('/') }}pics/product1/test_files/main.js.download"></script>
        @show

    </body>

</html>