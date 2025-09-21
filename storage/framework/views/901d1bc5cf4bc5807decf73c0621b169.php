<div class="form theme-form">
    <div class="mt-3">
        <label class="form-label" for="">Tag Name<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($tag->name) ? $tag->name : old('name')); ?>" placeholder="Enter Tag Name" name="name">
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
    <div class="mt-3">
        <label class="form-label" for="">Description</label>
        <textarea class="form-control" name="description" placeholder="Enter Description"><?php echo e(isset($tag->description) ? $tag->description : old('description')); ?></textarea>
        <?php $__errorArgs = ['description'];
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
    <div class="mt-3">
        <label class="form-label" for="">Status</label>
        <select class="form-select js-example-basic-single" name="status">
            <option value="1" <?php echo e(!($tag->status ?? 1) == 0 ? 'selected' : ''); ?>><?php echo e(__('Active')); ?></option>
            <option value="0" <?php echo e(($tag->status ?? 1) == 0 ? 'selected' : ''); ?>><?php echo e(__('Deactive')); ?></option>
        </select>
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary"><?php echo e(__('save')); ?></button>
    </div>
</div>

<?php /**PATH C:\laragon\www\si-dalio\resources\views/admin/tag/fields.blade.php ENDPATH**/ ?>