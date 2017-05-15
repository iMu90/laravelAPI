<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{

    // return all food objects from the database under specified menu
    public function foods()
    {
        return $this->hasMany('App\food');
    }
}
