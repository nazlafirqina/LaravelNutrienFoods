<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @yield('style-tambahan')
    <title>@yield('title', 'NutrienFoods')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid ">
            <a class="navbar-brand fw-bolder" href="#" style="color: #14416b;">NutrienFoods</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link active fw-bold" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link fw-bold" href="{{ route('user.menu') }}">Menu</a>
                    </li>
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link fw-bold" href="{{ route('user.contact') }}">Contact</a>
                    </li>
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link fw-bold" href="{{ route('user.about') }}">About Us</a>
                    </li>
                    
                </ul>
                @if (Auth::check())
                    <div class="d-flex">
                        <a class="btn btn-info me-2 signUp" href="{{ route('user.profile') }}">Profile</a>
                    </div>
                @else
                    <div class="d-flex">
                        <a class="btn btn-info me-2 signUp" href="{{ route('user.auth.register') }}">Sign Up</a>
                    </div>
                @endif

            </div>
        </div>
    </nav>

    @yield('content')
    <footer class=" text-center text-lg-start" style="background-color: rgba(20, 65, 107, 0.8);">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase text-light">Nutrien Foods</h5>
                    <p class="text-light">
                        Nutrienfoods provide a healthy and delicious food for you.
                        No need to worry about calories and fat. Because, all of the food we sell
                        is observed by nutrionists
                    </p>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase text-light"> Quick Links</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="./index.php" class="text-light">Home</a>
                        </li>
                        <li>
                            <a href="./menu.php" class="text-light">Menu</a>
                        </li>
                        <li>
                            <a href="#!" class="text-light">Contact</a>
                        </li>
                        <li>
                            <a href="./about.php" class="text-light">About Us</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-0 text-light">Others</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="text-light">Account</a>
                        </li>
                        <li>
                            <a href="#!" class="text-light">Help</a>
                        </li>
                        <li>
                            <a href="#!" class="text-light">Privacy&Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3 text-light fw-bold" style="background-color:  #14416b;">
            © 2021 Copyright:
            <a class="text-light fw-bold" href="">NutrienFoods</a>
        </div>
    </footer>
    @yield('js')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
</body>

</html>
