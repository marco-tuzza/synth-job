<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'user_id',
        'phone_number',
        'p_iva',
        'description',
        'address',
        'province',
        'city'
    ];

    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }

    public function job() 
    {
        return $this->hasMany('App\Models\Job');
    }
}
