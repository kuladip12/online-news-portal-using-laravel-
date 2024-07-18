@extends('layouts.app') 
@section('title', 'NEWSGrid')
@section('content')


<head>
    
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .carousel-item img {
            border-radius: 10px;
        }
        .carousel-item .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 24px;
            text-decoration: none;
            transition: background 0.3s;
        }
        .carousel-item .overlay:hover {
            background: rgba(0, 0, 0, 0.7);
        }
        .category-card {
            position: relative;
            overflow: hidden;
            height: 80px;
            border-radius: 10px;
            margin-bottom: 20px;
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
        .news-card {
            display: flex;
            align-items: center;
            background-color: #ffffff;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .news-card img {
            border-radius: 10px;
            margin-right: 10px;
        }
        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .news-card a {
            color: #343a40;
            font-weight: 600;
            text-decoration: none;
        }
        .advertise {
            background-color: #007bff;
            color: #ffffff;
            border-radius: 10px;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }
        .youtube-news iframe {
            border-radius: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container-fluid py-3">
    
    <div class="container">
        @if (session('message'))
    <div class="alert alert-warning">
        {{ session('message') }}
    </div>
@endif

        <div class="owl-carousel owl-carousel-4 carousel-item-4 position-relative">
            @php
                $latest_posts = App\Models\Post::where('tranding', '0')->orderBy('created_at', 'DESC')->get();
            @endphp
            @foreach($latest_posts as $latest_post_item)
            <div class="news-card">
                <img src="{{ asset('uploads/post/' . $latest_post_item->image) }}" style="width: 80px; height: 80px; object-fit: cover;">
                <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                    <a class="text-secondary font-weight-semi-bold" href="{{ url('category/' . $latest_post_item->category->slug . '/' . $latest_post_item->slug) }}">{{ $latest_post_item->name }}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Main News Slider Start -->
<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                    @php
                        $categories = App\Models\Category::where('navbar_status', '0')->where('status', '0')->paginate(2);
                    @endphp
                    @foreach ($categories as $cateitem)
                    <div class="position-relative overflow-hidden" style="height: 435px;">
                        <img class="img-fluid h-100" src="{{ asset('uploads/category/' . $cateitem->image) }}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1">
                                <a class="text-white" href="{{ url('category/' . $cateitem->name) }}">{{ $cateitem->name }}</a>
                                <span class="px-2 text-white">/</span>
                                <a class="text-white">{{ $cateitem->created_at->format('d-m-y') }}</a>
                            </div>
                            <a class="h2 m-0 text-white font-weight-bold" href="{{ url('category/' . $cateitem->slug) }}">{{ $cateitem->slug }}</a>
                        </div>
                    </div>
                    @endforeach  
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                    <h3 class="m-0">Categories</h3>
                    <a class="text-secondary font-weight-medium text-decoration-none" href="{{ url('viewall') }}">View All</a>
                </div>
                @php
                    $categories = App\Models\Category::where('navbar_status', '0')->where('status', '0')->paginate(4);
                @endphp
                @foreach ($categories as $cateitem)
                <div class="category-card">
                    <img class="img-fluid w-100 h-100" src="{{ asset('uploads/category/' . $cateitem->image) }}" style="object-fit: cover;">
                    <div class="category-overlay">
                        <a href="{{ url('category/' . $cateitem->slug) }}">{{ $cateitem->name }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="col-md-12 my-auto text-white">
        <div class="advertise">
            <h5>Advertise Here</h5>
        </div>
    </div>
</div>
<!-- Main News Slider End -->

<div class="container-fluid py-2 ">
    <div class="container  py-3">
        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
            <h3 class="m-0">youtube News</h3>
            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
        </div>
        @php
        $post= App\Models\Post::where('status','0')->whereNotNull('yt_iframe')->where('yt_iframe', '!=', '')->get();
      @endphp 

        <div class="owl-carousel  carousel-item-4 text-light ">
            @foreach ($post as $postitem)
           <div class="row">
                <iframe width="560" height="315" src="{{$postitem->yt_iframe}}" title="YouTube video player" frameborder="0"  allowfullscreen></iframe>
                <p >{{$postitem->name}}</p>
            </div>
            @endforeach 
        </div>
       
    </div>
</div>
</div>

<!-- Bootstrap and jQuery JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>


   
 @endsection