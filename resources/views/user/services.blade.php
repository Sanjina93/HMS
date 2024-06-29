<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>




    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('aboutus')}}">About Us</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/aservices')}}">Services</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('doctors')}}">Doctors</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{url('contact')}}">Contact</a>
            </li>
            @if (Route::has('login'))
            @auth

                <li class="nav-item">
                    <a class="nav-link btn btn-primary"
                        style=" color:white; "href="{{ url('myappointment') }}">My Appointment</a>
                </li>


                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <input type="submit" value="Logout" class="ml-3">

                </form>
            @else
                <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{ url('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{ url('register') }}">Register</a>
                </li>
            @endauth
        @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Services</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->



<div class="page-section">
    <div class="container">
        <div class="owl-carousel wow fadeInUp margin-left:80px;" id="doctorSlideshow">
            @foreach ($services as $service)
                <div class="item">
                    <div class="card-services">
                        <div class="header">

                            <div style="
                                                            width:90% ;
                                                            height: 300px;
                                                            transition: transform 0.5s ease;
                                                            background-color: #f5f5f5;
                                                            display: flex;
                                                            justify-content: center;
                                                            align-items: center;
                                                            margin:20px auto;
                                                            "
                                onmouseenter="this.style.transform = 'translateY(-10px)';"
                                onmouseleave="this.style.transform = 'translateY(0)';">
                                <div class="body text-center">
                                <img  height=""src="doctorimage/{{$service->image}}" alt="">

                                <p class="text-xl">
                                    {{$service->service}}
                                </p>


                                <a href="{{ url('details', $service->id) }}" class="btn btn-primary">Learn more</a><br><br>


                                <a href="{{url('doctors')}}" class="btn btn-success">Book Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@include('user.footer')



<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>

</html>
