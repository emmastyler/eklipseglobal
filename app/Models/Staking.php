<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staking extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'email',
        'status',
        'month',
        'amount_stake',
        'time_left',
        'time_now'     
        
    ];
}
