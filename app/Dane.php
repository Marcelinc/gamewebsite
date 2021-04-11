<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dane extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
