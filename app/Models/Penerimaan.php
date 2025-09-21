<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    use HasFactory;

    public $fillable = [
        'qty',
        'exp_date',
        'in_date',
        'harga_satuan',
        'nama_pbf',
        'no_beli',
        'sbbk_prov',
        'total_harga',
        'jenis_dana',
        'kode_rek',
        'kode_prog',
        'kemas',
        'no_batch',
        'obat_id',
        'lokasi',
    ];

    public function obmhp(): BelongsTo
    {
        return $this->belongsTo(Obmhp::class, 'obat_id');
    }
}
