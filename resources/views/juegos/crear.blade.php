@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Juegos</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="/juegos/store" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nombre</label>
                                <input id="nombre" name="nombre" type="text" placeholder="Nombre de tu juego" class="form-control" tabindex="1">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Descripción</label>
                                <input id="descripcion" name="descripcion" type="text" placeholder="Descripción..." class="form-control" tabindex="2">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Categoria</label>
                                <input id="categoria" name="categoria" type="text" class="form-control" tabindex="3">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Plataforma</label>
                                <input id="plataforma" name="plataforma" type="text" class="form-control" tabindex="4">
                            </div>
                            <a href="/juegos" class="btn btn-secondary" tabindex="5">Cancelar</a>
                            <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection