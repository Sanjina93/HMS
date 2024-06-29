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



        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">One</span>-Health</a>

                <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                            aria-describedby="icon-addon1">
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/aboutus')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/aservices')}}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/doctors')}}">Doctors</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                        </li>
                        @if (Route::has('login'))
                            @auth

                            <li class="nav-item">
                                <a class="nav-link btn btn-primary" style=" color:white; "href="{{url('myappointment')}}">My Appointment</a>
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
    <div  align="center" style="padding:70px; text:center;">

    <table>
        <tr style="background-color:black;">
            <th style="padding:10px; font-size:20px; color:white;">Doctor Name</th>
            <th style="padding:10px; font-size:20px; color:white;">Date</th>
            <th style="padding:10px; font-size:20px; color:white;">Message</th>
            <th style="padding:10px; font-size:20px; color:white;">Status</th>
            <th style="padding:10px; font-size:20px; color:white;">Cancel Appointment</th>
        </tr>

        @foreach ($appointment as $appointments)
        <tr style="background-color:black;" align="center">
            <td style="padding:10px;  color:white;">{{$appointments->doctor}}</td>
            <td style="padding:10px;  color:white;">{{$appointments->date}}</td>
            <td style="padding:10px;  color:white;">{{$appointments->message}}</td>
            <td style="padding:10px;  color:white;">{{$appointments->status}}</td>
            <td><a  class="bt btn-danger "onclick="return confirm('are you sure to cancel it')" href="{{url('cancelappointment',$appointments->id)}}">Cancel</a></td>
        </tr>

        @endforeach
    </table>
    </div>



    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
