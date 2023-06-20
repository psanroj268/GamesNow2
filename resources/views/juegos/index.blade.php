@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Juegos</h3>
    </div>
<table id="juegos" class="table table-striped table-bordered shadow-lg mt-5" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Categoria</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($juegos as $juego)
        <tr>
            <td>{{ $juego->id }}</td>
            <td>{{ $juego->titulo }}</td>
            <td>{{ $juego->contenido }}</td>
            <td>{{ $juego->categoria }}</td>
            <td>
                <form action="{{ route ('juegos.destroy',$juego->id)}}" method="POST" class="formEliminar">
                    @can('editar-juego')
                    <a href="/juegos/{{ $juego->id }}/edit" class="btn btn-info">Editar</a>
                    @endcan

                    @csrf
                    @method('DELETE')
                    @can('borrar-juego')
                    <button class="btn btn-danger">Borrar</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</section>
@can('crear-juego')
<a href="juegos/create" class="btn btn-primary mb-3">Crear</a>
@endcan


@endsection

@section('css')
<link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    (function () {
    'use strict'

    var forms = document.querySelectorAll('.formEliminar')
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault()
                event.stopPropagation()
                Swal.fire({
                    title: '¿Confirma la eliminación',
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#20c997',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Confirmar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                        Swal.fire('Eliminado', 'Se ha eliminado el registro', 'success');
                    }
                })
            }, false)
        })
    })()
</script>

<script>
    $(document).ready(function() {
        $('#juegos').DataTable({
            "lengthMenu": [
                [5, 10, 50, -1],
                [5, 10, 50, "All"]
            ]
        });
    });
</script>
@stop