<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   //relacion de tablas
   public function user()
   {
      return $this->belongsTo(User::class);
   }

   //modifica como se muestra en la vista 
   public function getGettitleAttribute()
   {
      return ucfirst($this->title);
   }

   //modifica como se guardan los datos en base de datos
   public function setTitleAttribute($value)
   {
      $this->attributes['title'] = strtolower($value);
   }


}
