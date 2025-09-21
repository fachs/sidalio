<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\MutasiDataTable;
use App\DataTables\PenerimaanDataTable;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\DataTables\TagDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateMutasiRequest;
use App\Http\Requests\Admin\CreatePenerimaanRequest;
use App\Http\Requests\Admin\UpdateMutasiRequest;
use App\Repositories\Admin\TagRepository;
use App\Http\Requests\Admin\UpdatePenerimaanRequest;
use App\Models\Mutasi;
use App\Models\Obmhp;
use App\Models\Penerimaan;
use App\Repositories\Admin\MutasiRepository;
use App\Repositories\Admin\PenerimaanRepository;

class MutasiController extends Controller
{

    public $repository;

    public function __construct(MutasiRepository $repository)
    {
        $this->authorizeResource(Mutasi::class, 'mutasi');
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(MutasiDataTable $dataTable)
    {
        return $dataTable->render('admin.mutasi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->repository->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMutasiRequest $request)
    {
        return $this->repository->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mutasi $mutasi)
    {
        return $this->repository->detail($mutasi);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mutasi $mutasi)
    {
        return $this->repository->edit($mutasi);
    }

    public function detail(Mutasi $mutasi)
    {
        return $this->repository->edit($mutasi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMutasiRequest $request, Mutasi $mutasi)
    {
        return $this->repository->update($request->all(), $mutasi->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mutasi $mutasi)
    {
        return $this->repository->destroy($mutasi->id);
    }

    public function status(Request $request, $id)
    {
        return $this->repository->status($id ,$request->status);
    }
}
 