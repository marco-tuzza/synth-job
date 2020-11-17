<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'company',
        'description',
        'category_id',
        'start',
        'end',
        'user_id'
    ];

    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }
}
