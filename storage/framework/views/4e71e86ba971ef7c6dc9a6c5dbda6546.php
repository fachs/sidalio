<?php $__env->startSection('title', 'FASKES'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/quill.snow.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>FASKES</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        
                    </ol>
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
                        <form class="row g-3 custom-input" id="pageForm" action="<?php echo e(route('admin.page.store')); ?>"
                            method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo $__env->make('admin.faskes.fields', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <!-- calendar js-->
    <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/editors/quill.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom-add-product5.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bookmark/jquery.validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom-validation/validation.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\si-dalio\resources\views/dinas/faskes/create.blade.php ENDPATH**/ ?>