<div class="form theme-form">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label>Name<span>*</span></label>
                <input class="form-control border" type="text"  placeholder="Enter Role" name="name" value="<?php echo e(isset($role->name) ? $role->name : old('name')); ?>">
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label>Permissions<span>*</span></label>
                <div class="col-sm-12">
                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mb-2 card-wrapper border rounded-3 checkbox-checked">
                        <h6 class="sub-title"><?php echo e($module->name); ?>:</h6>
                        <div class="form-check-size rtl-input">
                            <?php
                                $permissions = @$role?->getAllPermissions()->pluck('name')->toArray() ?? [];
                                $isAllSelected = count(array_diff(array_values($module->actions), $permissions)) === 0;
                            ?>
                            <label class="d-block" for="all-<?php echo e($module->name); ?>">
                                <input type="checkbox" class="checkbox_animated select-all-permission select-all-for-<?php echo e($module->name); ?>" id="all-<?php echo e($module->name); ?>" value="<?php echo e($module->name); ?>" <?php echo e($isAllSelected ? 'checked' : ''); ?>><?php echo e(__('All')); ?>

                            </label>
                            <?php $__currentLoopData = $module->actions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action => $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <label class="d-block" for="<?php echo e($permission); ?>" data-action="<?php echo e($action); ?>" data-module="<?php echo e($module->name); ?>">
                                    <input type="checkbox" name="permissions[]" class="checkbox_animated module_<?php echo e($module->name); ?> module_<?php echo e($module->name); ?>_<?php echo e($action); ?>" value="<?php echo e($permission); ?>" id="<?php echo e($permission); ?>" <?php echo e(in_array($permission, $permissions) ? 'checked' : ''); ?>><?php echo e($action); ?>

                                </label>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php $__errorArgs = ['permissions'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="text-danger">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
    </div>
    <div class="card-footer pb-0">
        <div class="col-sm-9">
            <button class="btn btn-primary" type="submit">save</button>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\cuba-laravel\resources\views/admin/role/fields.blade.php ENDPATH**/ ?>