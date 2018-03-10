<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">

            {{--ESTILOS--}}
            <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
            <link rel="stylesheet" href="estilos/css/flexslider.css">
            <link rel="stylesheet" href="estilos/css/jquery.fancybox.css">
            <link rel="stylesheet" href="estilos/css/owl.carousel.css">
            <link rel="stylesheet" href="estilos/css/owl.transitions.css">
            <link rel="stylesheet" href="estilos/css/main.css">
            <link rel="stylesheet" href="estilos/css/responsive.css">
            <link rel="stylesheet" href="estilos/css/font-icon.css">
            <link rel="stylesheet" href="estilos/css/animate.min.css">
            <script defer src="panel/vendor/font-awesome/js/js/fontawesome-all.js"></script>
             {{--ESTILOS--}}
            <title>@yield('title','Default')</title>
        </head>
    <body>
        <section>
             @include('includes.nav1')
            </section>
            <section>
                @yield('content')

            </section>
            
            <section>
                @include('includes.modal')
                @include('includes.footer1')
            </section>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
            <script src="estilos/js/bootstrap.min.js"></script> 
            <script src="estilos/js/owl.carousel.min.js"></script>
            <script src="estilos/js/mousescroll.js"></script>
            
            <script src="estilos/js/jquery.flexslider-min.js"></script> 
            <script src="estilos/js/jquery.fancybox.pack.js"></script>  
            <script src="estilos/js/modernizr.js"></script> 
            <script src="estilos/js/main.js"></script> 
            <script src="estilos/js/jquery.contact.js"></script> 
           
            @yield('script')
    </body>
</html>
