<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depto extends Model
{
   protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }
    public function users()
    {
        return $this->hasMany(\App\User::class);
    }
}
