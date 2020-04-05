<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    //relacion de tablas
    public function posts()
    {
       return $this->hasMany(Post::class);
    }


    //getAttribute altera name para que salga diferente/
    //un nuevo campo logico se crea aqui y se agrega donde se llama
    public function getGetNameAttribute()
    {
       return strtoupper($this->name);
    }

   //modifica como se guardan los datos en base de datos
    public function setNameAttribute($value)
    {
       $this->attributes['name'] = strtolower($value);
    }


}
