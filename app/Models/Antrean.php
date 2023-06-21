<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrean extends Model
{
    use HasFactory;
    protected $table = 'antreans';
    protected $primaryKey = 'id_antrean';
    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'jam_temu',
        'status',
    ];
    public function pasiens(){
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }
    public function dokters(){
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
    public function polis(){
        return $this->belongsTo(Poli::class, 'id_dokter');
    }
}