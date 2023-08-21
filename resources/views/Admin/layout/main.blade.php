<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ Asset('Assets/admin/img/favicon.png') }}">
	<link rel="stylesheet" href="{{ Asset('Assets/admin/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ Asset('Assets/admin/plugins/fontawesome/css/fontawesome.min.css') }}">
	<link rel="stylesheet" href="{{ Asset('Assets/admin/plugins/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ Asset('Assets/admin/css/feathericon.min.css') }}">
	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
	<link rel="stylesheet" href="{{ Asset('Assets/admin/plugins/morris/morris.css') }}">
	<link rel="stylesheet" href="{{ Asset('Assets/admin/css/style.css') }}">
 </head>

<body>
    <div class="header">
        <div class="header-left">
            <a href="index.html" class="logo"> <span class="logoclass">SIMAHAN</span> </a>
            {{-- <a href="index.html" class="logo logo-small"> <img src="assets/img/hotel_logo.png" alt="Logo" width="30" height="30"> </a> --}}
        </div>
        <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
        <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
        <ul class="nav user-menu">

            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="{{ Asset('Assets/admin/img/profile/avatar-01.jpg') }}" width="31" alt="{{ Auth::user()->role }}"></span> </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm"> <img src="{{ Asset('Assets/admin/img/profiles/avatar-01.jpg') }}" alt="User Image" class="avatar-img rounded-circle"> </div>
                        <div class="user-text">
                            <h6>{{ Auth::user()->username }}</h6>
                            <p class="text-muted mb-0">{{ Auth::user()->role }}</p>
                        </div>
                    </div> <a class="dropdown-item" href="{{ route("logout") }}">Logout</a> </div>
            </li>
        </ul>
        <div class="top-nav-search">
            <form>
                <input type="text" class="form-control" placeholder="Search here">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="active"> <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                    <li class="list-divider"></li>
                    <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Data Product </span> <span class="menu-arrow"></span></a>
                        <ul class="submenu_class" style="display: none;">
                            <li><a href="{{ route('barang') }}"> Product </a></li>
                            <li><a href="{{ route('category') }}"> Kategori </a></li>
                        </ul>
                    </li>
                    <li> <a href="{{ route('customer') }}"><i class="fas fa-cube"></i> <span>Customer</span></a> </li>
                    <li> <a href="{{ route('order') }}"><i class="fas fa-cube"></i> <span>Orders</span></a> </li>
                    <li> <a href="{{ route('view.about') }}"><i class="fas fa-cube"></i> <span>About</span></a> </li>


                </ul>
            </div>
        </div>
    </div>

 @yield('content')

 <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
 <script src="{{ Asset('Assets/admin/js/jquery-3.5.1.min.js') }}"></script>
 <script src="{{ Asset('Assets/admin/js/popper.min.js') }}"></script>
 <script src="{{ Asset('Assets/admin/js/bootstrap.min.js') }}"></script>
 <script src="{{ Asset('Assets/admin/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
 <script src="{{ Asset('Assets/admin/plugins/raphael/raphael.min.js') }}"></script>
 <script src="{{ Asset('Assets/admin/plugins/morris/morris.min.js') }}"></script>
 <script src="{{ Asset('Assets/admin/js/chart.morris.js') }}"></script>
 <script src="{{ Asset('Assets/admin/js/script.js') }}"></script>
</body>

</html>
