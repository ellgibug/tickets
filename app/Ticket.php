<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function conference()
    {
        return $this->belongsTo('App\Conference');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
