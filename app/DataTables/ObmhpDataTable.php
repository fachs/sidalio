<?php

namespace App\DataTables;

use App\Models\Obmhp;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class ObmhpDataTable extends DataTable
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
                'edit'   => 'admin.obmhp.edit',
                'delete' => 'admin.obmhp.destroy',
                'data'   => $row
            ]);
        })
        ->editColumn('isi_kemasan', function ($row) {
            return number_format($row->isi_kemasan, 0, ',', '.');;
        })
        ->rawColumns(['action', 'created_at']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Obmhp $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                ->setTableId('obmhp-table')
                ->addColumn(['data' => 'nama', 'title' => __('Nama'), 'orderable' => true, 'searchable' => true,])
                ->addColumn(['data' => 'satuan', 'title' => __('Satuan'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'isi_kemasan', 'title' =>  __('Isi'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'golongan', 'title' =>  __('Gol'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'action', 'title' =>  __('Aksi'), 'orderable' => false, 'searchable' => false])
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
