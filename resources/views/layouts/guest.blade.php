<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{asset('assets/images/favicon.png')}}" type="image/png" rel="icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Stylesheets -->
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('https://images.pexels.com/photos/20216320/pexels-photo-20216320/free-photo-of-salamanca-cathedral-and-buildings-behind-tormes-river.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .auth {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        .auth img {
            width: 150px;
            margin-bottom: 1rem;
        }
        .auth .text-light {
            color: #ffffff !important;
        }
    </style>
</head>
<body>
    <div class="auth">
        <div>
            <a href="/">
                <img src="{{asset('assets/images/logo.png')}}" alt="newsgrid" />
            </a>
        </div>
        <div class="text-center">
            {{ $slot }}
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
