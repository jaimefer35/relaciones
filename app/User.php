<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Funcion para relacionar un perfil a un usuario
    //un usuario tiene (hasOne) un perfil
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function level()
    {
        //un usuario pertenece a(belongsTO) un nivel
        return $this->belongsTo(Level::class);
    }
    public function groups()
    {
        //un usuario pertenece a un grupo pero tmb tiene muchos grupos (belongsToMany)
        return $this->belongsToMany(Group::class)->withTimestamps();
    }
}
