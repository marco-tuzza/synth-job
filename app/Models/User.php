<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role',
        'first_name',
        'last_name',
        'company_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function company() 
    {
        return $this->hasOne('App\Models\Company');
    }

    public function worker() 
    {
        return $this->hasOne('App\Models\Worker');
    }

    public function license() 
    {
        return $this->belongsToMany('App\Models\License', 'users_has_licenses');
    }

    public function education() 
    {
        return $this->hasMany('App\Models\Education');
    }

    public function experience() 
    {
        return $this->hasMany('App\Models\Experience');
    }

    public function skill() 
    {
        return $this->hasMany('App\Models\Skill');
    }
}
