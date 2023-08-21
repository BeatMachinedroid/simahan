@extends('User.layout.main')

@section('content')
   <!-- body -->

      <!-- end six_box section -->
      <!-- project section -->
      <div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Detail Products</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="project" class="project">
         <div class="container">
            <div class="row">
                {{-- <div class="col-md-2"></div> --}}
               <div class="col-md-12">
                  <div class="titlepage">
                    <ol class="breadcrumb bg-white">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('product') }}">Product</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                     <h2></h2>
                  </div>
               </div>
               {{-- <div class="col-md-2"></div> --}}

            </div>
            <div class="row">
            <div class="product_main">

                <div class="container-fluid pb-5">
                    <div class="row px-xl-5">
                        <div class="col-lg-5 mb-30">
                            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner bg-light">
                                    <div class="carousel-item active">
                                        <img class="w-100 h-100" src="{{ asset('storage/product/' . $barang->gambar) }}" alt="Image">
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-lg-7 h-auto mb-30">
                            <div class="h-100 bg-light p-30">
                                <h3>{{ $barang->name_barang }}</h3>

                                <h3 class="font-weight-semi-bold mb-4">Rp. {{ $barang->harga }}</h3>
                                <p class="mb-4">{{ $barang->deskripsi }}</p>


                                <form action="{{ route('add.cart') }}" method="post">
                                    @csrf
                                    <div class="d-flex align-items-center mb-4 pt-2">
                                        <div class="input-group quantity mr-3" style="width: 130px;">
                                            <input type="text" style="display: none" value="{{ $barang->id }}" name="barang">
                                            <div class="input-group-btn">
                                                <a class="btn btn-primary btn-minus">
                                                    <i class="fa fa-minus"></i>
                                                </a>
                                            </div>
                                            <input type="text" name="jumlah" class="form-control border-0 text-center" value="1" id="jumlah">
                                            <div class="input-group-btn">
                                                <a class="btn btn-primary btn-plus">
                                                    <i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1">
                                            </i> Add To Cart</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            </div>
         </div>
      </div>

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
