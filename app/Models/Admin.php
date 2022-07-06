<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'username',
        'password',
        'bit_address',
        'skrill_address',
        'bank_details',
        'address',
        'elps_price',
        'elps_total',
        
        
        
        
        
    ];
}
