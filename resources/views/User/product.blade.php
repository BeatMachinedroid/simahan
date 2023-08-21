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
                     <h2>Featured Products</h2>
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
                     {{-- <h2></h2> --}}
                  </div>
               </div>
               {{-- <div class="col-md-2"></div> --}}

            </div>
            <div class="row">
            <div class="product_main">

                @foreach ($barang as $item)
                <div class="project_box ">
                    <div class="dark_white_bg" ><img src="{{ asset('storage/product/' . $item->gambar) }}"
                        alt="{{ $item->name_barang }}" style="width: 120px; height: 120px;"></div>
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
