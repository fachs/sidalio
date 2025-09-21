<div class="form theme-form">
    <div class="mt-3">
        <label class="form-label" for="">Nama Obat<span> *</span></label>
        <select class="form-select" id="obat_id" name="obat_id"> 
            @foreach ($obmhps as $obmhp)
                <option value="{{ isset($obmhp->id) ? $obmhp->id : old('id') }}">{{ isset($obmhp->nama) ? $obmhp->nama : old('nama') }}</option>
            @endforeach
            {{-- <option value="{{ isset($penerimaan->obat_id) ? $penerimaan->obat_id : old('obat_id') }}">{{ isset($penerimaan->obat_id) ? $penerimaan->obat_id : old('obat_id') }}</option> --}}
        </select>
        @error('obat_id')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Kuantitas<span> *</span></label>
        <input class="form-control" type="number" value="{{ isset($penerimaan->qty) ? $penerimaan->qty : old('qty') }}" placeholder="Masukkan Kuantitas" name="qty" id="qty" oninput="hitungTotal()">
        @error('qty')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Expired Date<span> *</span></label>
        <input class="form-control" type="date" value="{{ isset($penerimaan->exp_date) ? $penerimaan->exp_date : old('exp_date') }}" placeholder="Masukkan ED" name="exp_date">
        @error('exp_date')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Tanggal Masuk<span> *</span></label>
        <input class="form-control" type="date" value="{{ isset($penerimaan->in_date) ? $penerimaan->in_date : old('in_date') }}" placeholder="" name="in_date">
        @error('in_date')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Harga Satuan<span> *</span></label>
        <input class="form-control" type="number" value="{{ isset($penerimaan->harga_satuan) ? $penerimaan->harga_satuan : old('harga_satuan') }}" placeholder="Masukkan Harga Satuan" name="harga_satuan" id="harga_satuan" oninput="hitungTotal()">
        @error('harga_satuan')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Nama PBF<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($penerimaan->nama_pbf) ? $penerimaan->nama_pbf : old('nama_pbf') }}" placeholder="Masukkan Nama PBF" name="nama_pbf">
        @error('nama_pbf')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Nomor Beli<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($penerimaan->no_beli) ? $penerimaan->no_beli : old('no_beli') }}" placeholder="Masukkan Nomor Beli" name="no_beli">
        @error('no_beli')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">SBBK Provinsi<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($penerimaan->sbbk_prov) ? $penerimaan->sbbk_prov : old('sbbk_prov') }}" placeholder="Masukkan SBBK Provinsi" name="sbbk_prov">
        @error('sbbk_prov')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Total Harga</label>
        <input class="form-control" type="number" name="total_harga" id="total_harga" readonly>
        {{-- @error('total_harga')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror --}}
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Sumber Dana<span> *</span></label>
        <select class="form-select" id="jenis_dana" name="jenis_dana"> 
                <option value="HIBAH">HIBAH</option>
                <option value="BELANJA">BELANJA</option>
            {{-- <option value="{{ isset($penerimaan->obat_id) ? $penerimaan->obat_id : old('obat_id') }}">{{ isset($penerimaan->obat_id) ? $penerimaan->obat_id : old('obat_id') }}</option> --}}
        </select>
        @error('jenis_dana')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Kode Rekening<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($penerimaan->kode_rek) ? $penerimaan->kode_rek : old('kode_rek') }}" placeholder="Masukkan Kode Rekening" name="kode_rek">
        @error('kode_rek')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Kode Program</label>
        <input class="form-control" type="text" value="{{ isset($penerimaan->kode_prog) ? $penerimaan->kode_prog : old('kode_prog') }}" placeholder="Masukkan Kode Program" name="kode_prog">
        @error('kode_prog')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Kemasan<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($penerimaan->kemas) ? $penerimaan->kemas : old('kemas') }}" placeholder="Masukkan Jenis Kemasan" name="kemas">
        @error('kemas')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Nomor Batch<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($penerimaan->no_batch) ? $penerimaan->no_batch : old('no_batch') }}" placeholder="Masukkan No Batch" name="no_batch">
        @error('no_batch')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <label class="form-label" for="">Lokasi Penyimpanan<span> *</span></label>
        <input class="form-control" type="text" value="{{ isset($penerimaan->lokasi) ? $penerimaan->lokasi : old('lokasi') }}" placeholder="Masukkan Lokasi Penyimpanan" name="lokasi">
        @error('lokasi')
            <span class="text-danger">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
    </div>
</div>
