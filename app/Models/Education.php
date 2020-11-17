<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'institute',
        'description',
        'start',
        'end',
        'user_id'
    ];

    protected $table = 'educations';

    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }
}
