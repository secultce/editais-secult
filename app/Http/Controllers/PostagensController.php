<?php

namespace App\Http\Controllers;

use App\Models\Anexos;
use App\Models\Postagens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

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

      //aqui definimos o array fora do escopo do for, para que ele fique disponível para o insert
      $anexoData = [];

      
      //e nesse for basicamente percorremos todas as posições do que vier do formulário na posição de texto (poderia ser link tbm)
      // e o array declarado acima é populado, a cada passo do for em cada posição adicionada no form.
      for ($i = 0; $i < count($request['texto']); $i++) {
        $anexoData[] = [
          'link' => $request['link'][$i],
          'texto' => $request['texto'][$i],
          'id_postagens' => $postg->id,
        ];
      }

      //com o try e catch, utilizando o template com insert conseguimos inserir todos os itens contidos no array que foi populado dentro do for
      //daria pra fazer de outra forma, mas acho essa mais limpa, e caso dê erro cai no catch, ao invés do else
      try {
        DB::table('anexos')->insert($anexoData);
        $request->session()->flash(
          'Mensagem',
          "Edital inserido com sucesso!"
        );
        return redirect('/listagem');
      } catch (\Exception $e) {
        $request->session()->flash(
          'Mensagem',
          "OOOPS!" . $e
        );
      }
    }
  }

  //listagem para pagina inicial dos editais
  public function listagemEditais()
  {
    $postagem = Postagens::orderBy('id', 'desc')
      ->where('flag', 'Ativado')
      ->simplePaginate(16);
    return view('editais', compact('postagem'));
  }

  //listagem para pagina do admin
  public function listagem()
  {
    $postagem = Postagens::orderBy('id', 'desc')
      ->where('flag', 'Ativado')
      ->simplePaginate(16);

    return view('listagem', compact('postagem'));
  }


  public function editaisDesativados()
  {
    $desativados = Postagens::where('flag', 'Desativado')->get();
    return view('/desativados', compact('desativados'));
  }

  public function paginaSimples($id)
  {
    if (!$post = Postagens::find($id)) {
      return redirect()->back();
    }

    /* $post = Postagens::find($id); */
    $anexos = Anexos::find($id);

    return view('/single', compact('post', 'anexos'));
  }

  public function desativarEdital($id)
  {
    Postagens::where('flag', 'Ativado')
      ->update(['flag' => 'Desativado']);
  }
}
