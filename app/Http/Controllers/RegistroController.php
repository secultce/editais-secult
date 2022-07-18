<?php

namespace App\Http\Controllers;

use App\Models\Postagens;
use Illuminate\Http\Request;
use App\Models\User;
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
            'password' => 'required|confirmed',

        ]);
        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);
        return view('auth.registro');
    }

    public function listagem()
    {
        $postagem = Postagens::simplePaginate(5);

        return view('listagem', compact('postagem'));
    }
}
