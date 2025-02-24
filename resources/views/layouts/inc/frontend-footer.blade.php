<div class="container-fluid  bg-light pt-5 px-sm-3 px-md-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-5">
            <a href="index.html" class="navbar-brand">
                <h1 class="mb-2 mt-n2 display-5 text-uppercase"><span class="text-primary">NEWS</span>Grid</h1>
            </a>
            <p>The purpose of Online News Portal is to automate the existing manual system by the help of computerized equipments and full-fledged computer software, fulfilling their requirements, so that their valuable data/information can be stored for a longer period with easy accessing and manipulation of the same. Online News Portal, as described above, can lead to error free, secure, reliable and fast management system. It can assist the user to concentrate on their other activities rather to concentrate on the record keeping. Thus it will help organization in better utilization of resources. 
            </p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-bold mb-4">Categories</h4>
            @php
            $categories= App\Models\Category::where('navbar_status','0')->where('status','0')->paginate(20);
            
          @endphp
           @foreach ($categories as $cateitem)
            <div class="d-flex flex-wrap m-n1">
                <a href="" class="btn btn-sm btn-outline-secondary m-1">{{$cateitem->name}}</a>
                
            </div>
            @endforeach
        </div>
        {{-- <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-bold mb-4">Tags</h4>
            <div class="d-flex flex-wrap m-n1">
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Sports</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Technology</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Entertainment</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                <a href="" class="btn btn-sm btn-outline-secondary m-1">Lifestyle</a>
            </div>
        </div> --}}
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="font-weight-bold mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-secondary mb-2" href="{{url('/about')}}"><i class="fa fa-angle-right text-dark mr-2"></i>About</a>
                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Advertise</a>
                <a class="text-secondary mb-2" href="{{url('welcome')}}"><i class="fa fa-angle-right text-dark mr-2"></i>Privacy & policy</a>
                <a class="text-secondary mb-2" href="{{url('terms_and_condition')}}"><i class="fa fa-angle-right text-dark mr-2"></i>Terms & conditions</a>
                <a class="text-secondary" href="{{url('/contactus')}}"><i class="fa fa-angle-right text-dark mr-2"></i>Contact</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid py-4 px-sm-3 px-md-5">
    <p class="m-0 text-center">
        &copy; <a class="font-weight-bold" href="#">NEWSGrid</a>. All Rights Reserved. 
        
        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        Designed by <a class="font-weight-bold" href="https://htmlcodex.com">Kuladip</a>
    </p>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>

