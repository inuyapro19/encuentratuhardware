<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Producto extends Model implements  HasMedia
{
    //
    use HasMediaTrait;
    protected $fillable = [
      'nombre_prod','descripcion','precio','categoria_id','user_id','estado'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function GetProductos(){
        return $this->with('categoria')->get();
    }

    public function obtenerImagen($producto){
        $image=[];
        foreach($producto as $pro){
            $image[]=$pro->getFirstMediaUrl('productos');
        }

    }

}
