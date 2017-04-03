<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//Soft Delete -> passa par aum trash, e só depois faz o permanente delete
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    //obrigar a tabela da db a ter outro nome que não o nome da class em lower case e plural
//    protected $table = 'posts';
//    protected $primaryKey = 'post_id';

protected $dates = ['deleted_at'];

protected $fillable = [

    'title',
    'content'
];

    public function user(){

        return $this->belongsTo('App\User');
    }


    public function photos(){

        return $this->morphMany('App\Photo', 'imageable');
    }
}
