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
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   </head>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="{{ Asset('Assets/User/js/jquery.min.jss') }}"></script>
      <script src="{{ Asset('Assets/User/js/popper.min.js') }}"></script>
      <script src="{{ Asset('Assets/User/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ Asset('Assets/User/js/jquery-3.0.0.min.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ Asset('Assets/User/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ Asset('Assets/User/js/custom.js') }}"></script>
   <div class="header">

    <div class="header_midil">
       <div class="container">
          <div class="row d_flex">
             <div class="col-md-4">
                <ul class="conta_icon d_none1">
                   @if (Auth::check())
                     <li><a href="#"><img src="{{ asset('Assets/User/images/email.png') }}" alt="#"/>{{ Auth::user()->email }}</a> </li>
                   @else
                     <li><a href="#"><img src="{{ asset('Assets/User/images/email.png') }}" alt="#"/> </a> </li>
                   @endif
                </ul>
             </div>

             <div class="col-md-4">
                <a class="logo" href="#"><h3 style="color: #183661">SIMAHAN</h3></a>
             </div>
             <div class="col-md-4">
                <ul class="right_icon d_none1">
                    @if (Auth::check())
                        <a href="{{ route('logout') }}" class="order">Logout</a>
                        <a href="{{ route('view.cart') }}" class="btn px-0 ml-3">
                            <img src="{{ asset('Assets/User/images/shopping.png') }}" alt=""/>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">{{ $cart->count() }}</span>
                        </a>
                    @else
                        <a href="{{ route('view.login') }}" class="order">Login</a>
                        <a href="" class="btn px-0 ml-3">
                            <img src="{{ asset('Assets/User/images/shopping.png') }}" alt="#"/>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                    @endif

                   {{-- <li><a href="#"><img src="{{ asset('Assets/User/images/shopping.png') }}" alt="#"/></a> </li> --}}

                </ul>
             </div>

          </div>
       </div>
    </div>
    <body class="main-layout">
        <div class="header_bottom">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{ route('home') }}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('product') }}">Product</a>
                              </li>
                              {{-- <li class="nav-item">
                                 <a class="nav-link" href="products.html">About</a>
                              </li> --}}
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('check') }}">Cek Pesanan</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('cek_resi') }}">Cek Resi</a>
                              </li>
                              {{-- <li class="nav-item">
                                 <a class="nav-link" href="news.html">News</a>
                              </li> --}}
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('about') }}">About</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-md-4">
                     <div class="search">
                        <form action="/action_page.php" id="search">
                           <input class="form_sea" type="text" placeholder="Search" name="search" id="product">
                           <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   @yield('content')

         <!-- end footer -->
      <!-- Javascript files-->

      <script>
        const product = document.getElementById('product');
        const form = document.getElementById('search');

        // Event listeners to trigger form submission on date change
        product.addEventListener('change', submitFormOnChange);
        // endInput.addEventListener('change', submitFormOnChange);
        function submitFormOnChange() {
            form.submit();
        }
    </script>
    <script>
        const decrementBtn = document.querySelector('.btn-minus');
        const incrementBtn = document.querySelector('.btn-plus');
        const quantityInput = document.querySelector('#jumlah');

        decrementBtn.addEventListener('click', () => {
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        });

        incrementBtn.addEventListener('click', () => {
            quantityInput.value = parseInt(quantityInput.value) + 1;
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const cartItems = document.querySelectorAll('.cart-item');
    const subtotalElement = document.querySelector('#subtotal');
    let subtotal = 0;
    cartItems.forEach(function(item) {
        const decrementBtn = item.querySelector('.btn-minus-cart');
        const incrementBtn = item.querySelector('.btn-plus-cart');
        const quantityInput = item.querySelector('#jumlah');
        const hargaInput = item.querySelector('#harga');
        const totalSpan = item.querySelector('#total');
        const saveButton = document.querySelector('#saveButton');

        function updateTotal() {
            const harga = parseFloat(hargaInput.value);
            const jumlah = parseInt(quantityInput.value);
            const total = harga * jumlah;
            totalSpan.textContent = total.toFixed(0);
        }

        decrementBtn.addEventListener('click', () => {
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
                updateTotal();
                updateSubtotal();
            }
        });

        incrementBtn.addEventListener('click', () => {
            quantityInput.value = parseInt(quantityInput.value) + 1;
            updateTotal();
            updateSubtotal();
        });

        // Initial update on page load
        updateTotal();
        updateSubtotal();
    });
    function updateSubtotal() {
        subtotal = 0;
        cartItems.forEach(function(item) {
            const harga = parseFloat(item.querySelector('#harga').value);
            const jumlah = parseInt(item.querySelector('#jumlah').value);
            subtotal += harga * jumlah;
        });
        subtotalElement.textContent = subtotal.toFixed(0);
    }
});

    </script>

   </body>
</html>
