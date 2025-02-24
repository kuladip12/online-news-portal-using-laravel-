@extends('layouts.app') 
@section('title',"$category->slug")
@section('content')
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                
                <div class="category-heading">
                    <h4 class="mb-0">{{ $category->name}}</h4>
                </div>
                <div class="category-body">
                    <h2>{{$category->description}}</h2>
                </div>
                @forelse ($post as $postitem)
                <div class="card card-shadow mt-4">
                    <div class="card-body">
                        <a href="{{url('category/'.$category->slug.'/'.$postitem->slug)}}" class="text-decoration-none">
                        <h2 class="post-heading">{{ $postitem->name}}</h2>
                    </a>
                    <h6>
                        Posted On: {{ $postitem->created_at->format('d-m-y')}}
                        <span class="ms-3"> By: {{ $postitem->user->name}}</span>
                    </h6>
                    </div>  
                </div>
                @empty
                <div class="card card-shadow mt-4">
                    <div class="card-body">
                        
                        <h2 class="post-heading">No post Available</h2>
                    
                    </div>  
                </div>
                    
                @endforelse
                <div class="your-paginate">
                    {{$post->links()}}
                </div>

                
                

            </div>
        
        <div class="col-md-3">
            <div class="border p-2">
                <h4>Advertising Area</h4>
            </div>
        </div>   
        </div>
    </div>
</div>
    
 @endsection