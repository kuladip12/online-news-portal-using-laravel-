@extends('layouts.master')

@section('title','NEWSGrid edit-Post')

@section('content')
<main>
    <div class="container px-4">
        <div class="card mt-4">
            @if($errors->any())
            <div class="allert alert-danger">
                   <div>{{$error}}</div>
            </div>
            @endif
            <div class="card-header">
                <h4>Edit posts
                    <a href="{{url('admin/posts')}}" class="btb btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
               <form action="{{url('admin/update-post/'.$post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for ="">Category</label>
                    <select name="category_id" required class="form-control">
                        <option value="">--Select Category-- </option>
                        @foreach ($category as $cateitem) 
                        <option value="{{$cateitem->id}}" {{$post->category_id == $cateitem->id ? 'selected': '' }}>
                            {{$cateitem->name}}
                        </option>  
                         @endforeach 
                        
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Post Name</label>
                    <input type="text" name="name" value="{{$post->name}}" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="{{$post->slug}}" class="form-control"/>
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="mySummernote" class="form-control" rows="4">{!!$post->description!!}</textarea>
                </div>
                
                <div class='mb-3'>
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="">Youtube Iframe Link</label>
                    <input type="url" name="yt_iframe" class="form-control" value="{{$post->yt_iframe}}">{!!$post->yt_iframe!!}</input >
                </div>
                <h4>SEO Tags</h4>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" class="form-control" value="{{$post->meta_title}}"/>
                </div>
                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" class="form-control" rows="3">{!!$post->meta_description!!}</textarea>

                </div>
                <div class="mb-3">
                    <label for="">Meta Keyword</label>
                    <textarea name="meta_keyword" class="form-control" rows="3">{!!$post->meta_keyword!!}</textarea>

                </div>
                <h4>Status</h4>
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status" {{$post->status == '1' ? 'checked':''}} />
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="">Tranding</label>
                                <input type="checkbox" name="tranding" {{$post->tranding == '1' ? 'checked':''}} />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary float-end">Update Post</button>
                        </div>
                    </div>
                </div>
               </form>
            </div>
        </div>
    </div>
@endsection