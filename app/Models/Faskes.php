<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Faskes extends Model
{
    use HasFactory;

    public $fillable = [
        'nama',
        'kepala',
        'farmasi',
        'telepon',
        'alamat',
    ];

    public function mutasi(): HasMany
    {
        return $this->hasMany(Mutasi::class, 'faskes_id');
    }
}
