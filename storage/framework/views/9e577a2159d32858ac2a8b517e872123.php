

<?php $__env->startSection('title', 'Penerimaan Baru'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select/bootstrap-select.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        Tambah Penerimaaan</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.default_dashboard')); ?>">
                                <svg class="stroke-icon">
                                    <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Penerimaan</li>
                        <li class="breadcrumb-item active">Tambah</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card create-project-form custom-input">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form class="row g-3 needs-validation" novalidate="">
                                    <div class="col-xxl-4 col-md-6">
                                        <label class="form-label" for="projectPriority">Nama Obat/BMHP</label>
                                        <select class="form-select" id="projectPriority" required="">
                                            <option selected="">--Pilih--</option>
                                            <option value="1">CYCLOSERINE KAPSUL 250 MG</option>
                                            <option value="2">LINEZOLID TABLET 600 MG</option>
                                            <option value="3">MOXIFLOXACIN TABLET 400 MG</option>
                                            <option value="4">PRETOMANID TABLET 200 MG</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid priority</div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6">
                                        <label class="form-label" for="projectPriority">Nama PBF</label>
                                        <select class="form-select" id="projectPriority" required="">
                                            <option selected="">--Pilih--</option>
                                             <option value="1">DINKES PROVINSI</option>
                                            <option value="2">KEMENKES</option>
                                            <option value="3">KIMIA FARMA</option>
                                            <option value="4">PT ENSEVAL</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid priority</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label" for="projectPriority">Jenis Dana</label>
                                        <select class="form-select" id="projectPriority" required="">
                                            <option selected="">--Pilih--</option>
                                            <option value="1">HIBAH</option>
                                            <option value="2">BELANJA</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid priority</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label" for="projectPriority">Sumber Dana</label>
                                        <select class="form-select" id="projectPriority" required="">
                                            <option selected="">--Pilih--</option>
                                            <option value="1">DAK</option>
                                            <option value="2">DID</option>
                                            <option value="2">APBD1</option>
                                            <option value="2">APBD2</option>
                                            <option value="2">PROGRAM</option>
                                            <option value="2">LAINNYA</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid priority</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label" for="projectPriority">Kode Rekening</label>
                                        <select class="form-select" id="projectPriority" required="">
                                            <option selected="">--Pilih--</option>
                                            <option value="1">5.1.02.01.0037</option>
                                            <option value="2">5.1.02.01.0012</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid priority</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label" for="projectPriority">Kode Program</label>
                                        <select class="form-select" id="projectPriority" required="">
                                            <option selected="" disabled="" value="">Choose...</option>
                                            <option value="0">-</option>
                                            <option value="1">ATM</option>
                                            <option value="2">VAKSIN</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid priority</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label">Expired Date (ED)</label>
                                        <input class="form-control" type="date" required="">
                                        <div class="invalid-feedback">Please select your end date</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label">Tanggal Terima</label>
                                        <input class="form-control" type="date" required="">
                                        <div class="invalid-feedback">Please select your end date</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label" for="projectCost">No. Beli</label>
                                        <input class="form-control" id="projectCost" type="text"
                                            placeholder="Project cost" required="">
                                        <div class="invalid-feedback">Please enter a project cost</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label" for="projectCost">SBBK Provinsi</label>
                                        <input class="form-control" id="projectCost" type="text"
                                            placeholder="Project cost" required="">
                                        <div class="invalid-feedback">Please enter a project cost</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label" for="projectCost">No Batch</label>
                                        <input class="form-control" id="projectCost" type="text"
                                            placeholder="Project cost" required="">
                                        <div class="invalid-feedback">Please enter a project cost</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label" for="projectCost">Jumlah</label>
                                        <input class="form-control" id="projectCost" type="text"
                                            placeholder="Project cost" required="">
                                        <div class="invalid-feedback">Please enter a project cost</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label" for="projectCost">Harga</label>
                                        <input class="form-control" id="projectCost" type="text"
                                            placeholder="Project cost" required="" disabled>
                                        <div class="invalid-feedback">Please enter a project cost</div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <label class="form-label" for="projectCost">Total Harga</label>
                                        <input class="form-control" id="projectCost" type="text"
                                            placeholder="Project cost" required="" disabled>
                                        <div class="invalid-feedback">Please enter a project cost</div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="common-flex justify-content-end">
                                            <button class="btn btn-primary" type="submit">Simpan </button>
                                            <button class="btn btn-secondary">Batal</button>
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
    <!-- Container-fluid Ends-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select/bootstrap-select.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\si-dalio\resources\views/dinas/penerimaan_tambah.blade.php ENDPATH**/ ?>