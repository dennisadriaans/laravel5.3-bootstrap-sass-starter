<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function properties()
    {
        return $this->hasMany('App\CategoryProperty');
    }
}
