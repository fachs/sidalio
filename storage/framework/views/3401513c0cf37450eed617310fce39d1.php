

<?php $__env->startSection('title', 'Order History'); ?>

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
                    <h3>Order History</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.default_dashboard')); ?>"> <svg class="stroke-icon">
                                    <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ecommerce</li>
                        <li class="breadcrumb-item active"> Order History</li>
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
                            <div class="col-xl col-md-6"><label class="form-label">Payment
                                    Status</label><select class="form-select">
                                    <option selected="">Completed</option>
                                    <option value="1">Pending</option>
                                    <option value="2">Failed</option>
                                </select></div>
                            <div class="col-xl col-md-6"><label class="form-label">Payment
                                    Methods</label><select class="form-select">
                                    <option selected="">Paypal</option>
                                    <option value="1">COD</option>
                                    <option value="2">Bank transfer</option>
                                    <option value="3">Credit card</option>
                                </select></div>
                            <div class="col d-flex justify-content-start align-items-center m-t-40"><a
                                    class="btn btn-primary f-w-500" href="#!">Submit</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card heading-space">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5>New Orders</h5>
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
                                                    <th> <span class="f-light f-w-600">Nama Barang</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Expired Date</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Customer Name</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Harga</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Status</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Sisa Stok</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Satuan</span>
                                                    </th>
                                                    <th> <span class="f-light f-w-600">Aksi</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="inbox-data">
                                                    <td></td>
                                                    <td> <p class="c-o-light">ABACAVIR (ABC) 300 MG</p></td>
                                                    <td>
                                                        <p class="c-o-light">02 Feb 2027</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Zakai Ramos</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$120.45 </p>
                                                    </td>
                                                    <td> <span class="badge badge-light-danger">Failed
                                                        </span></td>
                                                    <td>
                                                        <p class="c-o-light">13</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Botol</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="<?php echo e(route('admin.order_details')); ?>"
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
                                                    <td> <p class="c-o-light">ACYCLOVIR CREAM</p></td>
                                                    <td>
                                                        <p class="c-o-light">12 Mar 2028</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Daxton Norris</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">$478.14 </p>
                                                    </td>
                                                    <td> <span class="badge badge-light-warning">Pending</span>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">18</p>
                                                    </td>
                                                    <td>
                                                        <p class="c-o-light">Tube</p>
                                                    </td>
                                                    <td>
                                                        <div class="common-align gap-2 justify-content-start">
                                                            <a class="square-white" href="<?php echo e(route('admin.order_details')); ?>"
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

<?php echo $__env->make('layouts.simple.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\cuba-laravel\resources\views/dinas/dinas_so.blade.php ENDPATH**/ ?>