<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Obmhp extends Model
{
    use HasFactory;

    public $fillable = [
        'nama',
        'satuan',
        'isi_kemasan',
        'golongan',
    ];

    public function penerimaan(): HasMany
    {
        return $this->hasMany(Penerimaan::class, 'obat_id');
    }

    public function mutasi(): HasMany
    {
        return $this->hasMany(Mutasi::class, 'obat_id');
    }

    public function moned(): HasMany
    {
        return $this->hasMany(Moned::class, 'obat_id');
    }

    public function pemusnahan(): HasMany
    {
        return $this->hasMany(Pemusnahan::class, 'obat_id');
    }
}
