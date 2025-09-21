<?php $__env->startSection('title', 'Coming Simple'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <!-- Page Body Start-->
    <div class="container-fluid p-0">
        <div class="comingsoon basic-comingsoon">
            <div class="comingsoon-inner text-center"><img class="for-light" src="<?php echo e(asset('assets/images/other-images/logo-login.png')); ?>"
                    alt=""><img class="for-dark" src="<?php echo e(asset('assets/images/other-images/logo-light.png')); ?>" alt="">
                <h5>WE ARE COMING SOON</h5>
                <div class="countdown" id="clock-arrival" data-hours="1" data-minutes="2" data-seconds="3">
                    <ul>
                        <li><span class="days time"></span><span class="title">Days</span></li>
                        <li><span class="hours time"></span><span class="title">Hours</span></li>
                        <li><span class="minutes time"></span><span class="title">Minutes</span></li>
                        <li><span class="seconds time"></span><span class="title">Seconds</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.comingsoon_layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\cuba-laravel\resources\views/coming_soon/comingsoon.blade.php ENDPATH**/ ?>