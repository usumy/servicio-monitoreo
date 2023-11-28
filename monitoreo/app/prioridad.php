<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prioridad extends Model
{
   protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
