<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $table='penilaian';
    protected $tablegurded=[];
    protected $fillable = [
        'alternatif_id',
        'crips_id',
    ];


    public function crips()
    {
        return $this->belongsTo(Crips::class, 'crips_id');
    }
    public function alternatif()
    {
        return $this->belongsTo(Alternatif::class, 'alternatif_id');
    }
    
}
