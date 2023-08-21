@extends('Admin.layout.main')

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12 mt-5">
                        <h3 class="page-title mt-3">Dashboard</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">About</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add About</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('add.about') }}" method="post">
                                @csrf
                                {{-- <h4 class="card-title">Personal Information</h4> --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" name="judul">
                                        </div>
                                        <div class="form-group">
                                            <label>Isi:</label>
                                            <textarea rows="5" cols="5" class="form-control" placeholder="Enter message" name="isi"></textarea>
                                            </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
