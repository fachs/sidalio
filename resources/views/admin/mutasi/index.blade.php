@extends('layouts.simple.master')

@section('title', 'Mutasi')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Mutasi</h3>
                </div>
                <div class="col-sm-6">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.mutasi.create') }}" class="btn btn-primary">{{ __('Tambah Data') }}</a>
                        <div class="pb-3"></div>
                        <div class="table-responsive custom-scrollbar">
                            {!! $dataTable->table() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <!-- calendar js-->
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    {!! $dataTable->scripts() !!}
@endsection
