<?php

namespace App\Repositories\Admin;

use App\Models\Faskes;
use App\Models\Mutasi;
use App\Models\Obmhp;
use App\Models\Penerimaan;
use Exception;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;

class MutasiRepository extends BaseRepository
{
    function model()
    {
        return Mutasi::class;
    }

    public function index()
    {
        return view('admin.mutasi.index');
    }

    public function detail($mutasi)
    {
        $obmhps = Obmhp::find($mutasi->obat_id);
        $faskeses = Faskes::find($mutasi->faskes_id);
        // $penerimaan = Faskes::find($mutasi->faskes_id);
        return view('admin.mutasi.detail',['mutasi' => $mutasi],['obmhps' => $obmhps],['faskeses' => $faskeses]);
    }

    public function create($attribute = [])
    {
        $obmhps = Obmhp::all();
        $faskeses = Faskes::all();
        return view('admin.mutasi.create', ['obmhps' => $obmhps], ['faskeses' => $faskeses]);
    }

    public function store($request)
    {

        DB::beginTransaction();
        try {
            $mutasi = $this->model->create([ 
                'jenis' => $request->jenis,
                'bulan' => $request->bulan,
                'dbmb' => $request->dbmb,
                'jumlah' => $request->jumlah,
                'keterangan' => $request->keterangan,
                'total_harga' => $request->total_harga,
                'obat_id' => $request->obat_id,
                'faskes_id' => $request->faskes_id,
            ]);

            DB::commit();
            return redirect()->route('admin.mutasi.index')->with('success', __('Mutasi berhasil dibuat!'));
        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }

    public function edit($mutasi)
    {
        $obmhps = Obmhp::all();
        $faskeses = Faskes::all();
        return view('admin.mutasi.edit',['mutasi'=>$mutasi, 'obmhps' => $obmhps, 'faskeses' => $faskeses]);
    }

    public function update($request, $id)
    {
        DB::beginTransaction();
        try {

            $mutasi = $this->model->findOrFail($id);
            $mutasi->update($request);

            DB::commit();
            return redirect()->route('admin.mutasi.index')->with('success', 'Data Mutasi Diupdate!');

        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $mutasi = $this->model->findOrFail($id);
            $mutasi->destroy($id);

            DB::commit();
            return redirect()->back()->with('success', __('Data Mutasi Dihapus!'));
        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }
}