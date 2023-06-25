<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;
    
    protected $table = 'pasiens';
    protected $primaryKey = 'id_pasien';
    public $timestamps = false; // Menonaktifkan timestamps
    
    protected $fillable = [
        'email',
        'password',
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'role',
    ];
    public function polis(){
        return $this->belongsTo(Poli::class, 'id_poli');
    }
    public function antreans(){
        return $this->hasMany(Antrean::class, 'id_pasien');
    }
    public function dokters(){
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
    
}
