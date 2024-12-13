<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poli extends Model
{
    use HasFactory;

    protected $table = 'polis';
    protected $fillable = [
        'nama_poli',
        'keterangan',
    ];

    public function dokters() {
        return $this->hasMany(Dokter::class);
    }

}
