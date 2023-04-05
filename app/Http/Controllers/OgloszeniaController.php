<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ogloszenia;

class OgloszeniaController extends Controller
{
    public function index()
    {
        $ogloszenia = Ogloszenia::latest()->paginate(10);
        return view('ogloszenia/ogloszenia_main',[
            'ogloszenia' => $ogloszenia
        ]);
    }

    public function show($id)
    {
        $ogloszenie = Ogloszenia::find($id);

       return view('ogloszenia.ogloszenie', [
            'ogloszenie' => $ogloszenie
        ]);
    }
}