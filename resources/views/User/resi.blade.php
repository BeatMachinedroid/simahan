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
                     <h2>Cek Resi</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="project" class="project">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <ol class="breadcrumb bg-white">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('product') }}">Acount</a></li>
                            <li class="breadcrumb-item active">Cek Resi</li>
                        </ol>
                        <h2></h2>
                        <form class="row g-3" method="post" action="{{ route('resi') }}">
                            @csrf
                            <div class="col-3">
                                <select name="courier" class="form-control">
                                    <option value="jne">Jne</option>
                                    <option value="pos">Pos</option>
                                    <option value="jnt">Jnt</option>
                                    <option value="sicepat">Sicepat</option>
                                    <option value="tiki">Tiki</option>
                                   </select>
                            </div>
                            <div class="col-3">
                              <input type="text" class="form-control" placeholder="Code resi" name="awb">
                            </div>
                            <div class="col-auto">
                              <button type="submit" class="btn btn-primary mb-3">Confirm</button>
                            </div>
                          </form>
                  </div>
               </div>
               {{-- <div class="col-md-2"></div> --}}

            </div>

            <div class="row">
            <div class="product_main">

                <div class="container-fluid">
                    <div class="row px-xl-5">
                        @if(isset($result))
                            @if(isset($result['data']))
                                <h1>Hasil Pelacakan Resi</h1>
                                <p>Courier: {{ $result['data']['summary']['courier'] }}</p>
                                <p>AWB Number: {{ $result['data']['summary']['awb'] }}</p>
                                <p>Status: {{ $result['data']['summary']['status'] }}</p>
                                <!-- Tampilkan informasi pelacakan lainnya sesuai kebutuhan -->
                                <h2>History</h2>
                                @foreach ($result['data']['history'] as $history){
                                    <p>{{ $history->date }}</p>
                                    <p>{{ $history->desc }}</p>
                                }
                                @endforeach
                            @else
                                <p>{{ $result['message'] }}</p>
                            @endif
                        @endif
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
