<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //

    protected $fillable = [
      'nombre_prod','descripcion','precio','categoria_id','user_id','estado'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }


}
