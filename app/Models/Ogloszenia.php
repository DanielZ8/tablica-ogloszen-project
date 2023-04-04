<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ogloszenia extends Model
{
    use HasFactory;
    protected $table = 'ogloszenia'; //nazwa pozostanie bez 's'
    protected $fillable =[
        'naglowek',
        'kategoria',
        'stawka',
        'lokalizacja',
        'wymagania',
        'opis',
        'status',
    ];
    public function user() //relacja z userem
    {
        return $this -> belongsTo(User::class);
    }
}
