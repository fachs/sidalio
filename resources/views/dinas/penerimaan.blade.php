@extends('layouts.simple.master')

@section('title', 'Penerimaan')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flatpickr/flatpickr.min.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Penerimaan</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid common-order-history">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row g-3 custom-input">
                            <div class="col-xl col-md-6"> <label class="form-label" for="datetime-local">From: </label>
                                <div class="input-group flatpicker-calender"><input class="form-control" id="datetime-local"
                                        placeholder="dd/mm/yyyy"></div>
                            </div>
                            <div class="col-xl col-md-6"> <label class="form-label" for="datetime-local3">To: </label>
                                <div class="input-group flatpicker-calender"><input class="form-control"
                                        id="datetime-local3" placeholder="dd/mm/yyyy"></div>
                            </div>
                            
                            
                            <div class="col d-flex justify-content-start align-items-center m-t-40"><a
                                    class="btn btn-primary f-w-500" href="#!">Cari</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card heading-space">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>Data Penerimaan</h5>
                        </div>
                    </div>
                    <div class="card-body pt-0 px-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="order-history-wrapper">
                                    <div class="recent-table table-responsive custom-scrollbar">
                                        <table class="table" id="order-history-table">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th> <span class="f-light f-w-600">Nama</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Tanggal</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Customer Name</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Harga</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Jumlah</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Total</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Aksi</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td>
                                                        <p class="c-o-light">Abacavir</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">02 Feb 2024 03:21:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Zakai Ramos</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$120.45 </p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">1.500 </p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$2.400</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="#"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td>
                                                        <p class="c-o-light">Abacavir</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">02 Feb 2024 03:21:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Zakai Ramos</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$120.45 </p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">1.500 </p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$2.400</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="#"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td>
                                                        <p class="c-o-light">Abacavir</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">02 Feb 2024 03:21:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Zakai Ramos</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$120.45 </p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">1.500 </p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$2.400</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="#"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#fill-view') }}">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                                    </use>
                                                                </svg></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/flat-pickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/flat-pickr/custom-flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/trash.js') }}"></script>
    <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
@endsection
