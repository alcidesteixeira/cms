<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

    public function posts(){

        //terceiro e quarto param são os q estão por defeito
        return $this->hasManyThrough('App\Post', 'App\User', 'country_id', 'user_id');
    }
}
