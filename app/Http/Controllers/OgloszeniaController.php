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
    public function store(Request $request)
    {
         $formFields = $request->validate([
            'naglowek' => 'required',
            'kategoria' => 'required',
            'stawka' => 'required',
            'lokalizacja' => 'required',
            'wymagania' => 'required',
            'opis' => 'required',
         ]);
        
        $ogloszenie = new Ogloszenia;
        $ogloszenie->user_id = auth()->user()->id;
        $ogloszenie->naglowek = $request->naglowek;
        $ogloszenie->kategoria = $request->kategoria;
        $ogloszenie->stawka = $request->stawka;
        $ogloszenie->lokalizacja = $request->lokalizacja;
        $ogloszenie->wymagania = $request->wymagania;
        $ogloszenie->opis = $request->opis;
        $ogloszenie->status = "aktualne";
        $ogloszenie->save(); 

        return redirect('company/add')->with('success', 'Ogloszenie dodano pomyślnie!');
    }

    public function search(Request $request)
    {
        $ogloszenia = Ogloszenia::
        where(function($query) use($request){
            $query->orwhere('naglowek', 'LIKE', '%'.$request->search.'%') #wyszukuje kawalki stringow
            ->orwhere('opis', 'LIKE', '%'.$request->search.'%')
            ->orwhereHas('user', function($query) use($request){
                $query->where('nazwa_firmy', 'LIKE', '%'.$request->search.'%');  #w relacji do users
            });
        })
        ->where('kategoria', 'LIKE', $request->kategoria.'%')
        ->where('stawka', '>', $request->stawka.'%')
        ->where('lokalizacja', 'LIKE', $request->lokalizacja.'%')
        ->latest()
        ->paginate(10);
        return view('ogloszenia/ogloszenia_main',[
            'ogloszenia' => $ogloszenia
        ]);
    }
}