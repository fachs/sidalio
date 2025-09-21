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
        <label class="form-label" for="">Kuantitas<span> *</span></label>
        <input class="form-control" type="number" value="<?php echo e(isset($penerimaan->qty) ? $penerimaan->qty : old('qty')); ?>" placeholder="Masukkan Kuantitas" name="qty" id="qty" oninput="hitungTotal()">
        <?php $__errorArgs = ['qty'];
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
        <label class="form-label" for="">Expired Date<span> *</span></label>
        <input class="form-control" type="date" value="<?php echo e(isset($penerimaan->exp_date) ? $penerimaan->exp_date : old('exp_date')); ?>" placeholder="Masukkan ED" name="exp_date">
        <?php $__errorArgs = ['exp_date'];
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
        <label class="form-label" for="">Tanggal Masuk<span> *</span></label>
        <input class="form-control" type="date" value="<?php echo e(isset($penerimaan->in_date) ? $penerimaan->in_date : old('in_date')); ?>" placeholder="" name="in_date">
        <?php $__errorArgs = ['in_date'];
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
        <label class="form-label" for="">Harga Satuan<span> *</span></label>
        <input class="form-control" type="number" value="<?php echo e(isset($penerimaan->harga_satuan) ? $penerimaan->harga_satuan : old('harga_satuan')); ?>" placeholder="Masukkan Harga Satuan" name="harga_satuan" id="harga_satuan" oninput="hitungTotal()">
        <?php $__errorArgs = ['harga_satuan'];
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
        <label class="form-label" for="">Nama PBF<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($penerimaan->nama_pbf) ? $penerimaan->nama_pbf : old('nama_pbf')); ?>" placeholder="Masukkan Nama PBF" name="nama_pbf">
        <?php $__errorArgs = ['nama_pbf'];
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
        <label class="form-label" for="">Nomor Beli<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($penerimaan->no_beli) ? $penerimaan->no_beli : old('no_beli')); ?>" placeholder="Masukkan Nomor Beli" name="no_beli">
        <?php $__errorArgs = ['no_beli'];
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
        <label class="form-label" for="">SBBK Provinsi<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($penerimaan->sbbk_prov) ? $penerimaan->sbbk_prov : old('sbbk_prov')); ?>" placeholder="Masukkan SBBK Provinsi" name="sbbk_prov">
        <?php $__errorArgs = ['sbbk_prov'];
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
        <label class="form-label" for="">Total Harga</label>
        <input class="form-control" type="number" name="total_harga" id="total_harga" readonly>
        
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Sumber Dana<span> *</span></label>
        <select class="form-select" id="jenis_dana" name="jenis_dana"> 
                <option value="HIBAH">HIBAH</option>
                <option value="BELANJA">BELANJA</option>
            
        </select>
        <?php $__errorArgs = ['jenis_dana'];
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
        <label class="form-label" for="">Kode Rekening<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($penerimaan->kode_rek) ? $penerimaan->kode_rek : old('kode_rek')); ?>" placeholder="Masukkan Kode Rekening" name="kode_rek">
        <?php $__errorArgs = ['kode_rek'];
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
        <label class="form-label" for="">Kode Program</label>
        <input class="form-control" type="text" value="<?php echo e(isset($penerimaan->kode_prog) ? $penerimaan->kode_prog : old('kode_prog')); ?>" placeholder="Masukkan Kode Program" name="kode_prog">
        <?php $__errorArgs = ['kode_prog'];
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
        <label class="form-label" for="">Kemasan<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($penerimaan->kemas) ? $penerimaan->kemas : old('kemas')); ?>" placeholder="Masukkan Jenis Kemasan" name="kemas">
        <?php $__errorArgs = ['kemas'];
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
        <label class="form-label" for="">Nomor Batch<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($penerimaan->no_batch) ? $penerimaan->no_batch : old('no_batch')); ?>" placeholder="Masukkan No Batch" name="no_batch">
        <?php $__errorArgs = ['no_batch'];
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
        <label class="form-label" for="">Lokasi Penyimpanan<span> *</span></label>
        <input class="form-control" type="text" value="<?php echo e(isset($penerimaan->lokasi) ? $penerimaan->lokasi : old('lokasi')); ?>" placeholder="Masukkan Lokasi Penyimpanan" name="lokasi">
        <?php $__errorArgs = ['lokasi'];
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
<?php /**PATH C:\laragon\www\si-dalio\resources\views/admin/penerimaan/fields.blade.php ENDPATH**/ ?>