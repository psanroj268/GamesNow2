@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Crea tus Juegos</h3>
    </div>
<form action="/juegos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="titulo" name="titulo" type="text" placeholder="Nombre de tu juego" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="contenido" name="contenido" type="text" placeholder="Descripción..." class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Categoria</label>
        <input id="categoria" name="categoria" type="text" placeholder="Descripción..." class="form-control" tabindex="2">
    </div>
    <a href="/juegos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
</section>
@endsection