<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    public function users()
    {
        //un grupo pertenece a un usuario pero tmb tiene muchos usuarios (belongsToMany)
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
