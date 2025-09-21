

<?php $__env->startSection('title', 'Monitor Expired Date'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/jquery.dataTables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select.bootstrap5.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/flatpickr/flatpickr.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Monitor Expired Date</h3>
                </div>
                <div class="col-sm-6">
                    
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
                            <div class="col-xl col-md-6"> <label class="form-label" for="datetime-local">Dari: </label>
                                <div class="input-group flatpicker-calender"><input class="form-control" id="datetime-local"
                                        placeholder="dd/mm/yyyy"></div>
                            </div>
                            <div class="col-xl col-md-6"> <label class="form-label" for="datetime-local3">Ke: </label>
                                <div class="input-group flatpicker-calender"><input class="form-control"
                                        id="datetime-local3" placeholder="dd/mm/yyyy"></div>
                            </div>
                            <div class="col-xl col-md-6"><label class="form-label">Lokasi</label><select class="form-select">
                                    <option selected="">Completed</option>
                                    <option value="1">Pending</option>
                                    <option value="2">Failed</option>
                                </select></div>
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
                            <h5>Data ED Obat</h5>
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
                                                    <th> <span class="f-light f-w-600">Nama Obat</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Expired Date</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Menuju ED</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Menuju ED</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">No Batch</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Lokasi</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Aksi</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td>
                                                        <p class="c-o-light">Amoxicilin</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">02 Feb 2024 03:21:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Zakai Ramos</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-warning">50 Hari
                                                        </span></td>
                                                    <td>
                                                        <p class="c-o-light">13AXKSO3</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">COD</p>
                                                    </td>
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
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td>
                                                        <p class="c-o-light">Amoxicilin</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">02 Feb 2024 03:21:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Zakai Ramos</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-warning">50 Hari
                                                        </span></td>
                                                    <td>
                                                        <p class="c-o-light">13AXKSO3</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">COD</p>
                                                    </td>
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
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td>
                                                        <p class="c-o-light">Amoxicilin</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">02 Feb 2024 03:21:PM</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Zakai Ramos</p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">27 Hari
                                                        </span></td>
                                                    <td>
                                                        <p class="c-o-light">13AXKSO3</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">COD</p>
                                                    </td>
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
    <script src="<?php echo e(asset('assets/js/flat-pickr/flatpickr.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/flat-pickr/custom-flatpickr.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/trash.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\si-dalio\resources\views/dinas/moned.blade.php ENDPATH**/ ?>