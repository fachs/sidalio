<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Pemusnahan extends Model
{
    use HasFactory;

    public $fillable = [
        'nama',
        'jumlah',
        'status',
        'obat_id',
        'moned_id',
    ];

    public function obmhp(): BelongsTo
    {
        return $this->belongsTo(Obmhp::class, 'obat_id');
    }

    public function moned(): BelongsTo
    {
        return $this->belongsTo(Moned::class, 'moned_id');
    }
}
