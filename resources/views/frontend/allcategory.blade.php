@extends('layouts.app') 
@section('title', 'all category')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .category-container {
            padding: 20px 0;
        }
        .category-card {
            position: relative;
            overflow: hidden;
            height: 150px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .category-card img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            transition: transform 0.3s;
        }
        .category-card:hover img {
            transform: scale(1.1);
        }
        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .category-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }
        .category-overlay:hover {
            background: rgba(0, 0, 0, 0.7);
        }
        .category-overlay a {
            color: #ffffff;
            font-size: 24px;
            text-decoration: none;
            z-index: 10;
        }
    </style>
</head>
<body>

<div class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Category</h3>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>
                    @php
                        $categories = App\Models\Category::where('navbar_status','0')->where('status','0')->get();
                    @endphp
                    @foreach ($categories as $cateitem)
                    <div class="category-container">
                        <div class="category-card">
                            <img src="{{ asset('uploads/category/' . $cateitem->image) }}" alt="{{ $cateitem->name }}">
                            <div class="category-overlay">
                                <a href="{{ url('category/' . $cateitem->slug) }}">{{ $cateitem->name }}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4 pt-3 pt-lg-0">
                <!-- Social Follow Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Follow Us</h3>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                            <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                            <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                            <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                            <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                            <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                        </a>
                        <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #1AB7EA;">
                            <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                        </a>
                    </div>
                    {{-- <div class="col-md-4"> --}}
                        <div class="border p-2 my-2">
                            <h4>Advertising Area</h4>
                        </div>
                        <div class="border p-2 my-2">
                            <h4>Advertising Area</h4>
                        </div>
                        <div class="border p-2 my-2">
                            <h4>Advertising Area</h4>
                        </div>
                    </div>
        </div>
    </div>
</div>

<!-- Bootstrap and jQuery JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

@endsection