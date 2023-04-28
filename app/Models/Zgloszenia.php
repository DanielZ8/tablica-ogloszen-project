<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zgloszenia extends Model
{
    use HasFactory;
    protected $table = 'zgloszenia'; //nazwa pozostanie bez 's'
    protected $fillable =[
        'nadawca_id',
        'odbiorca_id',
        'ogloszenie_id',
        'wiadomosc',
        'wiadomosc_zwrotna',
        'status',
    ];

    public function user() //relacja z userem
    {
        return $this -> belongsTo(User::class);
    }

    public function ogloszenia() //relacja z ogloszeniem
    {
        return $this -> belongsTo(Ogloszenia::class);
    }
}
