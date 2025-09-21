

<?php $__env->startSection('title', 'Mutasi'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/jquery.dataTables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select.bootstrap5.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/autoFill.bootstrap5.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/keyTable.bootstrap5.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/buttons.bootstrap5.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/fixedHeader.bootstrap5.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/responsive.bootstrap5.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/rowReorder.bootstrap5.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/flatpickr/flatpickr.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select/bootstrap-select.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Mutasi</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">

                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid product-report-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body px-0 pt-0">
                        <div class="top-body">
                            <div class="row common-f-start g-sm-3 g-2">
                                <div class="col-auto"><label class="form-label">Pilih Tanggal</label></div>
                                <div class="col-auto">
                                    <div class="range-dropdown" id="reportrange"><span></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="product-report">
                            <div class="recent-table table-responsive custom-scrollbar">
                                <table class="table" id="product-report-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th> <span class="c-o-light f-w-600">Product Name</span></th>
                                            <th> <span class="c-o-light f-w-600">SKU</span></th>
                                            <th> <span class="c-o-light f-w-600">Total Product Sold</span>
                                            </th>
                                            <th> <span class="c-o-light f-w-600">Price</span></th>
                                            <th> <span class="c-o-light f-w-600">Aksi</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="product-removes inbox-data">
                                            <td></td>
                                            <td><p class="c-o-light">Abacavir</p></td>
                                            <td><p class="c-o-light">02145YK796</p></td>
                                            <td><p class="c-o-light">02145YK796</p></td>
                                            <td><p class="c-o-light">02145YK796</p></td>
                                            <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="#"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="View"><svg>
                                                                    <use
                                                                        href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-view')); ?>">
                                                                    </use>
                                                                </svg></a><a class="square-white trash-3" href="#!"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-title="Delete"><svg>
                                                                    <use
                                                                        href="<?php echo e(asset('assets/svg/icon-sprite.svg#trash1')); ?>">
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
    </div><!-- Container-fluid Ends-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/dataTables.select.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/select.bootstrap5.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.autoFill.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/autoFill.bootstrap5.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.keyTable.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/keyTable.bootstrap5.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.buttons.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.bootstrap5.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/fixedHeader.bootstrap5.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.responsive.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/responsive.bootstrap5.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/rowReorder.bootstrap5.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatable-extension/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/flat-pickr/flatpickr.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/flat-pickr/custom-flatpickr.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/flat-pickr/moment.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/flat-pickr/custom-range-btn.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/modalpage/validation-modal.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select/bootstrap-select.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\si-dalio\resources\views/dinas/mutasi.blade.php ENDPATH**/ ?>