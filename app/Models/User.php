<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'photo',
        'rola',
        'imie',
        'nazwisko',
        'wiek',
        'opis',
        'nazwa_firmy',
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

    public function ogloszenia()
    {
        return $this->hasMany(Ogloszenia::class);
    }

    public function nadawca()
    {
        return $this->hasMany(Zgloszenia::class, 'nadawca_id', 'id');
    }

    public function odbiorca()
    {
        return $this->hasMany(Zgloszenia::class, 'odbiorca_id', 'id');
    }
}
