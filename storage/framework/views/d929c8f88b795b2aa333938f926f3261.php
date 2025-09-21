<!-- Page Sidebar Start-->
<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper"><a href="<?php echo e(route('admin.default_dashboard')); ?>"><img class="img-fluid for-light"
                    src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""><img class="img-fluid for-dark"
                    src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt=""></a>
            <div class="back-btn"><i class="fa-solid fa-angle-left"></i></div>

        </div>
        <div class="logo-icon-wrapper"><a href="<?php echo e(route('admin.default_dashboard')); ?>"><img class="img-fluid"
                    src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="<?php echo e(route('admin.default_dashboard')); ?>"><img class="img-fluid"
                                src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa-solid fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="">MENU DINAS KESEHATAN</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.obmhp')); ?>"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-task')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-task')); ?>"> </use>
                            </svg><span>Obat & BMHP</span></a></li>
                    <li class="sidebar-list"><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.faskes')); ?>"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-task')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-task')); ?>"> </use>
                            </svg><span>FASYANKES</span></a></li>
                    <li class="sidebar-list"><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.moned')); ?>"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-task')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-task')); ?>"> </use>
                            </svg><span>Monitor ED</span></a></li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-widget')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-widget')); ?>"></use>
                            </svg><span class="lan">Penerimaan</span></a>
                        <ul class="sidebar-submenu">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role.index')): ?>
                                <li><a href="<?php echo e(route('admin.penerimaan_tambah')); ?>">Tambah Penerimaan</a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user.index')): ?>
                                <li><a  href="<?php echo e(route('admin.penerimaan')); ?>">Data Penerimaan</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-widget')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-widget')); ?>"></use>
                            </svg><span class="lan">Stock Opname (SO)</span></a>
                        <ul class="sidebar-submenu">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role.index')): ?>
                                <li><a href="<?php echo e(route('admin.dinas_so_tambah')); ?>">Tambah Stock Opname</a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user.index')): ?>
                                <li><a  href="<?php echo e(route('admin.dinas_so')); ?>">Data Stock Opname</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                            href="javascript:void(0)"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-widget')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-widget')); ?>"></use>
                            </svg><span class="lan">Mutasi</span></a>
                        <ul class="sidebar-submenu">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role.index')): ?>
                                <li><a href="<?php echo e(route('admin.mutasi_tambah')); ?>">Tambah Mutasi</a></li>
                            <?php endif; ?>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user.index')): ?>
                                <li><a  href="<?php echo e(route('admin.mutasi')); ?>">Data Mutasi</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
        
                    
                       <li class="sidebar-list"><a
                            class="sidebar-title"><div> </div></a></li>
                            <li class="sidebar-list"><a
                            class="sidebar-title"><div> </div></a></li>
                </ul>

            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->
<?php /**PATH C:\laragon\www\cuba-laravel\resources\views/layouts/simple/sidebar.blade.php ENDPATH**/ ?>