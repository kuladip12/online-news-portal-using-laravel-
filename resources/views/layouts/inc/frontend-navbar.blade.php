<div class="global-navbar">
    <div class="container  item-center">
        <div class="row">
            <div class="col-md-3 d-none d-sm-none d-md-inline">
                <img src="{{asset('assets/images/logo.png')}} " class="w-100" alt="logo"/>
            </div>
            <div class="col-md-8 my-auto">
                <div class="border text-center p-2">
                    <h5>Advertise Here</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sticky-top">
  <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
    <div class="container">
      <a href="" class="navbar-brand d-inline d-sm-inline d-md-none">
        <img src="{{asset('assets/images/logo.png')}} " style="width: 140px" alt="logo"/>
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
          <div class="navbar-nav mr-auto py-0">
              <a href="{{url('/')}}" class="nav-item nav-link ">Home</a>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
                    
                    <ul class="dropdown-menu">
                      <li>
                        @php
                    $categories= App\Models\Category::where('navbar_status','0')->where('status','0')->get();
                  @endphp
                    @foreach ($categories as $cateitem)
                        <a class="nav-item nav-link" href="{{ url('category/'.$cateitem->slug)}}">{{$cateitem->name}}</a>
                      </li>
                      @endforeach
                    </ul>
                  </li>
              </div>
              <a href="{{url('/contactus')}}" class="nav-item nav-link">Contact Us</a>
          </div>
          <div class="input-group ml-auto" style="width: 100%; max-width: 500px;">
            {{-- <li > --}}
              <ul class="navbar-nav ms-auto" >
                <li >
              @if (Route::has('login'))
                  @auth
                      <a
                          href="{{ url('admin/dashboard') }}"
                          class="nav-item nav-link"
                      >
                          Dashboard
                      </a>
                  @else
                      <a
                          href="{{ route('login') }}"
                          class="nav-item nav-link"
                      >
                          Log in
                      </a>

                     
                  @endauth
          @endif
        </li>
      </ul>
      <ul class="navbar-nav ms-auto" >
        <li >
      @if (Route::has('register'))
      <a
          href="{{ route('register') }}"
          class="nav-item nav-link"
      >
          Register
      </a>
  @endif
</li>
</ul>
              @if (Auth::check() )
              
              <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><div>{{ Auth::user()->name }}</i></div></a>
                    {{-- <div>{{ Auth::user()->name }}</div> --}}
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                     
                        <li><a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a></li>
                        
                        <li><hr class="dropdown-divider" /></li>
                        
                        <li>
                            <a class="dropdown-item" href="{{Route('logout')}}" onclick="event.preventDefaults();document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
                        </li>
                    </ul>
                </li>
            </ul>
              @endif

            </li>
          </div>
      </div>
    </div>
</nav>
   
</div>
