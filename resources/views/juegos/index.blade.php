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
                    <a href="juegos/create" class="btn btn-warning">Crear</a>

                        <table class="table table-striped mt-2">
                            <thead style="background-color: #6777ef;">
                                <th style="display: none;">ID</th>
                                <th style="color:#fff;">Titulo</th>
                                <th style="color:#fff;">Contenido</th>
                                <th style="color:#fff;">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach($juegos as $juego)
                                <tr>
                                    <td style="display: none;">{{$juego->id}}</td>
                                    <td>{{$juego->titulo}}</td>
                                    <td>{{$juego->contenido}}</td>
                                    <td>
                                        <form action="{{ route ('usuarios.destroy',$usuario->id)}}" method="POST">
                                            <a href="/usuarios/{{ $usuario->id }}/edit" class="btn btn-info">Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination justify-content-end">
                            {!! $juegos->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection