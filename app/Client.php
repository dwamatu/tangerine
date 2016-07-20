<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function sites()
    {
        return $this->hasMany('App\Site');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
