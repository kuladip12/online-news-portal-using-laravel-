
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <style>
        .bg-green {
            background-color: #28a745;
        }
        .bg-primary {
            background-color: #007bff;
        }
        .tranding-carousel .owl-nav button.owl-prev,
        .tranding-carousel .owl-nav button.owl-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            padding: 10px;
            color: #fff;
            cursor: pointer;
        }
        .tranding-carousel .owl-nav button.owl-prev {
            left: 0;
        }
        .tranding-carousel .owl-nav button.owl-next {
            right: 0;
        }
        .tranding-carousel .text-truncate {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>


<div class="py-1">
    <div class="container-fluid bg-green">
        <div class="row align-items-center px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-white text-center py-2" style="width: 100px;">Tranding</div>
                    <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">
                        @php
                        $latest_posts = App\Models\Post::where('tranding','0')->orderBy('created_at','DESC')->get();
                        @endphp
                        @foreach($latest_posts as $latest_post_item)
                        <div class="text-truncate">
                            <a class="text-light" href="{{ url('category/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug)}}">{{ $latest_post_item->name }}</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block">
                <span id="currentDateTime"></span>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
    function updateDateTime() {
        const now = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
        const formattedDateTime = now.toLocaleDateString('en-US', options);
        document.getElementById('currentDateTime').innerHTML = formattedDateTime;
    };

    $(document).ready(function() {
        // Initialize Owl Carousel
        $('.owl-carousel-1').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });

        // Update the date and time every second
        setInterval(updateDateTime, 1000);
        // Initial call to display the date and time immediately on page load
        updateDateTime();
    });
</script>


