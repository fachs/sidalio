<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/swiper/swiper-bundle.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/jquery.dataTables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select.bootstrap5.css')); ?>">
<?php $__env->stopSection(); ?>

<?php
    use App\Models\Faskes;
    use App\Models\Obmhp;
    use App\Models\Penerimaan;
    use App\Models\Mutasi;

    $faskes = Faskes::count();
    $obmhp = Obmhp::count();
    $penerimaan = Penerimaan::count();
    // $penerimaans = Penerimaan::all();
    $mutasi = Mutasi::count();
    $jumlah = $penerimaan - $mutasi;

    // $targetDate = Carbon::createFromFormat('Y-m-d', $row->exp_date);
    // $today = Carbon::today();
    // $daysRemaining = $today->diffInDays($targetDate, false);

    // $countdownUnder60 = $penerimaans->filter(function($item) {
    //     return $item->countdown < 60 && $item->countdown >= 0; // opsional: tidak menghitung yang sudah lewat
    // })->count();

?>

<?php $__env->startSection('main_content'); ?>
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid dashboard-12">
        <div class="row">
            <div class="col-xxl-6 box-col-12">
                <div class="row small-stats">
                    <div class="col-md-4 col-sm-6">
                        <div class="card widget-hover">
                            <div class="card-body">
                                <div class="common-space">
                                    <div> <span class="c-o-light f-w-500">Jumlah Faskes</span>
                                        <h4 class="counter" data-target="<?php echo e($faskes); ?>"><?php echo e($faskes); ?></h4>
                                    </div>
                                    <div class="project-state bg-light-primary"><span
                                            class="font-secondary f-40 f-w-500"><i class="fa-regular fa-hospital"></i></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card widget-hover">
                            <div class="card-body">
                                <div class="common-space">
                                    <div> <span class="c-o-light f-w-500">Jumlah Obat & BMHP</span>
                                        <h4 class="counter" data-target="<?php echo e($jumlah); ?>"><?php echo e($jumlah); ?></h4>
                                    </div>
                                    <div class="project-state bg-light-primary"><span
                                            class="font-success f-40 f-w-500"><i class="fa-solid fa-medkit"></i></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-xxl-6 box-col-12">
                <div class="row small-stats">
                    <div class="col-md-4 col-sm-6">
                        <div class="card widget-hover">
                            <div class="card-body">
                                <div class="common-space">
                                    <div> <span class="c-o-light f-w-500">Penerimaan</span>
                                        <h4 class="counter" data-target="<?php echo e($penerimaan); ?>"><?php echo e($penerimaan); ?></h4>
                                    </div>
                                    <div class="project-state bg-light-primary"><span
                                            class="font-info f-40 f-w-500"><i class="fa-solid fa-cubes"></i></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card widget-hover">
                            <div class="card-body">
                                <div class="common-space">
                                    <div> <span class="c-o-light f-w-500">Mutasi</span>
                                        <h4 class="counter" data-target="<?php echo e($mutasi); ?>"><?php echo e($mutasi); ?></h4>
                                    </div>
                                    <div class="project-state bg-light-primary"><span
                                            class="font-primary f-40 f-w-500"><i class="fa-solid fa-truck"></i></span></div>
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
    <script src="<?php echo e(asset('assets/js/chart/apex-chart/apex-chart.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/chart/apex-chart/stock-prices.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/dataTables.select.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/select.bootstrap5.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/dashboard/dashboard_12.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/height-equal.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\si-dalio\resources\views/dashboards/index.blade.php ENDPATH**/ ?>