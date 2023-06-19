@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Alta de Usuarios</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        @if ($errors->any())
                        <div class="alert alert-dark alert-dismissible fade show-false" role="alert">
                            <strong>Revisa los campos!!!</strong>
                            @foreach ($errors->all() as $error)
                            <span class="badge badge-danger">{{$error}}</span>
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        <form action="/usuarios" method="PUT">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Nombre</label>
                                <input id="nombre" name="nombre" type="text" placeholder="Nombre..." class="form-control" tabindex="1">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">E-Mail</label>
                                <input id="email" name="email" type="text" placeholder="Email..." class="form-control" tabindex="2">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input id="password" name="password" type="text" class="form-control" tabindex="3">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Confirm Password</label>
                                <input id="confirm-password" name="confirm-password" type="text" class="form-control" tabindex="4">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Rol</label>
                                {!! Form::select('roles[]', $roles,[], array('class'=>'form-control')) !!}
                            </div>
                            <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
                            <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection