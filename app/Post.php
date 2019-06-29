<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable = [
        'id',
        'user_id',
        'contenido',
        'titulo',
        'fecha_ingreso'
    ];

    protected $dates = ['fecha_ingreso'];

    public $timestamps = false;

    // Relationships
    public function adjunto()
    {
        return $this->hasMany(Adjunto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsToMany(Categoria::class);
    }
}
