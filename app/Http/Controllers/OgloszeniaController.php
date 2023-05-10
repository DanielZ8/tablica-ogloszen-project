<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ogloszenia;
use App\Models\Kategorie;

class OgloszeniaController extends Controller
{
    public function index()
    {
        $ogloszenia = Ogloszenia::latest()->paginate(10);
        $kategorie = Kategorie::all();
        return view('ogloszenia/ogloszenia_main',[
            'ogloszenia' => $ogloszenia,
            'kategorie' => $kategorie
        ]);
    }

    public function show($id)
    {
        $ogloszenie = Ogloszenia::find($id);
        $kategorie = Kategorie::all();

       return view('ogloszenia.ogloszenie', [
            'ogloszenie' => $ogloszenie,
            'kategorie' => $kategorie
        ]);
    }
    public function store(Request $request)
    {
        if (auth()->user()->photo == null 
        || auth()->user()->nazwa_firmy == null 
        || auth()->user()->imie == null 
        || auth()->user()->nazwisko == null 
        || auth()->user()->opis == null)
        {
            return redirect('company/info-update')->with('error_add', 'Aby móc dodać ogłoszenie uzupełnij profil!');
        }
        else
        {
         $formFields = $request->validate([
            'naglowek' => 'required',
            'kategoria' => 'required|exists:kategorie,nazwa',
            'stawka' => 'required|numeric',
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
    }

    public function search(Request $request)
    {
        $kategorie = Kategorie::all();
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
            'ogloszenia' => $ogloszenia,
            'kategorie' => $kategorie
        ]);
    }

    public function index_edit_ogloszenie(Request $request)
    {
        if($request -> ogloszenie_id == null)
        {
            return redirect('/company');
        }
        else{
            $kategorie = Kategorie::all();
            $ogloszenie = Ogloszenia::find($request->ogloszenie_id);

            if($ogloszenie->user_id == auth()->user()->id)
            {
                return view('company/company_edit_ogloszenie',[
                    'ogloszenie' => $ogloszenie,
                    'kategorie' => $kategorie
                ]);
            }
            else
            {
                return redirect('/company') -> with('error', 'Niedozwolona akcja');
            }
        }
        
    }

    public function edit_ogloszenie(Request $request)
    {
        $formFields = $request->validate([
            'naglowek' => 'required',
            'kategoria' => 'required|exists:kategorie,nazwa',
            'stawka' => 'required|numeric',
            'lokalizacja' => 'required',
            'wymagania' => 'required',
            'opis' => 'required',
         ]);
        
        $ogloszenie =Ogloszenia::find($request->ogloszenie_id);
        $ogloszenie->naglowek = $request->naglowek;
        $ogloszenie->kategoria = $request->kategoria;
        $ogloszenie->stawka = $request->stawka;
        $ogloszenie->lokalizacja = $request->lokalizacja;
        $ogloszenie->wymagania = $request->wymagania;
        $ogloszenie->opis = $request->opis;
        $ogloszenie->status = "aktualne";
        $ogloszenie->update(); 

        return redirect('company')->with('success', 'Ogloszenie edytowano pomyślnie!');
    }

    public function delete_ogloszenie(Request $request){

        $ogloszenie = Ogloszenia::find($request->ogloszenie_id);
        $ogloszenie->delete();
        return redirect('company')->with('success', 'Ogloszenie usunięto pomyślnie!');
    }
}