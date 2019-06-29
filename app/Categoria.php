<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // Atributos y métodos

    // Atributos importantisimos
    // $table = "nombre de la tabla"
    // $fillable = ['col','col2','col3']
    // $dates = ['col_fecha1','col_fecha2']
    // $timestamps = true / false;
    // $primaryKey = 'claveQueNoEsId'

    protected $table = 'categoria';

    protected $fillable = ['id','nombre'];

    public $timestamps = false; // Tabla no tiene created_at ni updated_at

    // ToDo: Relaciones (métodos)
    public function post()
    {
        return $this->belongsToMany(Post::class);
    }

}
