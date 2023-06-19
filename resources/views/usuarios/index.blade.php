@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Usuarios</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <a href="usuarios/create" class="btn btn-warning">Crear</a>

                        <table class="table table-striped mt-2">
                            <thead style="background-color: #6777ef;">
                                <th style="display: none;">ID</th>
                                <th style="color:#fff;">Nombre</th>
                                <th style="color:#fff;">E-Mail</th>
                                <th style="color:#fff;">Rol</th>
                                <th style="color:#fff;">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach($usuarios as $usuario)
                                <tr>
                                    <td style="display: none;">{{$usuario->id}}</td>
                                    <td>{{$usuario->name}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td>
                                        @if(!empty($usuario->getRoleNames()))
                                        @foreach($usuario->getRoleNames() as $roleName)
                                        <h5><span class="badge badge-dark">{{$rolName}}</span></h5>
                                        @endforeach
                                        @endif
                                    </td>
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
                            {!! $usuarios->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection