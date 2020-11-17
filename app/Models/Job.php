<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'description',
        'company_id',
        'address',
        'province',
        'city',
        'latitude',
        'longitude',
    ];

    public function company() 
    {
        return $this->belongsTo('App\Models\Company');
    }

    public function application() 
    {
        return $this->hasMany('App\Models\Application');
    }
}
