<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alunos;

class AlunoController extends Controller
{
    public function index()
    {
        $rows = Alunos::all();
        return view('admin.aluno.index', compact('rows'));
    }

    public function adicionar()
    {
        return view('admin.aluno.adicionar');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }
        if ($req->hasFile('Foto')) {
            $imagem = $req->file('Foto');
            $num = rand(1111, 9999);
            $dir = "img/aluno/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "Foto_" . $num . "." . $ex;
            $imagem->move($dir, $nomeImagem);
            $dados['Foto'] = $dir . "/" . $nomeImagem;
        }
        Alunos::create($dados);
        return redirect()->route('admin.aluno');
    }

    public function editar($id)
    {
        // repare que ele recebe o id da ROTA
        $linha = Alunos::find($id);
        // carrega o registro (realiza um select e um fetch internamente)
        return view('admin.aluno.editar', compact('linha'));
        // manda o registro encontrado para ser editado na visão
    }

    public function excluir($id)
    {
        // repare que ele recebe o id da ROTA
        Alunos::find($id)->delete();
        // apos selecionar o registro, é chamado o método DELETE do OBJETO registro
        // é mapeado internamente como um 'delete from' interno que rodara no BD
        return redirect()->route('admin.aluno');
        // abre a visão da lista de cursos
    }

    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }
        if ($req->hasFile('Foto')) {
            $imagem = $req->file('Foto');
            $num = rand(1111, 9999);
            $dir = "img/aluno/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "Foto_" . $num . "." . $ex;
            $imagem->move($dir, $nomeImagem);
            $dados['Foto'] = $dir . "/" . $nomeImagem;
        }
        Alunos::find($id)->update($dados);
        return redirect()->route('admin.aluno');
    }
}
