<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zgloszenia;
use Illuminate\Support\Facades\Auth;

class ZgloszeniaController extends Controller
{
    public function store(Request $request)
    {
        if (auth()->user()->photo == null 
        || auth()->user()->imie == null 
        || auth()->user()->nazwisko == null 
        || auth()->user()->opis == null)
        {
            return redirect('employee/info-update')->with('error_add', 'Aby móc aplikowac uzupełnij profil!');
        }
        else
        {

         $formFields = $request->validate([
            'wiadomosc' => 'required',
         ]);
        
        $zgloszenie = new Zgloszenia;
        $zgloszenie->nadawca_id= auth()->user()->id;
        /* $zgloszenie->odbiorca = $request->naglowek; */
        $zgloszenie->odbiorca_id = $request->odbiorca_id;
        $zgloszenie->ogloszenie_id = (int)$request->ogloszenie_id;
        $zgloszenie->wiadomosc = $request->wiadomosc;
        $zgloszenie->status = "oczekujace";
        $zgloszenie->save(); 

        return redirect('employee/zgloszenia')->with('success', 'Zgłoszenie wysłano pomyślnie!');
        }
    }

    public function show($id)
    {
        $zgloszenie = Zgloszenia::find($id);

        if($zgloszenie == !null AND Auth::user())
            if($zgloszenie -> odbiorca_id == auth()->user()->id || $zgloszenie -> nadawca_id == auth()->user()->id )
            {
                return view('zgloszenie', [
                    'zgloszenie' => $zgloszenie
                ]);
            }
            else
            {
                return redirect('ogloszenia');
            }
        else
        {
            return redirect('ogloszenia');
        }
    }

    public function update(Request $request)
    {
         $formFields = $request->validate([
            'wiadomosc_zwrotna' => 'required',
         ]);
         
        $zgloszenie = Zgloszenia::find((int)$request->zgloszenie_id);
       
        $zgloszenie->wiadomosc_zwrotna = $request->wiadomosc_zwrotna;
        $zgloszenie->status = $request->status;
        $zgloszenie->update(); 

        return redirect('company/zgloszenia')->with('success', 'Odpowiedź przesłana pomyślnie!');
        
    }
}
