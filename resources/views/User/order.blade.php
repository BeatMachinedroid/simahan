@extends('User.layout.main')

@section('content')
   <!-- body -->


  </div>
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
                        <li class="breadcrumb-item"><a href="{{ route('product') }}">Acount</a></li>
                        <li class="breadcrumb-item active">Order</li>
                    </ol>
                     <h2></h2>
                  </div>
               </div>
               {{-- <div class="col-md-2"></div> --}}

            </div>
            <div class="row">
            <div class="product_main">

                <div class="container-fluid">
                    <div class="row px-xl-5">
                        <div class="col-lg-12 table-responsive mb-5">
                            <table class="table table-light table-borderless table-hover text-center mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Kode order</th>
                                        <th>Alamat</th>
                                        <th>total</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    @forelse ($order as $item)

                                        <tr class="cart-item">
                                            <td class="align-middle">{{ $item->code_order }}</td>
                                            <td class="align-middle">{{ $item->alamat }}</td>
                                            <td class="align-middle">{{ $item->total }}</td>
                                            <td class="align-middle">{{ $item->status }}</td>
                                            {{-- <td class="align-middle"><a class="btn btn-sm btn-danger" href="{{ 'delete-cart/'.encrypt($item->id) }}"><i class="fa fa-times"></i></a></button></td> --}}
                                        </tr>

                                    @empty
                                        <td class="align-middle" colspan="5"><span>You Don't have order data</span></td>
                                    @endforelse
                                </tbody>
                            </table>
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
