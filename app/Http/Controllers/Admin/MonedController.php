<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\MonedDataTable;
use App\DataTables\PenerimaanDataTable;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\DataTables\TagDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatePenerimaanRequest;
use App\Repositories\Admin\TagRepository;
use App\Http\Requests\Admin\UpdatePenerimaanRequest;
use App\Models\Obmhp;
use App\Models\Penerimaan;
use App\Repositories\Admin\PenerimaanRepository;

class MonedController extends Controller
{

    public $repository;

    public function __construct(PenerimaanRepository $repository)
    {
        $this->authorizeResource(Penerimaan::class, 'penerimaan');
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(MonedDataTable $dataTable)
    {
        return $dataTable->render('admin.moned.index');
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
    public function store(CreatePenerimaanRequest $request)
    {
        return $this->repository->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Penerimaan $penerimaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penerimaan $penerimaan)
    {
        return $this->repository->edit($penerimaan);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenerimaanRequest $request, Penerimaan $penerimaan)
    {
        return $this->repository->update($request->all(), $penerimaan->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penerimaan $penerimaan)
    {
        return $this->repository->destroy($penerimaan->id);
    }

    public function status(Request $request, $id)
    {
        return $this->repository->status($id ,$request->status);
    }
}
 