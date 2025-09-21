<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ObmhpDataTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateObmhpRequest;
use App\Http\Requests\Admin\UpdateObmhpRequest;
use App\Models\Obmhp;
use App\Repositories\Admin\ObmhpRepository;

class ObmhpController extends Controller
{

    public $repository;

    public function __construct(ObmhpRepository $repository)
    {
        $this->authorizeResource(Obmhp::class, 'obmhp');
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(ObmhpDataTable $dataTable)
    {
        return $dataTable->render('admin.obmhp.index');
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
    public function store(CreateObmhpRequest $request)
    {
        return $this->repository->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Obmhp $obmhp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obmhp $obmhp)
    {
        return $this->repository->edit($obmhp);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateObmhpRequest $request, Obmhp $obmhp)
    {
        return $this->repository->update($request->all(), $obmhp->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obmhp $obmhp)
    {
        return $this->repository->destroy($obmhp->id);
    }

    public function status(Request $request, $id)
    {
        return $this->repository->status($id ,$request->status);
    }
}
 