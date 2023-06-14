<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    // MONTA TELA INICIAL
    public function index() {
        // na linha estamos fazendo um select
        // de cursos e dps
        // exportando todos esses dados dentro de linhas 
        $linhas = Curso::all();
        return view ('admin.cursos.index',compact('linhas'));
    }

    // CHAMA VISAO ADICIONAR
    public function adicionar() {
        return view('admin.cursos.adicionar');
    }

    // CHAMA VISAO EDITAR
    public function editar($id) {
        // repare que ele recebe o id da ROTA
        $linha = Curso::find($id);
    
        // carrega o registro (realiza um select e um fetch internamente)
        return view('admin.cursos.editar',compact('linha'));
        // manda o registro encontrado para ser editado na visão
    }
   

    public function atualizar(Request $req, $id)
    {
    $dados = $req->all();
    if(isset($dados['publicado'])){
    $dados['publicado'] = 'sim';
    }else{
    $dados['publicado'] = 'nao';
    }
    if($req->hasFile('imagem')){
    $imagem = $req->file('imagem');
    $num = rand(1111,9999);
    $dir = "img/cursos/";
    $ex = $imagem->guessClientExtension();
    $nomeImagem = "imagem_".$num.".".$ex;
    $imagem->move($dir,$nomeImagem);
    $dados['imagem'] = $dir."/".$nomeImagem;
    }
    Curso::find($id)->update($dados);
    return redirect()->route('admin.cursos');
    }


    public function salvar(Request $req)
    {
    $dados = $req->all();
    if(isset($dados['publicado'])){
    $dados['publicado'] = 'sim';
    }else{
    $dados['publicado'] = 'nao';
    }
    if($req->hasFile('imagem')){
    $imagem = $req->file('imagem');
    $num = rand(1111,9999);
    $dir = "img/cursos/";
    $ex = $imagem->guessClientExtension();
    $nomeImagem = "imagem_".$num.".".$ex;
    $imagem->move($dir,$nomeImagem);
    $dados['imagem'] = $dir."/".$nomeImagem;
    }
    Curso::create($dados);
    return redirect()->route('admin.cursos');
}

// CHAMA EXCLUSAO
public function excluir($id) {
    // repare que ele recebe o id da ROTA
    Curso::find($id)->delete();
    // apos selecionar o registro, é chamado o método DELETE do OBJETO registro
    // é mapeado internamente como um 'delete from' interno que rodara no BD
    return redirect()->route('admin.cursos');
    // abre a visão da lista de cursos
    
}
}
