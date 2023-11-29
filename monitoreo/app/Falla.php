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
    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
