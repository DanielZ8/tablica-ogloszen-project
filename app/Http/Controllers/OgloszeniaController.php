<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ogloszenia;

class OgloszeniaController extends Controller
{
    public function show()
    {
        $ogloszenia = Ogloszenia::all();
        return view('ogloszenia/ogloszenia_main',[
            'ogloszenia' => $ogloszenia
        ]);
    }
}