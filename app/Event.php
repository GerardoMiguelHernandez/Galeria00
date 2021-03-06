<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

protected $table = 'events';

    protected $fillable = [
        'nombre','fecha','lugar','imagen','category_id','centro_id'
    ];


    public function category()
    {
        //return $this->hasMany('App\Category');
        return $this->hasOne('App\Category','id','category_id');
    }
      public function work_center()
    {
        return $this->hasMany('App\Work_center');
    }
    public function image(){
      return $this->belongsTo('App\Image','id');
   }

   public function scopeSearch($query,$nombre){
    if(trim($nombre)!=""){
    return $query->where('nombre','LIKE',"%$nombre%");
}
   }
}
