<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Falla extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function prioridad()
    {
        return $this->belongsTo(prioridad::class, 'prioridad_id');
    }
  
}
