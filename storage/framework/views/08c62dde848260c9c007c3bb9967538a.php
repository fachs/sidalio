<div class="form theme-form">
    <div class="mt-3">
        <label class="form-label" for="">Nama<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($faskes->nama) ? $faskes->nama : old('nama')); ?>" placeholder="Nama FASKES" name="nama">
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
        <label class="form-label" for="">Kepala<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($faskes->kepala) ? $faskes->kepala : old('kepala')); ?>" placeholder="Masukkan Kepala Faskes" name="kepala">
        <?php $__errorArgs = ['kepala'];
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
        <label class="form-label" for="">Farmasi<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($faskes->farmasi) ? $faskes->farmasi : old('farmasi')); ?>" placeholder="Masukkan Bagian Farmasi" name="farmasi">
        <?php $__errorArgs = ['farmasi'];
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
        <label class="form-label" for="">Telepon<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($faskes->telepon) ? $faskes->telepon : old('telepon')); ?>" placeholder="Masukkan Kontak/Telepon" name="telepon">
        <?php $__errorArgs = ['telepon'];
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
        <label class="form-label" for="">Alamat Faskes<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($faskes->alamat) ? $faskes->alamat : old('alamat')); ?>" placeholder="Masukkan Alamat" name="alamat">
        <?php $__errorArgs = ['alamat'];
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

<?php /**PATH C:\laragon\www\si-dalio\resources\views/admin/faskes/fields.blade.php ENDPATH**/ ?>