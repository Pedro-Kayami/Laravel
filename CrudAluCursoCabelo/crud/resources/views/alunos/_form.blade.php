<div class="input-field">
  <input type="text" name="matricula" value="{{isset($linha->matricula) ? $linha->matricula : ''}}">
  <label>Matricula</label>
</div>

<div class="input-field">
  <input type="text" name="nome" value="{{isset($linha->nome) ? $linha->nome : ''}}">
  <label>Nome</label>
</div>

<div class="file-field  input-field">
  <div class="btn blue">
    <span>Imagem</span>
    <input type="file" name="foto">
  </div>

  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>

@if(isset($linha->fotoaluno))
<div class="input-field">
  <img width="150" src="{{asset($linha->fotoaluno)}}" />
</div>
@endif

<div class="input-field">
  <input type="text" name="email" value="{{isset($linha->email) ? $linha->email : ''}}">
  <label>email</label>
</div>

