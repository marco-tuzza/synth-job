<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'birth_date',
        'sex',
        'phone_number',
        'user_id',
        'address',
        'province',
        'city'
    ];

    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }
}
