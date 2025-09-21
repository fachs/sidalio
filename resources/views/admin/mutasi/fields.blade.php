<div class="form theme-form">
    <div class="mt-3">
        <label class="form-label" for="">Nama Obat<span> *</span></label>
        <select class="form-select" id="obat_id" name="obat_id">
            @foreach ($obmhps as $obmhp)
                <option value="{{ isset($obmhp->id) ? $obmhp->id : old('id') }}">{{ isset($obmhp->nama) ? $obmhp->nama : old('nama') }}</option>
            @endforeach
        </select>
        @error('obat_id')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Jenis Mutasi<span> *</span></label>
        <select class="form-select" id="jenis" name="jenis">
            <option value="Distribusi">Distribusi</option>
            <option value="Konsumsi">Konsumsi</option>
        </select>
        @error('jenis')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <input class="form-control" type="text" value="{{ Illuminate\Support\Carbon::now()->month }}" placeholder="Masukkan Bulan Mutasi" name="bulan" hidden>
    <div class="mt-3">
        <label class="form-label" for="">DBMB<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($mutasi->dbmb) ? $mutasi->dbmb : old('dbmb') }}" placeholder="" name="dbmb">
        @error('dbmb')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Jumlah<span> *</span></label>
        <input class="form-control" type="number" value="{{ isset($mutasi->jumlah) ? $mutasi->jumlah : old('jumlah') }}" placeholder="Masukkan Jumlah Obat/Barang" name="jumlah">
        @error('jumlah')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Keterangan<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($mutasi->keterangan) ? $mutasi->keterangan : old('keterangan') }}" placeholder="Keterangan" name="keterangan">
        @error('keterangan')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Total Harga<span> *</span></label>
        <input class="form-control" type="number" value="{{ isset($mutasi->total_harga) ? $mutasi->total_harga : old('total_harga') }}" placeholder="" name="total_harga" disabled>
        @error('total_harga')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Faskes Tujuan<span> *</span></label>
        <select class="form-select" id="faskes_id" name="faskes_id">
            @foreach ($faskeses as $faskes)
                <option value="{{ isset($faskes->id) ? $faskes->id : old('id') }}">{{ isset($faskes->nama) ? $faskes->nama : old('faskes') }}</option>
            @endforeach
        </select>
        @error('faskes_id')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mt-3">
        <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
    </div>
</div>

