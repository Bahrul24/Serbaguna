<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles; // Import HasRoles trait
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements JWTSubject, MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles; // Tambahkan HasRoles

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Implementasi kontrak JWTSubject
    public function getJWTIdentifier()
    {
        // ID unik untuk user yang akan digunakan oleh JWT
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        // Anda bisa menambahkan klaim khusus di sini jika diperlukan
        return [];
    }
}
