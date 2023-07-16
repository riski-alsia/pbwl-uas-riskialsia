<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'tb_siswa';
    protected $primaryKey = 'id_siswa';
    protected $guarded = '[]';
    protected $fillable = [
        'id_siswa',
        'nisn',
        'nama',
        'alamat',
        'no_telp',
        'id_spp'
    ];
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);    
    }
}
