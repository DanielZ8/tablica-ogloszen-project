<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|confirmed|max:255',
            'rola' => 'required|max:255'
        ]);

        if($request-> rola == "pracownik" || $request-> rola == "firma" )
        {
          User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rola' => $request->rola,
          ]);
          
          auth()->attempt($request->only('email', 'password'));
          if( $request->rola == 'firma')
          {
            return redirect()->route('company-info-update');
          }
          else
          {
            return redirect()->route('employee-info-update');
          }  
        }
        else
        {
          return redirect('/register')->with('error', 'Błędna rola. Wybierz pracownik lub firma!');
        }
    }

    public function change_password_index()
    {
      if(Auth::user())
      {
        return view('auth/change_password');
      }
      else
      {
        return redirect('ogloszenia');
      }
    }

    public function change_password(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'stare_hasło' => 'required|max:255',
            'password' => 'required|confirmed',
        ]);

        if($request->email == auth()->user()->email && Hash::check($request->stare_hasło, auth()->user()->password))
        {

          User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
          ]);
          
          if( auth()->user()->rola == 'firma')
          {
            return redirect('company')->with("success", "Hasło zmienione pomyślnie!");
          }
          else
          {
            return redirect('employee')->with("success", "Hasło zmienione pomyślnie!");
          }  
        }
        else
        {
          return redirect()->route('change_password')->with("error", "Podane dane są nieprawidłowe, spróbuj ponownie!");
        }
    }

    public function change_email_index()
    {
      if(Auth::user())
      {
        return view('auth/change_email');
      }
      else
      {
        return redirect('ogloszenia');
      }
    }

    public function change_email(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
            'nowy_email' => 'required|email|max:255|unique:users,email',
        ]);

        if($request->email == auth()->user()->email && Hash::check($request->password, auth()->user()->password))
        {

          User::whereId(auth()->user()->id)->update([
            'email' => $request->nowy_email,
          ]);
          
          if( auth()->user()->rola == 'firma')
          {
            return redirect('company')->with("success", "Email zmioniony pomyślnie!");
          }
          else
          {
            return redirect('employee')->with("success", "Email zmioniony pomyślnie!");
          }  
        }
        else
        {
          return redirect()->route('change_email')->with("error", "Podane dane są nieprawidłowe, spróbuj ponownie!");
        }
    }
}