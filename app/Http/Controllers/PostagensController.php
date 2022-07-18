<?php

namespace App\Http\Controllers;

use App\Models\Anexos;
use App\Models\Postagem;
use App\Models\Postagens;
use Illuminate\Http\Request;

class PostagensController extends Controller
{
    public function inserirPostagem(Request $request)
    {
        // dd($request->nome);
        $data = [
            'nome' => $request->nome,
            'etapa' => $request->etapa,
            'valor' => $request->valor,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'categoria' => $request->categoria,
            'flag' => $request->flag,
            'arquivo' => $request->arquivo,

        ];

        if ($data) {
            $postg = Postagens::create($data);

            $anexoData = [
                'link' => $request->link,
                'texto' => $request->texto,
                'id_postagens' => $postg->id
            ];

            if ($anexoData) {
                Anexos::create($anexoData);
            }

            
            redirect()->to('/postagem');
        } else {
            dd('Dados incongruentes!');
        }
    }
}
