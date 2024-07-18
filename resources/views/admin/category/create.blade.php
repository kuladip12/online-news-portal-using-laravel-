@extends('layouts.master')

@section('title','Category')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Summernote CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
    <style>
        /* Custom styles for beautiful design */
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 15px 15px 0 0;
        }
        .card-header h1 {
            margin: 0;
        }
        .card-body {
            padding: 20px;
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #ced4da;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .checkbox-inline {
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="container px-4">
        <div class="card mt-4">
            <div class="card-header">
                <h1>Add Category</h1>
            </div>
            <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                @endif
                <form action="{{url('admin/add-category')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Category Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Slug</label>
                        <input type="text" name="slug" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="5" id="mySummernote" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <h6>SEO Tags</h6>
                    <div class="mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Meta Description</label>
                        <input type="text" name="meta_description" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Meta Keyword</label>
                        <textarea name="meta_keyword" rows="3" class="form-control"></textarea>
                    </div>
                    <h6>Status Mode</h6>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="">Navbar Status</label>
                            <input type="checkbox" name="navbar_status">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="">Status</label>
                            <input type="checkbox" name="status">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary float-end">Save Category</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap and jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Summernote JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#mySummernote').summernote({
                placeholder: 'Write here...',
                tabsize: 2,
                height: 200
            });
        });
    </script>
</body>
</html>

@endsection