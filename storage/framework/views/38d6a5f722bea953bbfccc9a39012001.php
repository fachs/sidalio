<div class="form theme-form">
    <div class="mt-3">
        <label class="form-label" for="">Nama Obat<span> *</span></label>
        <select class="form-select" id="obat_id" name="obat_id">
            <?php $__currentLoopData = $obmhps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obmhp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e(isset($obmhp->id) ? $obmhp->id : old('id')); ?>"><?php echo e(isset($obmhp->nama) ? $obmhp->nama : old('nama')); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php $__errorArgs = ['obat_id'];
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
        <label class="form-label" for="">Jenis Mutasi<span> *</span></label>
        <select class="form-select" id="jenis" name="jenis">
            <option value="Distribusi">Distribusi</option>
            <option value="Konsumsi">Konsumsi</option>
        </select>
        <?php $__errorArgs = ['jenis'];
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
    <input class="form-control" type="text" value="<?php echo e(Illuminate\Support\Carbon::now()->month); ?>" placeholder="Masukkan Bulan Mutasi" name="bulan" hidden>
    <div class="mt-3">
        <label class="form-label" for="">DBMB<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($mutasi->dbmb) ? $mutasi->dbmb : old('dbmb')); ?>" placeholder="" name="dbmb">
        <?php $__errorArgs = ['dbmb'];
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
        <label class="form-label" for="">Jumlah<span> *</span></label>
        <input class="form-control" type="number" value="<?php echo e(isset($mutasi->jumlah) ? $mutasi->jumlah : old('jumlah')); ?>" placeholder="Masukkan Jumlah Obat/Barang" name="jumlah">
        <?php $__errorArgs = ['jumlah'];
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
        <label class="form-label" for="">Keterangan<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($mutasi->keterangan) ? $mutasi->keterangan : old('keterangan')); ?>" placeholder="Keterangan" name="keterangan">
        <?php $__errorArgs = ['keterangan'];
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
        <label class="form-label" for="">Total Harga<span> *</span></label>
        <input class="form-control" type="number" value="<?php echo e(isset($mutasi->total_harga) ? $mutasi->total_harga : old('total_harga')); ?>" placeholder="" name="total_harga" disabled>
        <?php $__errorArgs = ['total_harga'];
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
        <label class="form-label" for="">Faskes Tujuan<span> *</span></label>
        <select class="form-select" id="faskes_id" name="faskes_id">
            <?php $__currentLoopData = $faskeses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faskes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e(isset($faskes->id) ? $faskes->id : old('id')); ?>"><?php echo e(isset($faskes->nama) ? $faskes->nama : old('faskes')); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php $__errorArgs = ['faskes_id'];
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

<?php /**PATH C:\laragon\www\si-dalio\resources\views/admin/mutasi/fields.blade.php ENDPATH**/ ?>