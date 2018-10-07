<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'FUser_name', 'LUser_name', 'User_Email', 'User_Mobile', 'User_Password', 'User_Age', 'User_Address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function medicine()
    {
        return $this->hasOne(Medicine::class);
    }

    public function getFullNameAttribute()
    {
        return $this->FUser_name . " " . $this->LUser_name;
    }
}
