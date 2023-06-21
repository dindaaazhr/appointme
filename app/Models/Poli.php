<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;
    protected $table = 'polis';
    protected $primaryKey = 'id_poli';
    public $timestamps = false; // Menonaktifkan timestamps
    
    protected $fillable = [
        'nama',
        'kepala',
    ];
    public function dokters(){
        return $this->hasMany(Dokter::class, 'id_poli');
    }
}
