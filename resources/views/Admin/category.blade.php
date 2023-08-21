@extends('Admin.layout.main')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12 mt-5">
                        <h3 class="page-title mt-3">Dashboard</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">List categories</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex">
                    <div class="card card-table flex-fill">
                        <div class="card-header">
                            {{-- <h4 class="card-title float-left mt-2">Booking</h4> --}}
                            <button type="button" class="btn btn-primary btn-addon" data-toggle="modal"
                                data-target="#addModal">
                                <i class="ti-plus"></i>
                                Add Category
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center">
                                    <thead>
                                        @if (session()->has('message'))
                                            <div class="alert alert-success">
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                        <tr>
                                            <th>No</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            @if (Auth::user()->role == 'admin')
                                                <th class="text-left">Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($category as $no => $item)
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>{{ $no + 1 }}</div>
                                                </td>
                                                <td class="text-nowrap">{{ $item->name }}</td>
                                                <td class="text-nowrap"><img src="{{ asset('storage/category/' . $item->gambar) }}"
                                                    alt="" style="width: 120px; height: 120px;">
                                            </td>
                                                @if (Auth::user()->role == 'admin')
                                                    <td class="text-left">
                                                        <button class="btn btn-primary btn-sm btn-addon" data-toggle="modal"
                                                            data-target="#editcate-{{ $item->id }}">
                                                            <i class="ti-pencil"></i>
                                                            Edit
                                                        </button>
                                                        <a href="{{ 'delete-category/' . encrypt($item->id) }}"
                                                            class="btn btn-danger btn-sm btn-addon"
                                                            onclick="return confirm('Are you sure ?')">
                                                            <i class="ti-trash"></i>
                                                            Delete
                                                        </a>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <div class="alert alert-danger" role="alert">
                                                    Data is Empty
                                                </div>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <div class="modal fade bd-example-modal-lg" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="ti-close"></i></span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post" action="{{ route('add.category') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control"
                                                        placeholder="Nama Product" name="name">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" placeholder="Image"
                                                        name="image">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Close</button>
                                            </div>
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

    @foreach ($category as $item)
                {{-- edit --}}
                <div class="modal fade" id="editcate-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true"><i class="ti-close"></i></span>
                               </button>
                           </div>
                           <div class="row">
                               <div class="col-lg-12">
                                   <div class="card">
                                       <div class="card-body">
                                           <div class="basic-form">
                                               <form method="post" action="{{ route('put.category') }}" class="row">
                                                   @csrf
                                                   @method('PUT')
                                                   <input type="hidden" name="id" value="{{ $item->id }}">

                                                   <div class="col-sm-12">
                                                       <div class="form-group">
                                                           <input type="text" class="form-control"
                                                               placeholder="Nama Category" name="name" value="{{ $item->name }}">
                                                       </div>
                                                   </div>
                                                   <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <input type="file" class="form-control" placeholder="Image"
                                                                name="image">
                                                        </div>
                                                    </div>
                                                   <div class="col-sm-12">
                                                       <button type="submit" class="btn btn-primary">Submit</button>
                                                       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
               @endforeach
