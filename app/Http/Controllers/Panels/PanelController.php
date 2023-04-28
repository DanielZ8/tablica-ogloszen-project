<?php

namespace App\Http\Controllers\Panels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Ogloszenia;
use App\Models\User;
use App\Models\Zgloszenia;

class PanelController extends Controller
{
    public function index()
    {
        $ogloszenia = Ogloszenia::where('user_id', '=', auth()->user()->id)->latest()->paginate(10);
        return view('company\company_active_ogloszenie',[
            'ogloszenia' => $ogloszenia
        ]);
    }

    public function private()
    {
        if(Gate::allows('firma', auth()->user()))
        {
            return view ('company\company_info');
        }
        else
        {
            abort(403); 
        }
    }

    public function index_company_add()
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
            return view ('company\company_add_ogloszenie');
        }
    }

    public function index_zgloszenia()
    {
        if(auth()->user()->rola == 'pracownik')
        {
            if (auth()->user()->photo == null 
            || auth()->user()->imie == null 
            || auth()->user()->nazwisko == null 
            || auth()->user()->opis == null)
            {
                return redirect('employee/info-update')->with('error_zgloszenia', 'Aby móc przeglądać i odpowiadać na zgłoszenia uzupełnij profil!');
            }
            else
            {
                $zgloszenia = Zgloszenia::where('nadawca_id', '=', auth()->user()->id)->latest()->paginate(10);
                return view('employee\employee_zgloszenia',[
                'zgloszenia' => $zgloszenia
                ]);
            }
        }
        else
        {
            if (auth()->user()->photo == null 
            || auth()->user()->nazwa_firmy == null 
            || auth()->user()->imie == null 
            || auth()->user()->nazwisko == null 
            || auth()->user()->opis == null)
            {
                return redirect('company/info-update')->with('error_zgloszenia', 'Aby móc przeglądać i odpowiadać na zgłoszenia uzupełnij profil!');
            }
            else
            {
                $zgloszenia = Zgloszenia::with('user')->where('odbiorca_id', '=', auth()->user()->id)->latest()->paginate(10);
                
                return view('company\company_zgloszenia',[
                'zgloszenia' => $zgloszenia
                ]);
            }
        }
        
    }

    public function index_logo_update()
    {
        if(auth()->user()->rola == 'pracownik')
        {
            return view ('employee\employee_logo_update');
        }
        elseif (auth()->user()->rola == 'firma')
        {
            return view ('company\company_logo_update');
        }
    }

    public function store_logo(Request $request)
    {
        $formFields = $request->validate([
            'logo' => 'required',
        ]);
         
        $user = User::find(auth()->user()->id);
        $image_name = date('mdYHis').uniqid().$request->file('logo')->getClientOriginalName();
        $request->file('logo')->storeAs('public/avatars', $image_name);
        $user->photo = 'storage/avatars/'.$image_name;
        $user->update(); 

        if(auth()->user()->rola == 'pracownik')
        {
            return redirect('employee/logo-update')->with('success', 'Avatar zaaktualizowano pomyślnie!');
        }
        else
        {
            return redirect('company/logo-update')->with('success', 'Logo zaaktualizowano pomyślnie!');
        }
    }

    public function store(Request $request)
    {
        if(auth()->user()->rola == 'pracownik')
        {
            #przy pierwszym logowaniu sprawdza czy logo istnieje
            #do update logo jest osobny widok
            if(auth()->user()->photo == null)
            {
                $formFields = $request->validate([
                    'logo' => 'required',
                    'imie' => 'required',
                    'nazwisko' => 'required',
                    'wiek' => 'required',
                    'opis' => 'required',
                ]);
            }
            else
            {
                $formFields = $request->validate([
                    'imie' => 'required',
                    'nazwisko' => 'required',
                    'wiek' => 'required',
                    'opis' => 'required',
                ]);
            }
            
            $user = User::find(auth()->user()->id);
            $user->imie = $request->imie;
            $user->nazwisko = $request->nazwisko;
            $user->wiek = $request->wiek;
            $user->opis = $request->opis;

            if(auth()->user()->photo == null)
            {
                $image_name = date('mdYHis').uniqid().$request->file('logo')->getClientOriginalName();
                $request->file('logo')->storeAs('public/avatars', $image_name);
                $user->photo = 'storage/avatars/'.$image_name;
            }

            $user->update(); 

            return redirect('employee/info-update')->with('success', 'Dane zaaktualizowano pomyślnie!');

        }

        else
        {
            #przy pierwszym logowaniu sprawdza czy logo istnieje
            #do update logo jest osobny widok
            if(auth()->user()->photo == null)
            {
                $formFields = $request->validate([
                    'logo' => 'required',
                    'nazwa_firmy' => 'required',
                    'imie' => 'required',
                    'nazwisko' => 'required',
                    'opis' => 'required',
                ]);
            }
            else
            {
                $formFields = $request->validate([
                    'nazwa_firmy' => 'required',
                    'imie' => 'required',
                    'nazwisko' => 'required',
                    'opis' => 'required',
                ]);
            }
            
            $user = User::find(auth()->user()->id);
            $user->nazwa_firmy= $request->nazwa_firmy;
            $user->imie = $request->imie;
            $user->nazwisko = $request->nazwisko;
            $user->opis = $request->opis;

            if(auth()->user()->photo == null)
            {
                $image_name = date('mdYHis').uniqid().$request->file('logo')->getClientOriginalName();
                $request->file('logo')->storeAs('public/avatars', $image_name);
                $user->photo = 'storage/avatars/'.$image_name;
            }

            $user->update(); 

            return redirect('company/info-update')->with('success', 'Dane zaaktualizowano pomyślnie!');

        }
    }

}