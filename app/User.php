<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password', 'avatar', 'gender', 'faith', 'address',
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

    public function roles()
    {
        return $this->belongsTo('App\Role', 'role_id');
    }

    public function grades()
    {
        return $this->belongsToMany('App\Grade');
    }

    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    public function logs()
    {
        return $this->hasOne('App\UserLog', 'user_id', 'id');
    }

    public function courses()
    {
        return $this->hasMany('App\Course');
    }

    public function answes()
    {
        return $this->hasMany('App\Answer');
    }

    public function assessments()
    {
        return $this->hasMany('App\Assesment');
    }

    public function hasRole($roles)
    {
        if(is_array($roles)){
            foreach ($roles as $value) {
                if($this->checkUserRole($value)){
                    return true;
                }
            }
        }
        return false;
    }

    public function getUserRole()
    {
        return $this->roles()->getResults()->name;
    }

    public function checkUserRole($role)
    {
        return $role == $this->getUserRole() ? true : false;
    }
}
