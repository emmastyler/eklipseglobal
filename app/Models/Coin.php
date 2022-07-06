<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'email',
        'status',
        'month',
        'amount_lock',
        'time_left',
        'elps_lock',
        'time_now',
        'time_later'
        
        
        
    ];
}
