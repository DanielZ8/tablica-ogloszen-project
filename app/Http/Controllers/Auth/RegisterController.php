<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'imie' => 'required|max:255',
            'nazwisko' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|confirmed',
        ]);

        $photo_id = rand(1,50);

        User::create([
            'imie' => $request->imie,
            'nazwisko' => $request->nazwisko,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rola' => $request->rola,
            #dummy data, do uzupelnienia pozniej
            'photo' => "https://picsum.photos/id/".$photo_id."/400/400",
            'wiek' => 30,
            'opis' => 'REGISTER TEST',
            'nazwa_firmy' => 'REGISTER TEST',
          ]);
          
          auth()->attempt($request->only('email', 'password'));
          return redirect()->route('ogloszenia');
    }
}