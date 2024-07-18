{{-- <x-app-layout> --}}
    @extends('layouts.app')
    @section('title','profile')
    @section('content')
   
    <link href="{{asset('assets/images/favicon.png')}}" type="image/png" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* body {
            font-family: 'Roboto', sans-serif;
            background-image: url('https://images.pexels.com/photos/20216320/pexels-photo-20216320/free-photo-of-salamanca-cathedral-and-buildings-behind-tormes-river.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            color:transparent;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        } */
        .header h2 {
            background-color: transparent;
            padding: 15px;
            border-radius: 5px;
        }
        .container p{
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .form-control, .btn {
            border-radius: 5px;
        }
        .btn {
            background-color: #007bff;
            border: none;
            color: #fff;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .form-section {
            margin-bottom: 30px;
        }
    </style>

    <div class="py-5">
        <div class="container text-white form-section">
            <div class="max-w-xl mx-auto">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <div class="container text-white form-section">
            <div class="max-w-xl mx-auto">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <div class="container text-white form-section">
            <div class="max-w-xl mx-auto">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


@endsection
{{-- </x-app-layout> --}}
