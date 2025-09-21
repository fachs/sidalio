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
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.faskes.index')); ?>"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-task')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-task')); ?>"> </use>
                            </svg><span>FASKES</span></a></li>
                    <li class="sidebar-list"><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.obmhp.index')); ?>"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-task')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-task')); ?>"> </use>
                            </svg><span>Obat & BMHP</span></a></li>
                    <li class="sidebar-list"><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.penerimaan.index')); ?>"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-task')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-task')); ?>"> </use>
                            </svg><span>Penerimaan</span></a>
                        </li>
                    <li class="sidebar-list"><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.moned.index')); ?>"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-task')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-task')); ?>"> </use>
                            </svg><span>Monitor SO & ED</span></a></li>
                                   
                    <li class="sidebar-list"><a
                            class="sidebar-link sidebar-title link-nav" href="<?php echo e(route('admin.mutasi.index')); ?>"><svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-task')); ?>"></use>
                            </svg><svg class="fill-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#fill-task')); ?>"> </use>
                            </svg><span>Mutasi</span></a>
                        </li>
                    
                    
                       {{-- <li class="sidebar-list"><a
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
<?php /**PATH C:\laragon\www\si-dalio\resources\views/layouts/simple/sidebar.blade.php ENDPATH**/ ?>