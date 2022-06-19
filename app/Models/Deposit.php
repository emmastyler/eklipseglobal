<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'email',
        'status',
        'payment_type',
        'deposit_amount',
        'deposit_amount_bw',
        'deposit_amount_b',
        'deposit_amount_s'
        
    ];
}
