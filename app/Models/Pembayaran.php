<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'tb_pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $guarded = '[]';
    protected $fillable = [
        'id_pembayaran',
        'nisn',
        'tgl_bayar',
        'bulan_bayar',
        'tahun_bayar',
        'id_spp',
        'jumlah_bayar'
    ];
    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class);    
    }
}
