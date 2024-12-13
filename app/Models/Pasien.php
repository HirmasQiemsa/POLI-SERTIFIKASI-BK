<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Carbon\Carbon;

class Pasien extends Model
{

    use Notifiable;
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama','alamat','no_ktp','no_hp','no_rm',
    ];
    // public function setNomorRmAttribute($value)
    // {
    //     $tanggal = Carbon::now()->format('Ym');
    //     $no_rm = str_pad($this->id, 3, '0', STR_PAD_LEFT);
    //     $this->attributes['no_rm'] = $tanggal . $no_rm;
    // }



}
