<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\FaskesDataTable;
use App\DataTables\ObmhpDataTable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateFaskesRequest;
use App\Http\Requests\Admin\CreateObmhpRequest;
use App\Http\Requests\Admin\UpdateFaskesRequest;
use App\Http\Requests\Admin\UpdateObmhpRequest;
use App\Models\Faskes;
use App\Models\Obmhp;
use App\Repositories\Admin\FaskesRepository;
use App\Repositories\Admin\ObmhpRepository;

class FaskesController extends Controller
{

    public $repository;

    public function __construct(FaskesRepository $repository)
    {
        $this->authorizeResource(Faskes::class, 'faskes');
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(FaskesDataTable $dataTable)
    {
        return $dataTable->render('admin.faskes.index');
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
    public function store(CreateFaskesRequest $request)
    {
        return $this->repository->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Faskes $faskes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faskes $faskes)
    {
        return $this->repository->edit($faskes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaskesRequest $request, Faskes $faskes)
    {
        return $this->repository->update($request->all(), $faskes->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faskes $faskes)
    {
        return $this->repository->destroy($faskes->id);
    }

    public function status(Request $request, $id)
    {
        return $this->repository->status($id ,$request->status);
    }
}
 