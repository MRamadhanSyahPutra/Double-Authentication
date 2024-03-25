<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class admin extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    use HasFactory, HasApiTokens, Notifiable;

    protected $fillable = [
        'nama_lengkap',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password ' => 'hashed',
    ];
}
