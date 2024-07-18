<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        <link href="{{asset('assets/images/favicon.png')}}" type="image/png" rel="icon">

        {{-- <!-- Fonts -->
         <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">    --}}

    <!-- Font Awesome -->
   
        <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}" ></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
        <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
    </head>
    <body class="font-sans antialiased">
       
        
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" >
            {{-- <img id="background" class="" src="https://laravel.com/assets/img/welcome/background.svg" /> --}}

            @include('layouts.inc.frontend2')
            
            @include('layouts.inc.frontend-navbar')

           
            <main style="background-image: url('https://images.pexels.com/photos/20216320/pexels-photo-20216320/free-photo-of-salamanca-cathedral-and-buildings-behind-tormes-river.jpeg');background-repeat:no-repeat;background-size:100%">
                @yield('content')
            </main>
            @include('layouts.inc.frontend-footer')
        
        </div>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" defer ></script>
        <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}" ></script>
        <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
            <script src="{{asset('lib/easing/easing.min.js')}}"></script>
            <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    
        <!-- Contact Javascript File -->
        {{-- <script src="mail/jqBootstrapValidation.min.js"></script> 
        <script src="mail/contact.js"></script>  --}}
    
        <!-- Template Javascript -->
        <script src="{{asset('js/main.js')}}"></script>
        @yield('scripts')
    
    </body>
</html>
