<?php

namespace App\Repositories\Admin;

use App\Models\Obmhp;
use Exception;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;

class ObmhpRepository extends BaseRepository
{
    function model()
    {
        return Obmhp::class;
    }

    public function index()
    {
        return view('admin.obmhp.index');
    }

    public function create($attribute = [])
    {
        return view('admin.obmhp.create');
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
            $obmhp = $this->model->create([
                'nama' => $request->nama,
                'satuan' => $request->satuan,
                'isi_kemasan' => $request->isi_kemasan,
                'golongan' => $request->golongan,
            ]);

            DB::commit();
            return redirect()->route('admin.obmhp.index')->with('success', __('Tag Created Successfully'));
        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }

    public function edit($obmhp)
    {
        return view('admin.obmhp.edit',['obmhp'=>$obmhp]);
    }

    public function update($request, $id)
    {
        DB::beginTransaction();
        try {

            $obmhp = $this->model->findOrFail($id);
            $obmhp->update($request);

            DB::commit();
            return redirect()->route('admin.obmhp.index')->with('success', 'Tag Updated Successfully.');

        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $obmhp = $this->model->findOrFail($id);
            $obmhp->destroy($id);

            DB::commit();
            return redirect()->back()->with('success', __('Tag Deleted Successfully'));
        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }
}