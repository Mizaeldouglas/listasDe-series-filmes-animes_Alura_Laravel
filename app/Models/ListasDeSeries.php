<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListasDeSeries extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'categoria_id',
        'imagem'
    ];

//    public function temporadas()
//    {
//        return $this->hasMany(Temporada::class, 'serie_id');
//    }
}
