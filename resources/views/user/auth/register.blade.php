<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/styleRegister.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>
<body class="desktop phone-bg">
    <div class="container phone">
        <div class="row justify-content-center">
            <div class="col-sm-8 text-center mt-5">
                <h1>Welcome to NutrienFoods</h1>
                <h2>Please Register</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="card shadow-lg mt-4 bg-card-rgstr">
                <div class="card-body">
                    <h4 class="card-title text-center">Register Now</h4>
                    <form action="{{route('user.auth.register')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-5 justify-content-start">
                                <div class="form-group">
                                    <label for="FirstName">First Name</label>
                                    <input type="text" class="form-control bg-rgstr-form" id="FirstName" placeholder="John" name="firstname">
                                </div>
                            </div>
                            <div class="col-sm-5 offset-sm-2">
                                <div class="form-group">
                                    <label for="LastName">Last Name</label>
                                    <input type="text" class="form-control bg-rgstr-form" id="LastName" placeholder="Doe" name="lastname">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" class="form-control bg-rgstr-form" id="Email" placeholder="example@mail.com" name="email">
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control bg-rgstr-form" id="Password" placeholder="Please Enter 8 Characters Long Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary self-align-center text-white mt-2" id="rgstr-btn">
                            <h5>REGISTER</h5>
                        </button>
                        <h5 id="login-text" class="form-text">Already Have An Account? <a class="lgn-link text-blue" href="{{route('login')}}">Login</a></h5>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container desktop-laptop">
        <div class="row justify-content-center">
            <div class="col-sm-8 text-center mt-5">
                <h1 class="font-weight-bold">Welcome to NutrienFoods</h1>
                <h2 class="font-weight-bold">Please Register</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mt-5">
                <img src=./img/PenghiasRegister.png class="img-penghias" alt="food-bowl">
            </div>
            <div class="col-lg-5 offset-lg-2 mt-5">
                <form action="{{route('user.auth.register')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-5 justify-content-start">
                            <div class="form-group">
                                <label for="FirstName" class="mb-0"><h4>First Name</h4></label>
                                <input type="text" class="form-control bg-rgstr-form-desktop" id="FirstName" placeholder="John" name="firstname">
                            </div>
                        </div>  
                        <div class="col-lg-5 offset-lg-2">
                            <div class="form-group">
                                <label for="LastName" class="mb-0"><h4>Last Name</h4></label>
                                <input type="text" class="form-control bg-rgstr-form-desktop" id="LastName" placeholder="Doe" name="lastname">
                            </div>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="Email" class="mb-0"><h4>Email</h4></label>
                        <input type="email" class="form-control bg-rgstr-form-desktop" id="Email" placeholder="example@mail.com" name="email">
                    </div>
                    <div class="form-group">
                        <label for="Password" class="mb-0"><h4>Password</h4></label>
                        <input type="password" class="form-control bg-rgstr-form-desktop" id="Password" placeholder="Please Enter 8 Characters Long Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary self-align-center text-white mt-2" id="rgstr-btn">
                        <h4>REGISTER</h4>
                    </button>
                    <small id="login-text" class="form-text">Already Have An Account? <a class="lgn-link text-blue" href="{{route('login')}}">Login</a></small>
                </form>
            </div>
        </div>
    </div>
</body>
</html>