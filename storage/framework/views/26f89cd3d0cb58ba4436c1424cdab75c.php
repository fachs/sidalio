<div class="form theme-form">
    <div class="mt-3">
        <label class="form-label" for="">Nama<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($obmhp->nama) ? $obmhp->nama : old('nama')); ?>" placeholder="Nama Obat/BMHP" name="nama">
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
        <label class="form-label" for="">Satuan<span> *</span></label>
        <select class="form-select" id="satuan" name="satuan"> 
            <option value="BOTOL" selected>BOTOL</option>
            <option value="TABLET">TABLET</option>
        </select>
        <?php $__errorArgs = ['satuan'];
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
        <label class="form-label" for="">Isi/Kemasan<span> *</span></label>
        <input class="form-control" type="number" value="<?php echo e(isset($obmhp->isi_kemasan) ? $obmhp->isi_kemasan : old('isi_kemasan')); ?>" placeholder="Masukkan Isi/Kemasan" name="isi_kemasan">
        <?php $__errorArgs = ['isi_kemasan'];
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
        <label class="form-label" for="">Golongan<span> *</span></label>
        <select class="form-select" id="golongan" name="golongan"> 
            <option value="O" selected>O</option>
            <option value="B">B</option>
        </select>
        <?php $__errorArgs = ['golongan'];
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
        <button type="submit" class="btn btn-primary"><?php echo e(__('Simpan')); ?></button>
    </div>
</div>

<?php /**PATH C:\laragon\www\si-dalio\resources\views/admin/obmhp/fields.blade.php ENDPATH**/ ?>