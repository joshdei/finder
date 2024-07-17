<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'userid',
        'profile_pic',
        'gender',
        'location',
        'state',
        'town',
        'country',
    ];
}
