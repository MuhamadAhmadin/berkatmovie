@extends('layouts.app')
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">{{ $title }}</h4>

                            <div class="page-title-right">
                                <a href="{{ route('dashboard.kategori.index') }}"
                                    class="btn btn-warning btn-sm text-white"><i class="fas fa-arrow-left"></i> Kembali</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div>
                                            <form method="POST" action="{{ route('dashboard.kategori.update', $data->id) }}" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        @include('components.flash_messages')
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-8">
                                                        <label class="form-label">Kategori</label>
                                                        <span class="desc"></span>
                                                        <div class="controls">
                                                            <input type="text" class="form-control" name="nama" value="{{ $data->nama }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button type="submit" class="btn btn-primary w-md">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    @endsection
