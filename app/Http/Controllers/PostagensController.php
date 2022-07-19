<?php

namespace App\Http\Controllers;

use App\Models\Anexos;
use App\Models\Postagens;
use Illuminate\Http\Request;

class PostagensController extends Controller
{
    public function inserirPostagem(Request $request)
    {

        //realizando upload da imagem
        if ($request->hasFile('arquivo')) {
            $nomeExtensao = $request->file('arquivo')->getClientOriginalName();
            $nomeArq = pathinfo($nomeExtensao, PATHINFO_FILENAME);
            $extensao = $request->file('arquivo')->getClientOriginalExtension();
            $novoNome = $nomeArq . '_' . time() . '.' . $extensao;
            $path = $request->file('arquivo')->storeAs('Editais', $novoNome);
        } else {
            $novoNome = 'Sem imagem.png';
        }

        $data = [
            'nome' => $request->nome,
            'etapa' => $request->etapa,
            'valor' => $request->valor,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'categoria' => $request->categoria,
            'flag' => $request->flag,
            'arquivo' => $novoNome,

        ];

        if ($data) {
            $postg = Postagens::create($data);

            $anexoData = [
                'link' => $request->link,
                'texto' => $request->texto,
                'id_postagens' => $postg->id,
            ];

            if ($anexoData) {
                Anexos::create($anexoData);

                return redirect('/listagem');
            }

        } else {
            dd('Dados incongruentes!');
        }
    }

    //listagem para pagina inicial dos editais
    public function listagemEditais()
    {
        $postagem = Postagens::simplePaginate(8);
        return view('editais', compact('postagem'));
    }

    //listagem para pagina do admin
    public function listagem()
    {
        $postagem = Postagens::simplePaginate(16);

        return view('listagem', compact('postagem'));
    }

    public function editaisDesativados()
    {
        $desativados = Postagens::simplePaginate(10);

        if (request(['flag']) == 'Desativado') {
            return view('desativados', compact('desativados'));
        } else {
            dd('Não existe nenhum edital desativado');
        }

    }

    public function paginaSimples($id)
    {
        if(!$post = Postagens::find($id)){
            return redirect()->back();
        }

        /* $post = Postagens::find($id); */
        $anexos = Anexos::find($id);

        return view('/single', compact('post', 'anexos'));
    }

}
