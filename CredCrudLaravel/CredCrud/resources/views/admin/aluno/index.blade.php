@extends('layout.site')
@section('titulo','Cursos')
@section('conteudo')
<div class='container'>
    <h3 class='center'>Lista de Aluno </h3>
    <div class='row'>
        <table>
            <thead>
                <tr> <!-- CABECALHO -->
                    <td>Id</td>
                    <td>Nome</td>
                    <td>RA</td>
                    <td>Data de Nascimento</td>
                    <td>Foto</td>
                    <td>Celular</td>
                    <td>Email</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
                @foreach($rows as $row) <!-- LOOP PRA LER A TABELA -->
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->Nome }}</td>
                    <td>{{ $row->RA }}</td>
                    <td>{{ $row->DataNasc }}</td>
                    <td><img src="{{ asset($row->Foto) }}" alt="{{ $row->Nome }} " width="80"></td>
                    <td>{{ $row->Celular }}</td>
                    <td>{{ $row->Email }}</td>
                    <td> <!-- COLUNA COM ALTERAR E EXCLUIR -->
                        <a class='btn deep-orange' href="{{ route('admin.aluno.editar',$row->id) }}">Alterar</a>
                        <a class='btn rede' href="{{ route('admin.aluno.excluir',$row->id) }}">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class='row'> <!-- BOTAO ADICIONAR -->
        <a class='btn blue' href="{{ route('admin.aluno.adicionar')}}">Adicionar</a>
    </div>
</div>
@endsection