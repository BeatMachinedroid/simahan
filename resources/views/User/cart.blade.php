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

                <div class="container-fluid">
                    <div class="row px-xl-5">
                        <div class="col-lg-8 table-responsive mb-5">
                            <table class="table table-light table-borderless table-hover text-center mb-0">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Products</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    @forelse ($cart as $item)

                                        <tr class="cart-item">
                                            <td class="align-middle"><img src="{{ asset('storage/product/' . $item->product->gambar) }}" alt="" style="width: 50px; padding-right:10px;"/><span>{{ $item->product->name_barang }}</span></td>
                                            <td class="align-middle">Rp. {{ $item->product->harga }}</td>
                                            <td class="align-middle">
                                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                                    <div class="input-group-btn">
                                                        <a class="btn btn-sm btn-primary btn-minus-cart">
                                                            <i class="fa fa-minus"></i>
                                                        </a>
                                                    </div>
                                                    <input type="text" class="form-control form-control-sm border-0 text-center" value="{{ $item->product->harga }}" id="harga" style="display: none;">
                                                    <input type="number" class="form-control form-control-sm border-0 text-center" value="{{ $item->jumlah }}" id="jumlah" name="jumlah">
                                                    <div class="input-group-btn">
                                                        <a class="btn btn-sm btn-primary btn-plus-cart">
                                                            <i class="fa fa-plus"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">Rp. <span id="total"></span></td>
                                            <td class="align-middle"><a class="btn btn-sm btn-danger" href="{{ 'delete-cart/'.encrypt($item->id) }}"><i class="fa fa-times"></i></a></button></td>
                                        </tr>

                                    @empty
                                        <td class="align-middle" colspan="5"><span>your cart is empty</span></td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-4">

                            <h5 class="section-title position-relative text-uppercase mb-3"><span class=" pr-3">Cart Summary</span></h5>

                            <div class="blue-bg p-30 mb-5">
                                <div class="border-bottom pb-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h6>Total</h6>
                                        <h6>Rp. <span id="subtotal">total</span></h6>
                                        {{-- <input class="form-control" type="text" name="total" id="subtotal" value="1"> --}}
                                    </div>
                                    {{-- <div class="d-flex justify-content-between">
                                        <h6 class="font-weight-medium">Shipping</h6>
                                        <h6 class="font-weight-medium">Rp. 0</h6>
                                    </div> --}}
                                </div>
                                <div class="pt-2">
                                    {{-- <div class="d-flex justify-content-between mt-2">
                                        <h5>Total</h5>
                                        <h5>Rp. <span id="subtotal">total</span></h5>
                                    </div> --}}
                                        <a href="{{ route('checkout') }}" class="btn btn-block btn-primary font-weight-bold my-3 py-3" id="saveButton">Proceed To Checkout</a>

                                </div>
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
<script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-mRIBofAy2bZinONq"></script>

    {{-- <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('saveButton');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay("{{ $snapToken }}");
          // The customer will be redirected after completing the payment pop-up
        });
    </script> --}}

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
          window.snap.pay('TRANSACTION_TOKEN_HERE');
          // customer will be redirected after completing payment pop-up
        });
      </script>

