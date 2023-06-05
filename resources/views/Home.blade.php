<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job Portal</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style2.css') }}">

        
        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
    <nav class="navbar">
<div class="brandTitle">Job<span class="h-span">Portal</span></div>
<a href="javascript:void(0);" class="toggle-button" onclick="icon_click()">
 <img id="myImageId" src="{{ asset('images/menu.png') }}"></img>
</a>
</div>
<div class="nav-links" id="nav-links">
<ul>
  <li><a>Home</a></li>
  <li><a href="{{url('/signup')}}">Signup</a></li>
  <li><a href="{{url('/login')}}">Login</a></li>
  <li><a href="{{url('/displayJobs')}}">Jobs</a></li>
  <li><a href="{{url('/addJob')}}">Post Job</a></li>
</ul>
</div>

  </nav>

  <!-- nav section ended -->
  <!-- home section start -->
     <header class="hero-section">
     
      <div class="hero-text-section">
        <h1>the best courses you will find find here!</h1>
        <p>Hire and Invest in highly skilled juniors now! Hire and Invest in highly skilled juniors now!</p>
       

        <div class="wrapper">
    <div class="search_box">
        <div class="dropdown">
            <div class="default_option">All</div>  
            <ul>
              <li>All</li>
              <li>Recent</li>
              <li>Popular</li>
            </ul>
        </div>
        <div class="search_field">
          <input type="text" class="input" placeholder="Search">
          <i class="fas fa-search"></i>
      </div>
    </div>
</div>






    </header>
    


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="{{ asset('images/about-1.jpg') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="{{ asset('images/about-2.jpg') }}" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="{{ asset('images/about-3.jpg') }}" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="{{ asset('images/about-4.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

 <!-- Category Start -->
 <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Marketing</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h6 class="mb-3">Customer Service</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h6 class="mb-3">Human Resource</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                            <h6 class="mb-3">Project Management</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                            <h6 class="mb-3">Business Development</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                            <h6 class="mb-3">Sales & Communication</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                            <h6 class="mb-3">Teaching & Education</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">Design & Creative</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Category End -->



        

    <!-- <section class="clt-section">
      <div class="clt-text-section">
        <h1>Recieve New Job Offers.</h1>
        <p
          >Want to know as soon as a new job offer is posted on our<br />
          website?Subscribe to our weekly job offer digest.</p
        >
        <div class="email-container">
          <input type="email" placeholder="Enter email address" />
          <button>Subscribe</button>
        </div>
      </div>
    </section> -->
    


    <footer class="footer-container">
      <a href="#">Job offers</a>
      <a href="#">Companies</a>
      <a href="#">Discounts</a>
      <a href="#">About us</a>
      <a href="#">Juniors</a>
      <a href="#">FAQ</a>
      <a href="#">Blog</a>
      <a href="#">Terms</a>
      <a href="#">Privacy Policy</a>
    </footer>


    <!-- js -->
    <script>
    
    function icon_click() {
  var x = document.getElementById("nav-links");
  var img = document.getElementById("myImageId");
  if (x.className === "nav-links") {
    x.className += " active";
    img.src="images/cross.png";
  } else {
    x.className = "nav-links";
    img.src="images/menu.png";
  }
}

  </script>
    </body>
</html>
