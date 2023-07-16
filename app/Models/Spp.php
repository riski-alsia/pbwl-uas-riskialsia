<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    use HasFactory;
    protected $table = 'tb_spp';
    protected $primaryKey = 'id_spp';
    protected $guarded = '[]';
    protected $fillable = [
        'id_spp',
        'tahun',
        'nominal'
    ];
    public function spp()
    {
        return $this->belongsTo(Spp::class);    
    }
}
