<!DOCTYPE html>

    <html lang="en" dir="ltr">
        <head>
            <meta name="robots" content="noindex">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

            <title>E-aukcije.rs</title>

            <!-- LINKS -->
            @section('appendCss')
            <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}img/favicon.png">
            <link href="{{ asset('/') }}css/admin/style.min.css" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('/') }}css/font-awesome.min.css">
            <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.5.94/css/materialdesignicons.min.css">
            <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
            @show
            <!-- ENDLINKS -->
        </head>

            <body>

            @empty(!session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endempty

            @empty(!session('success'))
                <div class="alert alert-success">{{ session('success') }} </div>
            @endempty

            @empty(!session('message'))
                <div class="alert alert-success">{{ session('message') }} </div>
            @endempty

            @empty(!session('status'))
                <div class="alert alert-success">{{ session('status') }} </div>
            @endempty

            <div id="main-wrapper" data-layout="horizontal" data-navbarbg="skin1" data-sidebartype="full" data-boxed-layout="boxed">

                @include('components.admin.nav')

                <div class="page-wrapper" style="display: block;">

                    @yield('content')

                    @include('components.admin.footer')

                </div>
            </div>


            @section('appendJs')
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/jquery.min.js"></script>
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/popper.min.js"></script>
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/bootstrap.min.js"></script>
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/app.min.js"></script>
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/app.init.horizontal.js"></script>
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/app-style-switcher.horizontal.js"></script>
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/perfect-scrollbar.jquery.min.js"></script>
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/sparkline.js"></script>
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/waves.js"></script>
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/sidebarmenu.js"></script>
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/custom.min.js"></script>
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/raphael.min.js"></script>
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/morris.min.js"></script>
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/datatables.min.js"></script>
            <script src="{{ asset('/') }}pics/product1/test_files/admin/js/dashboard3.js"></script>
            <script>
                $(function() {
                    $('#cc-table').DataTable({});
                });
            </script>
            @show

        </body>
    </html>