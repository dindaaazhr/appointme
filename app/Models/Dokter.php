<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokters';
    protected $primaryKey = 'id_dokter';
    public $timestamps = false; // Menonaktifkan timestamps
    
    protected $fillable = [
        'id_poli',
        'nama',
        'no_hp',
        'alamat',
        'jam_buka',
        'jam_tutup',
    ];

    public function polis(){
        return $this->belongsTo(Poli::class, 'id_poli');
    }
    public function antreans(){
        return $this->hasMany(Antrean::class, 'id_dokter');
    }
    public function pasiens(){
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }
}
