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
            'arquivo' => $request->arquivo
            
        ]; 

        if($request->hasFile('arquivo')){
            $destination_path = 'public/Editais';
            $image = $request->file('arquivo');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('arquivo')->storeAs($destination_path, $image_name);
            $input['arquivo'] = $image_name;
        }

        if ($data) {
            $postg = Postagens::create($data);

            $anexoData = [
                'link' => $request->link,
                'texto' => $request->texto,
                'id_postagens' => $postg->id
            ];

            if ($anexoData) {
                Anexos::create($anexoData);

                return redirect('/listagem');
            }
 
        } else {
            dd('Dados incongruentes!');
        }
    }

    public function listagemEditais()
    {
        $postagem = Postagens::simplePaginate(8);
        return view('editais', compact('postagem'));
    }
}
