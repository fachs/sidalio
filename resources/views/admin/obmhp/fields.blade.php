<div class="form theme-form">
    <div class="mt-3">
        <label class="form-label" for="">Nama<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($obmhp->nama) ? $obmhp->nama : old('nama') }}" placeholder="Nama Obat/BMHP" name="nama">
        @error('name')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Satuan<span> *</span></label>
        <select class="form-select" id="satuan" name="satuan"> 
            <option value="BOTOL" selected>BOTOL</option>
            <option value="TABLET">TABLET</option>
        </select>
        @error('satuan')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Isi/Kemasan<span> *</span></label>
        <input class="form-control" type="number" value="{{ isset($obmhp->isi_kemasan) ? $obmhp->isi_kemasan : old('isi_kemasan') }}" placeholder="Masukkan Isi/Kemasan" name="isi_kemasan">
        @error('isi_kemasan')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Golongan<span> *</span></label>
        <select class="form-select" id="golongan" name="golongan"> 
            <option value="O" selected>O</option>
            <option value="B">B</option>
        </select>
        @error('golongan')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
    </div>
</div>

