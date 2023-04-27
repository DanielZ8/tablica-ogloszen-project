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
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|confirmed',
            'rola' => 'required'
        ]);

        $photo_id = rand(1,50);

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
            return redirect()->route('ogloszenia');
          }
          
    }
}