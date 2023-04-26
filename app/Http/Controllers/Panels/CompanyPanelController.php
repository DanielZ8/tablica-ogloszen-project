<?php

namespace App\Http\Controllers\Panels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Ogloszenia;

class CompanyPanelController extends Controller
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
}