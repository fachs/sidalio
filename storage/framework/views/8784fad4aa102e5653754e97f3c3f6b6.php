

<?php $__env->startSection('title', 'OBMHP'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/quill.snow.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/jquery.dataTables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select.bootstrap5.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/sweetalert2.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6"> 
                    <h3> Data Obat & BMHP</h3>
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
                                                                for="validationCategoryName">Nama Barang<span class="txt-danger">*</span></label><input
                                                                class="form-control" id="validationCategoryName"
                                                                type="text" placeholder="Masukkan nama barang"
                                                                required="">
                                                            <div class="invalid-feedback"> Mohon isi nama barang</div>
                                                            
                                                        </div>
                                                        <div class="col-md-6"><label class="form-label"
                                                                for="validationSlug">Kuantitas Minimum<span
                                                                    class="txt-danger">*</span></label><input
                                                                class="form-control" id="validationSlug" type="text"
                                                                placeholder="Masukkan kuantitas minimum" required="">
                                                            <div class="invalid-feedback"> Mohon isi kuantitas Minimum</div>
                                                            
                                                        </div>
                                                        <div class="col-md-6"><label class="form-label">Satuan<span class="txt-danger">*</span></label><select
                                                                class="form-select" aria-label="Select parent category">
                                                                <option selected=""></option>
                                                                <option value="Botol">Botol</option>
                                                                <option value="Tube">Tube</option>
                                                                <option value="Tablet">Tablet </option>
                                                                <option value="Pcs">Pcs</option>
                                                                <option value="Buah">Buah</option>
                                                                <option value="Vial">Vial</option>
                                                                <option value="Botol/60ml">Botol/60ml</option>
                                                                <option value="Pot">Pot</option>
                                                                <option value="Amp">Amp</option>
                                                                <option value="Box">Box</option>
                                                                <option value="Pack">Pack</option>
                                                                <option value="Test">Test</option>
                                                                <option value="Paket">Paket</option>
                                                                <option value="Kapsul">Kapsul</option>
                                                                <option value="Roll">Roll</option>
                                                                <option value="Kaplet">Kaplet</option>
                                                                <option value="Sachet">Sachet</option>
                                                                <option value="Set">Set</option>
                                                                <option value="Unit">Unit</option>
                                                                <option value="Galon">Galon</option>
                                                                <option value="Syringe">Syringe</option>
                                                                <option value="Buah">Buah</option>
                                                                <option value="Lusin">Lusin</option>
                                                                <option value="Bungkus">Bungkus</option>
                                                                <option value="Lembar">Lembar</option>
                                                                <option value="Blister">Blister</option>
                                                                <option value="Strip">Strip</option>
                                                                <option value="Pasang">Pasang</option>
                                                                <option value="1">1</option>
                                                            </select>
                                                            <div class="invalid-feedback"> Mohon pilih satuan</div>
                                                            
                                                        </div>
                                                        <div class="col-md-6"><label class="form-label">Kemasan<span
                                                                    class="txt-danger">*</span></label><select
                                                                class="form-select" aria-label="Select category type">
                                                                <option selected=""></option>
                                                                <option value="Box">Box</option>
                                                                <option value="Tablet">Tablet</option>
                                                                <option value="Botol">Botol</option>
                                                                <option value="500ml">500ml</option>
                                                                <option value="100ml">100ml</option>
                                                                <option value="Buah">Buah</option>
                                                                <option value="Vial">Vial</option>
                                                                <option value="Pot">Pot</option>
                                                                <option value="Sachet">Sachet</option>
                                                                <option value="Tube">Tube</option>
                                                                <option value="Bungkus">Bungkus</option>
                                                                <option value="Lembar">Lembar</option>
                                                                <option value="Buku">Buku</option>
                                                                <option value="Rim">Rim</option>
                                                                <option value="Liter">Liter</option>
                                                                <option value="Batang">Batang</option>
                                                                <option value="Reagen">Reagen</option>
                                                                <option value="BMHP">BMHP</option>
                                                                <option value="Psc">Psc</option>
                                                                <option value="100">100</option>
                                                                <option value="1">1</option>
                                                                <option value="410">410</option>
                                                                <option value="20">20</option>
                                                                <option value="-">-</option>
                                                            </select>
                                                            <div class="invalid-feedback"> Mohon pilih kemasan</div>
                                                        </div>
                                                        <div class="col-md-6"><label class="form-label">Golongan<span class="txt-danger">*</span></label><select
                                                                class="form-select" aria-label="Select category status">
                                                                <option selected=""></option>
                                                                <option value="O">O</option>
                                                                <option value="B">B</option>
                                                                <option value="-">-</option>
                                                            </select>
                                                            <div class="invalid-feedback"> Mohon pilih golongan</div>
                                                            
                                                        </div>
                                                        <div class="col-md-6"><label class="form-label">Lokasi Penyimpanan<span class="txt-danger">*</span></label><select
                                                                class="form-select" aria-label="Select category status">
                                                                <option selected=""></option>
                                                                <option value="(TB)">(TB)</option>
                                                                <option value="900 IV">900 IV</option>
                                                                <option value="A">A</option>
                                                                <option value="A RAK KAYU">A RAK KAYU</option>
                                                                <option value="B">B</option>
                                                                <option value="BELUM D KIRIM">BELUM D KIRIM</option>
                                                                <option value="C">C</option>
                                                                <option value="D">D</option>
                                                                <option value="D + KARTU">D + KARTU</option>
                                                                <option value="DEPAN ALKES">DEPAN ALKES</option>
                                                                <option value="DEPAN KULKAS">DEPAN KULKAS</option>
                                                                <option value="DEPAN RAK XXV">DEPAN RAK XXV</option>
                                                                <option value="DEPAN SHOWCASE">DEPAN SHOWCASE</option>
                                                                <option value="DEPAN TANGGA LT II">DEPAN TANGGA LT II</option>
                                                                <option value="DI ATAS OBJECK GLAS">DI ATAS OBJECK GLAS</option>
                                                                <option value="E">E</option>
                                                                <option value="F">F</option>
                                                                <option value="F + KARTU">F + KARTU</option>
                                                                <option value="I">I</option>
                                                                <option value="I - J">I - J</option>
                                                                <option value="I BAWAH">I BAWAH</option>
                                                                <option value="II">II</option>
                                                                <option value="III">III</option>
                                                                <option value="IV">IV</option>
                                                                <option value="IX">IX</option>
                                                                <option value="K">K</option>
                                                                <option value="KULKAS">KULKAS</option>
                                                                <option value="KULKAS VAKSIN">KULKAS VAKSIN</option>
                                                                <option value="LEMARI">LEMARI</option>
                                                                <option value="LEMARI 1">LEMARI 1</option>
                                                                <option value="LEMARI 2">LEMARI 2</option>
                                                                <option value="L-M-N-O-P-Q-A kayu">L-M-N-O-P-Q-A kayu</option>
                                                                <option value="N">N</option>
                                                                <option value="N-O-P (DID)">N-O-P (DID)</option>
                                                                <option value="O">O</option>
                                                                <option value="P">P</option>
                                                                <option value="PALET">PALET</option>
                                                                <option value="PALET (SEBELAH RAK I)">PALET (SEBELAH RAK I)</option>
                                                                <option value="PALET 1">PALET 1</option>
                                                                <option value="PALET 1 (SEBELAH PARASET SYR LAMA)">PALET 1 (SEBELAH PARASET SYR LAMA)</option>
                                                                <option value="PALET 1 + kartu">PALET 1 + kartu</option>
                                                                <option value="PALET 1 BELAKANG">PALET 1 BELAKANG</option>
                                                                <option value="PALET 1 DEKAT NACL">PALET 1 DEKAT NACL</option>
                                                                <option value="PALET 1 DEKAT PARASET SYR">PALET 1 DEKAT PARASET SYR</option>
                                                                <option value="PALET 2">PALET 2</option>
                                                                <option value="PALET 2 BAWAH AC">PALET 2 BAWAH AC</option>
                                                                <option value="PALET 2 BELAKANG">PALET 2 BELAKANG</option>
                                                                <option value="PALET 2 DEKAT ANTASID SYR">PALET 2 DEKAT ANTASID SYR</option>
                                                                <option value="PALET 2 DEKAT TANGGA">PALET 2 DEKAT TANGGA</option>
                                                                <option value="PALET 2 DEPAN AC">PALET 2 DEPAN AC</option>
                                                                <option value="PALET 2 SEBELAH NACL">PALET 2 SEBELAH NACL</option>
                                                                <option value="Palet atas">palet atas</option>
                                                                <option value="PALET ATAS + KARTU">PALET ATAS + KARTU</option>
                                                                <option value="PALET BAWAH TANGGA">PALET BAWAH TANGGA</option>
                                                                <option value="PALET DEPAN">PALET DEPAN</option>
                                                                <option value="PALET DEPAN KULKAS">PALET DEPAN KULKAS</option>
                                                                <option value="palet depan rak X">palet depan rak X</option>
                                                                <option value="PALET DEPAN TANGGA">PALET DEPAN TANGGA</option>
                                                                <option value="PALET ETAS">PALET ETAS</option>
                                                                <option value="PALET R.DEPAN">PALET R.DEPAN</option>
                                                                <option value="Palet rak 8">Palet rak 8</option>
                                                                <option value="PALET RAK I">PALET RAK I</option>
                                                                <option value="PALET RAK VIII">PALET RAK VIII</option>
                                                                <option value="PALET SEBELAH PCT SYR">PALET SEBELAH PCT SYR</option>
                                                                <option value="PALET SEBELAH RAK 8">PALET SEBELAH RAK 8</option>
                                                                <option value="PALET SEBELAH RAK VIII">PALET SEBELAH RAK VIII</option>
                                                                <option value="Palet sebelah rax xxv">Palet sebelah rax xxv</option>
                                                                <option value="palet XXI">palet XXI</option>
                                                                <option value="PALET2">PALET2</option>
                                                                <option value="PALET2 BELAKANG">PALET2 BELAKANG</option>
                                                                <option value="R. VAKSIN">R. VAKSIN</option>
                                                                <option value="R.ALKES">R.ALKES</option>
                                                                <option value="R.DINAS">R.DINAS</option>
                                                                <option value="R.DINAS ( R2-R3 )">R.DINAS ( R2-R3 )</option>
                                                                <option value="R.DINAS (R TENGAH)">R.DINAS (R TENGAH)</option>
                                                                <option value="R.DINAS (R1)">R.DINAS (R1)</option>
                                                                <option value="R.DINAS (R3)">R.DINAS (R3)</option>
                                                                <option value="R.Vaksin">R.Vaksin</option>
                                                                <option value="RAK DEPAN ALKES">RAK DEPAN ALKES</option>
                                                                <option value="RAK IV">RAK IV</option>
                                                                <option value="RAK XXIII">RAK XXIII</option>
                                                                <option value="Refri No 1">Refri No 1</option>
                                                                <option value="Refri No 2">Refri No 2</option>
                                                                <option value="Refri No 8">Refri No 8</option>
                                                                <option value="Ruang vaksin">Ruang vaksin</option>
                                                                <option value="RUMDIN DINAS">RUMDIN DINAS</option>
                                                                <option value="Sebelah kulkas">Sebelah kulkas</option>
                                                                <option value="SEBELAH SHOWCASE">SEBELAH SHOWCASE</option>
                                                                <option value="SHOWCASE">SHOWCASE</option>
                                                                <option value="V">V</option>
                                                                <option value="VI">VI</option>
                                                                <option value="VI BAWAH">VI BAWAH</option>
                                                                <option value="VII">VII</option>
                                                                <option value="VIII">VIII</option>
                                                                <option value="X">X</option>
                                                                <option value="XI">XI</option>
                                                                <option value="XI BAWAH">XI BAWAH</option>
                                                                <option value="XII">XII</option>
                                                                <option value="XII (HIV)">XII (HIV)</option>
                                                                <option value="XII (TB)">XII (TB)</option>
                                                                <option value="XIII">XIII</option>
                                                                <option value="XIV">XIV</option>
                                                                <option value="XIX">XIX</option>
                                                                <option value="XV">XV</option>
                                                                <option value="XVI">XVI</option>
                                                                <option value="XVII">XVII</option>
                                                                <option value="XVIII">XVIII</option>
                                                                <option value="XX">XX</option>
                                                                <option value="XXI">XXI</option>
                                                                <option value="XXI PROG">XXI PROG</option>
                                                                <option value="XXII">XXII</option>
                                                                <option value="XXIII">XXIII</option>
                                                                <option value="XXIV">XXIV</option>
                                                                <option value="XXV">XXV</option>
                                                                <option value="XXVI">XXVI</option>
                                                            </select>
                                                            <div class="invalid-feedback"> Mohon isi lokasi penyimpanan</div>
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
                                            <th> <span class="c-o-light f-w-600">Satuan</span></th>
                                            <th> <span class="c-o-light f-w-600">QTY Min</span></th>
                                            <th> <span class="c-o-light f-w-600">Kemasan</span></th>
                                            <th> <span class="c-o-light f-w-600">Golongan</span></th>
                                            <th> <span class="c-o-light f-w-600">Lokasi</span></th>
                                            <th> <span class="c-o-light f-w-600">Aksi</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td>
                                                <div class="product-names">
                                                    <p>Amoksisilin 500mg</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="f-light">Tablet</p>
                                            </td>
                                            <td> <p class="f-light">525</p>
                                            </td>
                                            <td> <p class="f-light">-</p>
                                            </td>
                                            <td> <p class="f-light">O</p>
                                            </td>
                                            <td> <p class="f-light">I</p>
                                            </td>
                                            <td>
                                                <div class="common-align gap-2 justify-content-start"> <a
                                                        class="square-white" href="#!"><svg>
                                                            <use
                                                                href="<?php echo e(asset('assets/svg/icon-sprite.svg#edit-content')); ?>">
                                                            </use>
                                                        </svg></a><a class="square-white trash-3" href="#!"><svg>
                                                            <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#trash1')); ?>">
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/dataTables.select.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/select.bootstrap5.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/sweet-alert/sweetalert.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/trash_popup.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/editors/quill.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom_category.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/modalpage/validation-modal.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\si-dalio\resources\views/dinas/obmhp.blade.php ENDPATH**/ ?>