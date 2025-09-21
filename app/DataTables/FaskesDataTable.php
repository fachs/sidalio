<?php

namespace App\DataTables;

use App\Models\Faskes;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class FaskesDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->editColumn('created_at', function ($row) {
            return $row->created_at->diffForHumans();
        })
        ->editColumn('action', function ($row) {
            return view('admin.inc.action', [
                'edit'   => 'admin.faskes.edit',
                'delete' => 'admin.faskes.destroy',
                'data'   => $row
            ]);
        })
        ->rawColumns(['action', 'created_at']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Faskes $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                ->setTableId('faskes-table')
                ->addColumn(['data' => 'nama', 'title' => __('Nama'), 'orderable' => true, 'searchable' => true,])
                ->addColumn(['data' => 'kepala', 'title' => __('Kepala'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'farmasi', 'title' =>  __('Farmasi'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'telepon', 'title' =>  __('Telepon'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'alamat', 'title' =>  __('Alamat'), 'orderable' => true, 'searchable' => true])
                // ->addColumn(['data' => 'action', 'title' =>  __('Aksi'), 'orderable' => false, 'searchable' => false])
                ->minifiedAjax()
                ->selectStyleSingle()
                ->parameters([
                    'language' => [
                        'emptyTable' => 'No Records Found',
                        'infoEmpty' => '',
                        'zeroRecords' => 'No Records Found',
                    ],
                    'drawCallback' => 'function(settings) {
                        if (settings._iRecordsDisplay === 0) {
                            $(settings.nTableWrapper).find(".dataTables_paginate").hide();
                        } else {
                            $(settings.nTableWrapper).find(".dataTables_paginate").show();
                        }
                        feather.replace();
                    }',
                ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [];
    }

    /**
     * Get the filename for export.
     */
    // protected function filename(): string
    // {
    //     return 'Tag_' . date('YmdHis');
    // }
}
