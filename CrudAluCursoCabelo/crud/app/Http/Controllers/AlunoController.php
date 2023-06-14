<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index() {
        $linhas = Aluno::all();
        return view ('alunos.index',compact('linhas'));
    }

    public function adicionar() {
        return view('alunos.adicionar');
    }

    public function editar($id) {
        $linha = Aluno::find($id);
        return view('alunos.editar',compact('linha'));
    }


    public function atualizar(Request $req, $id)
    {
        $dados = $req->all();
        if($req->hasFile('foto')){
        $imagem = $req->file('foto');
        $num = rand(1111,9999);
        $dir = "img/alunos/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['fotoaluno'] = $dir."/".$nomeImagem;
        }
        Aluno::find($id)->update($dados);
        return redirect()->route('alunos');
    }

    public function salvar(Request $req)
    {
        $dados = $req->all();
        if($req->hasFile('foto')){
        $imagem = $req->file('foto');
        $num = rand(1111,9999);
        $dir = "img/alunos/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['fotoaluno'] = $dir."/".$nomeImagem;
        }
        Aluno::create($dados);
        return redirect()->route('alunos');
    }

    public function excluir($id) {
        Aluno::find($id)->delete();
        return redirect()->route('alunos');
    }
   
}
