@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Edita tus Categorias</h3>
    </div>
<form action="/categorias/{{$categoria->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" placeholder="Nombre de tu categoria" class="form-control" value="{{$categoria->nombre}}" tabindex="1">
    </div>
    <a href="/categorias" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
</section>
@endsection