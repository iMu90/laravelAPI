<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class food extends Model
{

    /*
     * this function will return all the comments object from the database that request by a food
     */
    public function comments()
    {
        return $this->hasMany('App\comment');
    }
}
