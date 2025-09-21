<?php

namespace App\Repositories\Admin;

use App\Models\Obmhp;
use App\Models\Penerimaan;
use Exception;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;

class PenerimaanRepository extends BaseRepository
{
    function model()
    {
        return Penerimaan::class;
    }

    public function index()
    {
        
        return view('admin.penerimaan.index');
    }

    public function create($attribute = [])
    {
        $obmhps = Obmhp::all();
        return view('admin.penerimaan.create', ['obmhps' => $obmhps]);
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
            $penerimaan = $this->model->create([
                'qty' => $request->qty,
                'exp_date' => $request->exp_date,
                'in_date' => $request->in_date,
                'harga_satuan' => $request->harga_satuan,
                'nama_pbf' => $request->nama_pbf,
                'no_beli' => $request->no_beli,
                'sbbk_prov' => $request->sbbk_prov,
                'total_harga' => $request->total_harga,
                'jenis_dana' => $request->jenis_dana,
                'kode_rek' => $request->kode_rek,
                'kode_prog' => $request->kode_prog,
                'kemas' => $request->kemas,
                'no_batch' => $request->no_batch,
                'obat_id' => $request->obat_id,
                'lokasi' => $request->lokasi,
            ]);

            DB::commit();
            return redirect()->route('admin.penerimaan.index')->with('success', __('Data Penerimaan Ditambahkan!'));
        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }

    public function edit($penerimaan)
    {
        $obmhps = Obmhp::all();
        return view('admin.penerimaan.edit',['penerimaan'=>$penerimaan, 'obmhps' => $obmhps]);
    }

    public function update($request, $id)
    {
        DB::beginTransaction();
        try {

            $penerimaan = $this->model->findOrFail($id);
            $penerimaan->update($request);

            DB::commit();
            return redirect()->route('admin.penerimaan.index')->with('success', 'Data Penerimaan Diubah!');

        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $penerimaan = $this->model->findOrFail($id);
            $penerimaan->destroy($id);

            DB::commit();
            return redirect()->back()->with('success', __('Data Penerimaan Dihapus!'));
        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }
}