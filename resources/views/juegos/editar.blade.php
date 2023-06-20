@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Edita tus Juegos</h3>
    </div>
<form action="/juegos/{{$juego->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="titulo" name="titulo" type="text" placeholder="Nombre de tu juego" class="form-control" value="{{$juego->titulo}}" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input id="contenido" name="contenido" type="text" placeholder="Descripción..." class="form-control" value="{{$juego->contenido}}" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Categoria</label>
        <input id="categoria" name="categoria" type="text" class="form-control" value="{{$juego->categoria}}" tabindex="3">
    </div>
    <a href="/juegos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
</section>
@endsection