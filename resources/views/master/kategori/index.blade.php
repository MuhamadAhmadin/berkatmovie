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
                                <a href="{{ route('dashboard.kategori.create') }}" class="btn btn-primary text-white">Tambah</a>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-md-12">
                                    @include('components.flash_messages')
                                </div>
                            </div>
                            <div class="card-body">
                                {{ $dataTable->table(['class' => ['table table-bordered dt-responsive nowrap w-100'], 'id' => 'datatable-buttons']) }}
                            </div>
                        </div>
                        <!-- end cardaa -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
@endsection

@push('js')
    {{ $dataTable->scripts() }}
@endpush
