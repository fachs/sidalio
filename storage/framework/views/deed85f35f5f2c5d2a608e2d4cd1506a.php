<div class="action-div">
    <?php if(isset($data)): ?>
        <?php if(isset($detail)): ?>
            <?php if(isset($data->system_reserve) ? !$data->system_reserve : true): ?>
                <a href="<?php echo e(route($detail, $data)); ?>" class="eye-icon">
                    <i data-feather="eye"></i>
                <?php else: ?>
                    <a href="javascript:void(0)" class="lock-icon">
                        <i data-feather="lock"></i>
                    </a>
            <?php endif; ?>
        <?php endif; ?>

        <?php if(isset($edit)): ?>
            <?php if(isset($data->system_reserve) ? !$data->system_reserve : true): ?>
                <a href="<?php echo e(route($edit, $data)); ?>" class="edit-icon">
                    <i data-feather="edit"></i>
                <?php else: ?>
                    <a href="javascript:void(0)" class="lock-icon">
                        <i data-feather="lock"></i>
                    </a>
            <?php endif; ?>
        <?php endif; ?>

        <?php if(isset($delete)): ?>
            <?php if(isset($data->system_reserve) ? !$data->system_reserve : true): ?>
                <a href="#confirmationModal<?php echo e($data->id); ?>" data-bs-toggle="modal" class="delete-svg">
                    <i data-feather="trash-2" class="remove-icon delete-confirmation"></i>
                </a>
                <!-- Delete Confirmation -->
                <div class="modal fade" id="confirmationModal<?php echo e($data->id); ?>" tabindex="-1" role="dialog"
                    aria-labelledby="confirmationModalLabel<?php echo e($data->id); ?>" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi hapus</h5>
                                <button class="btn-close py-0" type="button" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h4 class="mb-3"><b> Apakah anda yakin menghapus data ini ?</b></h4>
                                <p>Data akan dihapus secara permanen. Anda tidak dapat membatalkan penghapusan.</p>
                            </div>
                            <div class="modal-footer">
                                <form action="<?php echo e(route($delete, $data->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button class="btn btn-primary" data-bs-dismiss="modal"
                                        type="button"><?php echo e(__('Tutup')); ?></button>
                                    <button class="btn btn-danger delete spinner-btn"
                                        type="submit"><?php echo e(__('Hapus')); ?></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>

    <?php endif; ?>
    <?php if(isset($toggle)): ?>
        <label class="switch">
            <input data-route="<?php echo e(route($route, $toggle->id)); ?>" data-id="<?php echo e($toggle->id); ?>"
                class="form-check-input toggle-status" type="checkbox" name="<?php echo e($nama); ?>"
                value="<?php echo e($value); ?>" <?php echo e($value ? 'checked' : ''); ?>

                <?php if($toggle->system_reserve): ?> disabled <?php endif; ?>>
            <span class="switch-state"></span>
        </label>
    <?php endif; ?>
</div>
<?php /**PATH C:\laragon\www\si-dalio\resources\views/admin/inc/action.blade.php ENDPATH**/ ?>