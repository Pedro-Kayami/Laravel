<div class="input-field">
    <input type="text" name="Nome" value="{{isset($linha->Nome) ? $linha->Nome : ''}}">
    <label>Nome</label>
</div>

<div class="input-field">
    <input type="text" name="RA" value="{{isset($linha->RA) ? $linha->RA : ''}}">
    <label>RA</label>
</div>

<div class="input-field">
    <input type="text" name="DataNasc" value="{{isset($linha->DataNasc) ? $linha->DataNasc : ''}}">
    <label>Data de Nascimento</label>
</div>

<div class="file-field  input-field">
    <div class="btn blue">
        <span>Foto</span>
        <input type="file" name="Foto">
    </div>

    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>

<div class="input-field">
    <input type="text" name="Celular" value="{{isset($linha->Celular) ? $linha->Celular : ''}}">
    <label>Celular</label>
</div>

<div class="input-field">
    <input type="text" name="Email" value="{{isset($linha->Email) ? $linha->Email : ''}}">
    <label>Email</label>
</div>



@if(isset($linha->Foto))
<div class="input-field">
    <img width="150" src="{{asset($linha->Foto)}}" />
</div>
@endif

<div class="input-field">
    <p>
        <label>
            <input type="checkbox" name="publicado" value="checked" {{ isset($linha->publicado) && $linha->publicado == 'sim' ? 'checked' : '' }}>
            <span>Publicar?</span>
        </label>
    </p>
    <br><br>
</div>