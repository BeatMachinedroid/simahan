@extends('User.layout.main')

@section('content')
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      {{-- <div class="loader_bg">
         <div class="loader"><img src="{{ Asset('Assets/User/images/loading.gif')}}" alt="#" /></div>
      </div> --}}
      <!-- end loader -->
      <!-- header -->
      <header>
        <!-- header inner -->
        <div class="header">

           <div class="header_midil">
              <div class="container">
                 <div class="row d_flex">
                    <div class="col-md-4">
                       <ul class="conta_icon d_none1">
                          <li><a href="#"><img src="images/email.png" alt="#"/> demo@gmail.com</a> </li>
                       </ul>
                    </div>
                    <div class="col-md-4">
                       <a class="logo" href="#"><img src="{{ Asset('Assets/User/images/logo.png') }}" alt="#"/></a>
                    </div>
                    <div class="col-md-4">
                       <ul class="right_icon d_none1">
                          <li><a href="#"><img src="images/shopping.png" alt="#"/></a> </li>
                          <a href="#" class="order">Order Now</a>
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
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
                                   <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="products.html">Products</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="fashion.html">Fashion</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="news.html">News</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="contact.html">Contact Us</a>
                                </li>
                             </ul>
                          </div>
                       </nav>
                    </div>
                    <div class="col-md-4">
                       <div class="search">
                          <form action="/action_page.php">
                             <input class="form_sea" type="text" placeholder="Search" name="search">
                             <button type="submit" class="seach_icon"><i class="fa fa-search"></i></button>
                          </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="text-bg">
                     <h1> <span class="blodark"> Simahan </span> <br>Pusat Oleh - Oleh</h1>
                     <p>A huge fashion collection for ever </p>
                     <a class="read_more" href="#">Shop now</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ban_img">
                     <figure><img src="images/ban_img.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- six_box section -->
      <div class="six_box">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="images/shoes.png" alt="#"/></i>
                     <span>Shoes</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="images/underwear.png" alt="#"/></i>
                     <span>underwear</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="images/pent.png" alt="#"/></i>
                     <span>Pante & socks</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="images/t_shart.png" alt="#"/></i>
                     <span>T-shirt & tankstop</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx yellow_bg">
                     <i><img src="images/jakit.png" alt="#"/></i>
                     <span>cardigans & jumpers</span>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4 pa_left">
                  <div class="six_probpx bluedark_bg">
                     <i><img src="images/helbet.png" alt="#"/></i>
                     <span>Top & hat</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end six_box section -->
      <!-- project section -->
      <div id="project" class="project">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Featured Products</h2>
                  </div>
               </div>
            </div>
            <div class="row">
            <div class="product_main">

                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="images/shoes1.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>


                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="images/shoes2.png" alt="#"/></div>
                     <h3 >Short Openwork Cardigan $120.00</h3>
                  </div>

                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="images/shoes3.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>

                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="images/shoes4.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>

                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="images/shoes5.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>


                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="images/tisat1.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>

                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="images/tisat2.png" alt="#"/></div>
                     <h3 >Short Openwork Cardigan $120.00</h3>
                  </div>

                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="images/tisat3.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>

                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="images/tisat4.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>

                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="images/tisat5.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>


                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="images/mix1.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>

                  <div class="project_box ">
                     <div class="dark_white_bg" ><img  src="images/mix2.png" alt="#"/></div>
                     <h3 >Short Openwork Cardigan $120.00</h3>
                  </div>

                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="images/mix3.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>

                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="images/mix4.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>

                  <div class="project_box">
                     <div class="dark_white_bg" ><img  src="images/mix5.png" alt="#"/></div>
                     <h3>Short Openwork Cardigan $120.00</h3>
                  </div>

               <div class="col-md-12">
                  <a class="read_more" href="#">See More</a>
               </div>
            </div>
            </div>
         </div>
      </div>
      <!-- end project section -->
      <!-- fashion section -->
      <div class="fashion">
         <img src="images/fashion.jpg" alt="#"/>
      </div>
      <!-- end fashion section -->
      <!-- news section -->
      <div class="news">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Letest News</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12 margin_top40">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="news_img">
                           <figure><img src="images/news_img1.jpg"></figure>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="news_text">
                           <h3>Specimen book. It has survived not only five</h3>
                           <span>7 July 2019</span>
                           <div class="date_like">
                              <span>Like </span><span class="pad_le">Comment</span>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 margin_top40">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="news_img">
                           <figure><img src="images/news_img2.jpg"></figure>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="news_text">
                           <h3>Specimen book. It has survived not only five</h3>
                           <span>7 July 2019</span>
                           <div class="date_like">
                              <span>Like </span><span class="pad_le">Comment</span>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-12 margin_top40">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="news_img">
                           <figure><img src="images/news_img3.jpg"></figure>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="news_text">
                           <h3>Specimen book. It has survived not only five</h3>
                           <span>7 July 2019</span>
                           <div class="date_like">
                              <span>Like </span><span class="pad_le">Comment</span>
                           </div>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end news section -->
      <!-- newslatter section -->
      <div  class="newslatter">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <h3 class="neslatter">Subscribe To The Newsletter</h3>
               </div>
               <div class="col-md-7">
                  <form class="news_form">
                     <input class="letter_form" placeholder=" Enter your email" type="text" name="Enter your email">
                     <button class="sumbit">Subscribe</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- end newslatter section -->
      <!-- three_box section -->
      <div class="three_box">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="images/icon_mony.png"></i>
                     <span>Money Back</span>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="images/icon_gift.png"></i>
                     <span>Special Gift</span>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="images/icon_car.png"></i>
                     <span>Free Shipping</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end three_box section -->

      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <div class="inror_box">
                        <h3>INFORMATION </h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="inror_box">
                        <h3>MY ACCOUNT </h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="inror_box">
                        <h3>ABOUT  </h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="inror_box">
                        <h3>CONTACTS  </h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
@endsection
