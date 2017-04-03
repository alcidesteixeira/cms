<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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


    public function post(){
        //pesquisa por defeito a coluna user_id
        return $this->hasOne('App\Post');
    }

    public function posts(){

        return $this->hasMany('App\Post');
    }

    public function roles(){
// segundo parametro é a tabela onde procurar customizada;
// terceiro parametro é as colunas a procurar
//   return $this->belongsToMany('App\Role','role_user', 'user_id', 'role_id');

        //se quisermos tirar info da tabela intermédia, definir a parte withPivot
        return $this->belongsToMany('App\Role')->withPivot('created_at');


    }


    public function photos(){

        return $this->morphMany('App\Photo', 'imageable');
    }
}
