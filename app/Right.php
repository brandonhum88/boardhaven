<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Right extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
