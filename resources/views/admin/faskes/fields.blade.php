<div class="form theme-form">
    <div class="mt-3">
        <label class="form-label" for="">Nama<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($faskes->nama) ? $faskes->nama : old('nama') }}" placeholder="Nama Obat/BMHP" name="nama">
        @error('nama')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Kepala<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($faskes->kepala) ? $faskes->kepala : old('kepala') }}" placeholder="Masukkan Nama Kepala Faskes" name="kepala">
        @error('kepala')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Farmasi<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($faskes->farmasi) ? $faskes->farmasi : old('farmasi') }}" placeholder="Masukkan Bagian Farmasi" name="farmasi">
        @error('farmasi')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Telepon/Kontak<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($faskes->telepon) ? $faskes->telepon : old('telepon') }}" placeholder="Masukkan Telepon/Kontak" name="telepon">
        @error('telepon')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Alamat<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($faskes->alamat) ? $faskes->alamat : old('alamat') }}" placeholder="Masukkan Alamat Faskes" name="alamat">
        @error('alamat')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
    </div>
</div>

