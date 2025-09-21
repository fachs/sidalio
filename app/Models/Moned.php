<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Moned extends Model
{
    use HasFactory;

    public $fillable = [
        'nama',
        'exp',
        'countdown',
        'obat_id',
    ];

    public function obmhp(): BelongsTo
    {
        return $this->belongsTo(Obmhp::class, 'obat_id');
    }
}
