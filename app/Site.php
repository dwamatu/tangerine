<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function transaction()
    {
        return $this->hasOne('App\Transaction');
    }

    public function status()
    {

        return $this->belongsTo('App\Status');
    }


}
