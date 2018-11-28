<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public function phones()
    {
        return $this->hasMany(\App\Models\Phone::class);
    }
}