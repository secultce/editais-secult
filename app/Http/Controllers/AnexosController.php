<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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


     public function addAnexos(Request $request){
        $anexoData = [];

      //e nesse for basicamente percorremos todas as posições do que vier do formulário na posição de texto (poderia ser link tbm)
      // e o array declarado acima é populado, a cada passo do for em cada posição adicionada no form.
      for ($i = 0; $i < count($request['texto']); $i++) {
        $anexoData[] = [
          'link' => $request['link'][$i],
          'texto' => $request['texto'][$i],
         /*  'id_postagens' => $postg->id, */
        ];
      }

      try {
        DB::table('anexos')->insert($anexoData);
        $request->session()->flash(
          'Mensagem',
          "Anexo(s) inserido(s) com sucesso!"
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
