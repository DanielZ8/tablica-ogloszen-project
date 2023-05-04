<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorie extends Model
{
    use HasFactory;
    protected $table = 'kategorie'; //nazwa pozostanie bez 's'
    protected $fillable =[
        'nazwa',
    ];
}
