<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    public $timestamps = false;

    public function sites()
    {

        return $this->hasMany('App\Site');
    }

    public function transaction()
    {

        return $this->belongsTo('App\Transaction');
    }
}