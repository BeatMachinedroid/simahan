@extends('User.layout.main')

@section('content')
   <!-- body -->

      <!-- loader  -->
      {{-- <div class="loader_bg">
         <div class="loader"><img src="{{ Asset('Assets/User/images/loading.gif')}}" alt="#" /></div>
      </div> --}}
      <!-- end loader -->
      <!-- header -->


      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="text-bg">
                     <h1> <span class="blodark"> Pusat Oleh - Oleh </span> SIMAHAN <br></h1>
                     <p>Lampung Barat</p>
                     <a class="read_more" href="#">Shop now</a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="ban_img">
                     {{-- <figure><img src="images/ban_img.png" alt="#"/></figure> --}}
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
                     <h2>Category</h2>
                  </div>
               </div>
            </div>
            <div class="row">
            <div class="product_main">

                @foreach ($category as $item)
                <div class="project_box ">
                    <div class="dark_white_bg" ><a href="{{ 'product-search/'.encrypt($item->id) }}"><img src="{{ asset('storage/category/' . $item->gambar) }}"
                        alt="{{ $item->name }}" style="width: 120px; height: 120px;"></a></div>
                    <h3><a href="{{ 'product-search/'.encrypt($item->id) }}">{{ $item->name}}</a></h3>
                 </div>
                @endforeach
                {{-- @foreach ($barang as $item)
                <div class="project_box ">
                    <div class="dark_white_bg" ><img src="{{ asset('storage/product/' . $item->gambar) }}"
                        alt="{{ $item->name_barang }}" style="width: 120px; height: 120px;"></div>
                    <h3>{{ $item->name_barang }} <span>Rp.{{ $item->harga }}</span></h3>
                 </div>
                @endforeach --}}

            </div>
            </div>
         </div>
      </div>
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

                {{-- @foreach ($barang as $item)
                <div class="project_box ">
                    <div class="dark_white_bg" ><a href="{{ 'product-detail/'.encrypt($item->id) }}"><img src="{{ asset('storage/product/' . $item->gambar) }}"
                        alt="{{ $item->name_barang }}" style="width: 120px; height: 120px;"></a></div>
                    <h3><a href="{{ 'product-detail/'.encrypt($item->id) }}">{{ $item->name_barang }}</a> <span>Rp.{{ $item->harga }}</span></h3>
                 </div>
                @endforeach --}}
                @foreach ($barang as $item)
                <div class="project_box ">
                    <div class="dark_white_bg" ><a href="{{ 'product-detail/'.encrypt($item->id) }}"><img src="{{ asset('storage/product/' . $item->gambar) }}"
                        alt="{{ $item->name_barang }}" style="width: 120px; height: 120px;"></a></div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="{{ 'product-detail/'.encrypt($item->id) }}">{{ $item->name_barang }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>Rp. {{ $item->harga }}</h5><h6 class="text-muted ml-2"></h5>
                            </div>
                            {{-- <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star-half-alt text-primary mr-1"></small>
                                <small>(99)</small>
                            </div> --}}
                        </div>
                 </div>
                @endforeach

            </div>
            </div>
         </div>
      </div>
      <div class="blue_bg">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>About</h2>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <div class="about">
        <div class="container">
           <div class="row">
              <div class="col-md-5">
                 <div class="about_text">
                    <h3>{{ $about->judul }}</h3>
                    <p>{{ $about->isi }}</p>
                    <a class="read_more" href="#">Read More</a>
                 </div>
              </div>
              <div class="col-md-7">
                 <div class="about_img">
                    <figure><img src="{{ asset('images/bg1.jpeg') }}" alt="#"></figure>
                 </div>
              </div>
           </div>
        </div>
     </div>
      <!-- end project section -->
      <!-- fashion section -->
      {{-- <div class="fashion">
         <img src="{{ asset('images/bg1.jpeg') }}" alt="#"/>
      </div> --}}
      <!-- end fashion section -->
      <!-- news section -->
      {{-- <div class="news">
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
                           <figure><img src="{{ asset('Assets/User/images/news_img1.jpg') }}"></figure>
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
      </div> --}}
      <!-- end news section -->
      <!-- newslatter section -->
      <div  class="newslatter">
         <div class="container">
            {{-- <div class="row d_flex">
               <div class="col-md-5">
                  <h3 class="neslatter">Subscribe To The Newsletter</h3>
               </div>
               <div class="col-md-7">
                  <form class="news_form">
                     <input class="letter_form" placeholder=" Enter your email" type="text" name="Enter your email">
                     <button class="sumbit">Subscribe</button>
                  </form>
               </div>
            </div> --}}
         </div>
      </div>
      <!-- end newslatter section -->
      <!-- three_box section -->
      <div class="three_box">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="{{ asset('Assets/User/images/icon_mony.png') }}"></i>
                     <span>Money Back</span>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="{{ asset('Assets/User/images/icon_gift.png') }}"></i>
                     <span>Special Gift</span>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="gift_box">
                     <i><img src="{{ asset('Assets/User/images/icon_car.png') }}"></i>
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
                        <p>{{ $about->isi }}</p>
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
