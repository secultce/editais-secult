<?php

namespace App\Http\Controllers;

use App\Models\Postagens;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\Failed;
use Illuminate\Support\Facades\DB;

class RegistroController extends Controller
{
    public function create()
    { 
        return view('auth.registro');
    }    
    public function store()
    {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8|max:18',
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);
        return redirect('/login');
    }

    
}
