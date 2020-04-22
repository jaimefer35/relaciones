<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    public function users()
    {
        //un nivel tiene muchos (hasmany) usuarios
        return $this->hasMany(User::class);
    }
}
