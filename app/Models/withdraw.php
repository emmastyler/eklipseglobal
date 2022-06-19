<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class withdraw extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'email',
        'status',
        'withdraw_type',
        'withdraw_amount',
        'security_id',
        'skrill_address',
        'bitcoin_address'
        
        
    ];
}
