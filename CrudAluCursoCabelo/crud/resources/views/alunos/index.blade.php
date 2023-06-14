@extends('layout.site')
@section('titulo','Alunos')

@section('rota')
<a href={{ route('alunos') }}>Alunos</a>
@endsection

@section('conteudo')
    <div class='container'>
    <h3 class='center'>Lista de Alunos</h3>
    <div class='row'>
    <table>
    <thead>
    <tr> <!-- CABECALHO -->
    <td>Id</td>
    <td>Matricula</td><td>Nome</td>
    <td>Imagem</td><td>email</td>
    <td>A��o</td>
    </tr>
    </thead>
    <tbody>
    @foreach($linhas as $row) <!-- LOOP PRA LER A TABELA -->
    <tr>
    <td>{{ $row->id }}</td><td>{{ $row->matricula }}</td><td>{{ $row->nome }}</td>
    <td><img src="{{ asset($row->fotoaluno) }}" width=100 alt="{{ $row->nome }}"></td><td>{{ $row->email }}</td>
 
    <td> <!-- COLUNA COM ALTERAR E EXCLUIR -->
    <a class='btn deep-orange' href="{{ route('alunos.editar',$row->id) }}">Alterar</a>
    <a class='btn rede' href="{{ route('alunos.excluir',$row->id) }}">Excluir</a>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    <div class='row'> <!-- BOTAO ADICIONAR -->
    <a class='btn blue' href="{{ route('alunos.adicionar')}}">Adicionar</a>
    </div>
    </div>
@endsection