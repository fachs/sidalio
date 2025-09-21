<?php

namespace App\Repositories\Admin;

use App\Models\Faskes;
use App\Models\Obmhp;
use Exception;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Eloquent\BaseRepository;

class FaskesRepository extends BaseRepository
{
    function model()
    {
        return Faskes::class;
    }

    public function index()
    {
        return view('admin.faskes.index');
    }

    public function create($attribute = [])
    {
        return view('admin.faskes.create');
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {
            $faskes = $this->model->create([
                'nama' => $request->nama,
                'kepala' => $request->kepala,
                'farmasi' => $request->farmasi,
                'telepon' => $request->telepon,
                'alamat' => $request->alamat,
            ]);

            DB::commit();
            return redirect()->route('admin.faskes.index')->with('success', __('Tag Created Successfully'));
        } catch (Exception $e) {

            DB::rollback();

            throw $e;
        }
    }

    public function edit($faskes)
    {
        return view('admin.faskes.edit',['faskes'=>$faskes]);
    }

    public function update($request, $id)
    {
        DB::beginTransaction();
        try {

            $faskes = $this->model->findOrFail($id);
            $faskes->update($request);

            DB::commit();
            return redirect()->route('admin.faskes.index')->with('success', 'Tag Updated Successfully.');

        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $faskes = $this->model->findOrFail($id);
            $faskes->destroy($id);

            DB::commit();
            return redirect()->back()->with('success', __('Tag Deleted Successfully'));
        } catch (Exception $e) {

            DB::rollback();
            throw $e;
        }
    }
}