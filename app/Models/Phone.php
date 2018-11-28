<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public function people()
    {
        return $this->belongsTo(\App\Models\People::class);
    }
}