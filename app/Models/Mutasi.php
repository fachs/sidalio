<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    use HasFactory;

    public $fillable = [
        'jenis',
        'bulan',
        'dbmb',
        'jumlah',
        'keterangan',
        'total_harga',
        'obat_id',
        'faskes_id'
    ];

    public function obmhp(): BelongsTo
    {
        return $this->belongsTo(Obmhp::class, 'obat_id');
    }

    public function faskes(): BelongsTo
    {
        return $this->belongsTo(Faskes::class, 'faskes_id');
    }
}
