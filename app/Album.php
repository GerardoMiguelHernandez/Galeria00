<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //

    protected $table = 'album';
     protected $fillable = [
        'nombre','description',
    ];

 public function image()
    {
        return $this->hasMany('App\Image');
    }

}
