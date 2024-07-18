<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        <link href="{{asset('assets/images/favicon.png')}}" type="image/png" rel="icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
{{--summernote css link --}}
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css" rel="stylesheet"> 
<style>
    .post-code-bg {
    width:fit-content;
    min-width:100%;
    background-color:#ed9797 !important;
    width:100% !important;
    overflow-x:scroll !important;
    position:relative;
    padding:1rem 1rem;
    margin-bottom:1rem;
    border:1px solid transparent;
    border-radius:0.25rem;
}
 
    
</style>  
</head>
    <body style="background-image: url('https://images.unsplash.com/photo-1556379092-dca659792591?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');background-repeat:no-repeat;background-size:100%">
        @include('layouts.inc.admin-navbar')

        <div id="layoutSidenav">
            @include('layouts.inc.admin-sidebar')

            <div id="layoutSidenav_content">
                <main>

                    @yield('content')

                </main>
            @include('layouts.inc.admin-footer')
                
            </div>
            
        </div>


        <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
        
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        {{--summernote js link --}}
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#mySummernote").summernote({
                    height: 150,
                });
                $('.dropdown-toggle').dropdown();
            });
        </script>
        <script src="//cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css"></script>
        <script>
            $(document).ready( function (){

                $('#myDataTable').DataTable();
            });
        </script>
        {{-- @yield('scripts') --}}
        
    </body>
</html> 