@extends('layouts.master')

@section('title','NEWSGrid View-Post')

@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h4>View posts
                    <a href="{{url('admin/add-post')}}" class="btb btn-primary float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <div class="table-responsive">

                
                 <table id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <td>Category</td>
                        
                        <th>Post Name</th>
                        <th>image</th>
                        <th>yt_iframe</th>
                        <th>Status</th>
                        <th>Tranding</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->category->name}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <img src="{{asset('uploads/post/'.$item->image) }}" width="50px" height="50px" alt="error">
                        </td>
                        <td>{{$item->yt_iframe}}</td>
                        <td>{{$item->status =='1' ? 'Hidden':'Visible'}}</td>
                        <td>{{$item->tranding =='1' ? 'Hidden':'Visible'}}</td>
                        <td>
                            <a href="{{url('admin/post/'.$item->id)}}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{url('admin/delete-post/'.$item->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                        
                    @endforeach
                </tbody>
               </table>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
@endsection