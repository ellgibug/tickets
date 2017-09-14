<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $fillable = [
        'name', 'info'
    ];

    public function conferences()
    {
        return $this->belongsToMany('App\Conference');
    }
}
