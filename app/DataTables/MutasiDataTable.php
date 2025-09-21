<?php

namespace App\DataTables;

use App\Models\Faskes;
use App\Models\Mutasi;
use App\Models\Obmhp;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class MutasiDataTable extends DataTable
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
        ->editColumn('obat_id', function ($row) {
            $obmhp = Obmhp::find($row->obat_id);
            return $obmhp->nama;
        })
        // ->editColumn('surat', function ($row) {
        //     $media = $row->getFirstMedia('surat');
        //         if ($media) {
        //             return '<img src="' . $media->getUrl() . '" alt="thumbnail" class="img-thumbnail img-fix">';
        //         }
        //         return '<img src="' . asset("assets/images/user/user.png") . '" alt="Placeholder Image" class="img-thumbnail img-fix">';
        // })
        ->editColumn('faskes_id', function ($row) {
            $faskes = Faskes::find($row->faskes_id);
            return $faskes->nama;
        })
        ->editColumn('action', function ($row) {
            return view('admin.inc.action', [
                'detail' => 'admin.mutasi.show',
                'edit'   => 'admin.mutasi.edit',
                'delete' => 'admin.mutasi.destroy',
                'data'   => $row
            ]);
        })
        ->editColumn('total_harga', function ($row) {
            return 'Rp ' . number_format($row->total_harga, 0, ',', '.');
        })
        ->editColumn('jumlah', function ($row) {
            return number_format($row->jumlah, 0, ',', '.');
        })
        ->rawColumns(['action', 'created_at']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Mutasi $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                ->setTableId('mutasi-table')
                ->addColumn(['data' => 'obat_id', 'title' =>  __('Obat'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'faskes_id', 'title' => __('Faskes'), 'orderable' => true, 'searchable' => true,])
                // ->addColumn(['data' => 'bulan', 'title' =>  __('Bulan'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'dbmb', 'title' =>  __('DBMB'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'jumlah', 'title' =>  __('Jumlah'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'total_harga', 'title' =>  __('Total Harga'), 'orderable' => true, 'searchable' => true])
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
