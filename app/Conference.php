<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    public function ticket()
    {
        return $this->hasOne('App\Ticket');
    }

    public function speakers()
    {
        return $this->belongsToMany('App\Speaker');
    }
}
