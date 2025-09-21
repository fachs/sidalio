<?php

namespace App\DataTables;

use App\Models\Obmhp;
use App\Models\Penerimaan;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class PenerimaanDataTable extends DataTable
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
        ->editColumn('action', function ($row) {
            return view('admin.inc.action', [
                'edit'   => 'admin.penerimaan.edit',
                'delete' => 'admin.penerimaan.destroy',
                'data'   => $row
            ]);
        })
        ->rawColumns(['action', 'created_at']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Penerimaan $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                ->setTableId('penerimaan-table')
                ->addColumn(['data' => 'obat_id', 'title' =>  __('Obat'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'qty', 'title' => __('QTY'), 'orderable' => true, 'searchable' => true,])
                ->addColumn(['data' => 'in_date', 'title' =>  __('Tgl Masuk'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'harga_satuan', 'title' =>  __('Hrg Satuan'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'nama_pbf', 'title' =>  __('PBF'), 'orderable' => true, 'searchable' => true])
                // ->addColumn(['data' => 'no_beli', 'title' =>  __('No Beli'), 'orderable' => true, 'searchable' => true])
                // ->addColumn(['data' => 'sbbk_prov', 'title' =>  __('SBBK'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'total_harga', 'title' =>  __('T. Harga'), 'orderable' => true, 'searchable' => true])
                // ->addColumn(['data' => 'jenis_dana', 'title' =>  __('Jenis Dana'), 'orderable' => true, 'searchable' => true])
                // ->addColumn(['data' => 'kode_rek', 'title' =>  __('Rek'), 'orderable' => true, 'searchable' => true])
                // ->addColumn(['data' => 'kode_prog', 'title' =>  __('Program'), 'orderable' => true, 'searchable' => true])
                // ->addColumn(['data' => 'kemas', 'title' =>  __('Kemasan'), 'orderable' => true, 'searchable' => true])
                ->addColumn(['data' => 'lokasi', 'title' =>  __('Lokasi'), 'orderable' => true, 'searchable' => true])
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
