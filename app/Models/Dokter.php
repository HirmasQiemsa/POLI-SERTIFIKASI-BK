<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
class Dokter extends Model
{
    use HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $table = 'dokters';
    protected $fillable = [
        'nama','alamat','no_hp','password','id_poli',
    ];
    public function ruangPoli() {
        return $this->belongsTo(Poli::class,'id_poli');
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
    ];

}
