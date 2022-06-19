<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'bank_name',
        'account_number',
        'fullname',
        'status',
        'address',
        'balance',
        'bank_code',
        'security_id',
        'bitcoin_address',
        'skrill_address',
        'face_img',
        'bank_name_1',
        'account_number_1',
        'account_name_1',
        'bank_name_2',
        'account_number_2',
        'account_name_2',
        'bank_name_3',
        'account_number_3',
        'account_name_3',
        'bank_name_4',
        'account_number_4',
        'account_name_4',
        'kyc_status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
