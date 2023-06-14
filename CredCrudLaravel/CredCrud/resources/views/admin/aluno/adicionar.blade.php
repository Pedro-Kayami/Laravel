@extends('layout.site')
@section('titulo','Aluno')
@section('conteudo')
<div class="container">
    <h3 class="center">Adicionar Aluno</h3>
    <div class="row">
        <form class="" action="{{route('admin.aluno.salvar')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.aluno._form')
            <button class="btn deep-orange">Salvar</button>
        </form>
    </div>
</div>
@endsection