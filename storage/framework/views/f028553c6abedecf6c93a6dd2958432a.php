<?php $__env->startSection('title', 'Add User'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Add User</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('admin.default_dashboard')); ?>"> <svg class="stroke-icon">
                                    <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active"> Add User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div><!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="edit-profile">
                <div class="col-xl-8">
                    <form class="card">
                        <div class="card-header">
                            <h5 class="card-title">Tambah Penerimaan Baru</h5>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <div class="row custom-input">
                                <div class="col-xxl-5 box-col-12">
                                    <div class="mb-3"><label class="form-label" for="companyName">Company</label><input
                                            class="form-control" id="companyName" type="text" placeholder="Company">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-3 box-col-6">
                                    <div class="mb-3"><label class="form-label"
                                            for="customUsername">Username</label><input class="form-control"
                                            id="customUsername" type="text" placeholder="Username"></div>
                                </div>
                                <div class="col-sm-6 col-xxl-4 box-col-6">
                                    <div class="mb-3"><label class="form-label" for="customAddress">Email
                                            Address</label><input class="form-control" id="customAddress" type="email"
                                            placeholder="Email"></div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3"><label class="form-label" for="customFirstName">First
                                            Name</label><input class="form-control" id="customFirstName" type="text"
                                            placeholder="Company"></div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="mb-3"><label class="form-label" for="customLastName">Last
                                            Name</label><input class="form-control" id="customLastName" type="text"
                                            placeholder="Last name"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3"><label class="form-label" for="customAddress">Address</label>
                                        <textarea class="form-control" id="customAddress" type="text" rows="2.5" placeholder="Home address"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-4 box-col-6">
                                    <div class="mb-3"><label class="form-label" for="customCity">City</label><input
                                            class="form-control" id="customCity" type="text" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-3 box-col-6">
                                    <div class="mb-3"><label class="form-label" for="customPostalCode">Postal
                                            Code</label><input class="form-control" id="customPostalCode" type="number"
                                            placeholder="Postal code"></div>
                                </div>
                                <div class="col-xxl-5 box-col-12">
                                    <div class="mb-3"><label class="form-label"
                                            for="customCountry">Country</label><select class="form-control btn-square"
                                            id="customCountry">
                                            <option value="0">--Select--</option>
                                            <option value="1">Germany</option>
                                            <option value="2">Canada</option>
                                            <option value="3">Usa</option>
                                            <option value="4">Aus</option>
                                        </select></div>
                                </div>
                                <div class="col-md-12">
                                    <div><label class="form-label" for="aboutMeDesc">About
                                            Me</label>
                                        <textarea class="form-control" id="aboutMeDesc" rows="4" placeholder="Enter about your description"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end"><button class="btn btn-primary" type="submit">Update
                                Profile</button></div>
                    </form>
                </div>

        </div>
    </div><!-- Container-fluid Ends-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\cuba-laravel\resources\views/maps/map_js.blade.php ENDPATH**/ ?>