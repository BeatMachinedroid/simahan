<!doctype html>
<html lang="en">

<head>
    <title>Pusat oleh - oleh | register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="img"
    style="background-image: url(images/bg1.jpeg);

background-color: rgb(0 0 0 / 50%);;
    background-blend-mode: overlay;
    background-size: cover;
    background-position: center;">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">SIMAHAN</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Pusat Oleh - Oleh</h3>
                        @if (session()->has('message'))
                                <div class="alert" style="color : red">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        <form action="{{ route('register') }}" method="post" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" required
                                    name="username">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" required name="email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="No Telp" required
                                    name="no_telp">
                            </div>
                            <div class="form-group">
                                <textarea type="text" class="form-control" placeholder="Alamat" required
                                    name="alamat" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control" placeholder="Password"
                                    required name="password">
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input id="password-field-conf" type="password" placeholder="Confirm Password" class="form-control " name="password_confirmation" required="" autocomplete="current-password">
                                <span toggle="#password-field-conf"
                                    class="fa fa-fw fa-eye field-icon toggle-password-conf"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <a href="{{ route('view.login') }}" style="color: #fff">Sign In</a>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#" style="color: #fff">Forgot Password</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
