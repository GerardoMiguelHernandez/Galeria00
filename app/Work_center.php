<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work_center extends Model
{
    //
    protected $table = 'work_zone';

    protected $fillable = [
        'name','ciudad','region',
    ];

     public function event(){
      	
      return $this->belongsTo('App\Event');
       
} 
}
