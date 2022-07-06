<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'email',
        'status',
        'days',
        'amount',
        'time_left',
        'time_now',
        'time_future'   
        
    ];
}
