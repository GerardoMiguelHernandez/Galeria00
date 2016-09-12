<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //

     protected $table = 'images';

    protected $fillable = [
        'image','descripcion','usuario_id','evento_id',
    ];

public function user()
    {
        return $this->hasMany('App\User');
    }
      public function event()
    {
        return $this->hasMany('App\Event');
    }


}
