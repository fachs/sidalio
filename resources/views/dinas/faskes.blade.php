@extends('layouts.simple.master')

@section('title', 'FASKES')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/quill.snow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/jquery.dataTables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/select.bootstrap5.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/sweetalert2.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6"> 
                    <h3> Data Fasilitas Kesehatan</h3>
                </div>

            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid e-category">
        <div class="row">
            
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header card-no-border text-end">
                        <div class="card-header-right-icon"><a class="btn btn-primary f-w-500" href="#!"
                                data-bs-toggle="modal" data-bs-target="#dashboard8"><i class="fa fa-plus pe-2"></i>
                                Tambah Data</a>
                            <div class="modal fade" id="dashboard8" tabindex="-1" aria-labelledby="dashboard8"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content category-popup">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modaldashboard">Tambah Data</h5>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-0 custom-input">
                                            <div class="text-start">
                                                <div class="p-20">
                                                    <form class="row g-3 needs-validation" novalidate="">
                                                        <div class="col-md-12"><label class="form-label"
                                                                for="validationCategoryName">Nama Faskes<span class="txt-danger">*</span></label><input
                                                                class="form-control" id="validationCategoryName"
                                                                type="text" placeholder="Masukkan nama Faskes"
                                                                required="">
                                                            <div class="invalid-feedback"> Mohon isi nama faskes</div>
                                                        </div>
                                                        <div class="col-md-6"><label class="form-label"
                                                                for="validationSlug">Kepala Faskes<span
                                                                    class="txt-danger">*</span></label><input
                                                                class="form-control" id="validationSlug" type="text"
                                                                placeholder="Masukkan kepala faskes" required="">
                                                            <div class="invalid-feedback"> Mohon isi kepala faskes</div>
                                                        </div>
                                                        <div class="col-md-6"><label class="form-label"
                                                                for="validationSlug">Bagian Farmasi<span
                                                                    class="txt-danger">*</span></label><input
                                                                class="form-control" id="validationSlug" type="text"
                                                                placeholder="Masukkan bagian farmasi" required="">
                                                            <div class="invalid-feedback"> Mohon isi bagian farmasi</div>
                                                        </div>
                                                        <div class="col-md-6"><label class="form-label"
                                                                for="validationSlug">Telepon/Kontak<span
                                                                    class="txt-danger">*</span></label><input
                                                                class="form-control" id="validationSlug" type="text"
                                                                placeholder="Masukkan telepon/kontak faskes" required="">
                                                            <div class="invalid-feedback"> Mohon isi telepon/kontak faskes</div>
                                                        </div>
                                                        <div class="col-md-6"><label class="form-label"
                                                                for="validationSlug">Alamat<span
                                                                    class="txt-danger">*</span></label><input
                                                                class="form-control" id="validationSlug" type="text"
                                                                placeholder="Masukkan alamat faskes" required="">
                                                            <div class="invalid-feedback"> Mohon isi alamat faskes</div>
                                                        </div>
                                                        <div class="col-md-12 d-flex justify-content-end">
                                                            <button class="btn btn-primary" type="submit">Simpan</button>
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
                    <div class="card-body px-0 pt-0">
                        <div class="list-product list-category">
                            <div class="recent-table table-responsive custom-scrollbar">
                                <table class="table" id="project-status">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th> <span class="c-o-light f-w-600">Nama</span></th>
                                            <th> <span class="c-o-light f-w-600">Kepala</span></th>
                                            <th> <span class="c-o-light f-w-600">Bagian Farmasi</span></th>
                                            <th> <span class="c-o-light f-w-600">Telepon</span></th>
                                            <th> <span class="c-o-light f-w-600">Alamat</span></th>
                                            <th> <span class="c-o-light f-w-600">Aksi</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <p>Puskesmas Sukabumi</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">dr. Rizky Ridho</p>
                                            </td>
                                            <td> <p class="f-light">Apt. Jay, S.Farm</p>
                                            </td>
                                            <td> <p class="f-light">-</p>
                                            </td>
                                            <td> <p class="f-light">O</p>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="{{ asset('assets/svg/icon-sprite.svg#edit-content') }}">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="{{ asset('assets/svg/icon-sprite.svg#trash1') }}">
                                                            </use>
                                                        </svg></a></div>
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
    </div><!-- Container-fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/dataTables.select.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/select.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/trash_popup.js') }}"></script>
    <script src="{{ asset('assets/js/editors/quill.js') }}"></script>
    <script src="{{ asset('assets/js/custom_category.js') }}"></script>
    <script src="{{ asset('assets/js/modalpage/validation-modal.js') }}"></script>
@endsection
