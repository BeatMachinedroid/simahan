<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>romofyi</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ Asset('Assets/User/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ Asset('Assets/User/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ Asset('Assets/User/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ Asset('Assets/User/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ Asset('Assets/User/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>

   @yield('content')

         <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ Asset('Assets/User/js/jquery.min.jss') }}"></script>
      <script src="{{ Asset('Assets/User/js/popper.min.js') }}"></script>
      <script src="{{ Asset('Assets/User/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ Asset('Assets/User/js/jquery-3.0.0.min.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ Asset('Assets/User/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ Asset('Assets/User/js/custom.js') }}"></script>
   </body>
</html>
