<?php

namespace App\Http\Controllers;

use App\Models\Anexos;
use Illuminate\Http\Request;

class AnexosController extends Controller
{
    //listar todos os anexos por id
    public function exibirAnexos($id_postagem){
        $anexos = Anexos::find($id_postagem);

        dd($anexos);
       
        return view();
     }
}
