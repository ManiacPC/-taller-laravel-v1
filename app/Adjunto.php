<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adjunto extends Model
{
    protected $table = 'adjunto';

    protected $fillable = ['id','post_id','ruta'];

    public $timestamps = false;

    // Guarded / Hidden = []

    // Relationships
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
