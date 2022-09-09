@extends('layouts.admin')
@section('title', 'Roles')
@section('titlenav', 'Roles')
@section('content')
<div class="container-fluid">
    <br><br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h1>Lista de Roles</h1>
                            <div class="float-right">
                                <a class='btn btn-info' href="{{route('roles.create')}}"><i class="fa-solid fa-plus"></i> Crear Rol</a>
                            </div>
                        </div>
                        @if(session('info'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('info')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table_id" class="table table-striped table-hover">
                                <thead>
                                    <tr>
										<th>ID</th>
										<th>Nombre</th>
                                        <th>Nombre en Pantalla</th>
                                        <th width="10px">Acciones</th>
                                        <th width="10px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>

											<td>{{ $role->id }}</td>
                                            <td>{{ $role->nombre }}</td>
                                            <td>{{ $role->nombre_pantalla }}</td>

                                            {{-- Acciones --}}

                                            <td>
                                                <a class="btn btn-sm btn-primary" href="{{ route('roles.edit', $role) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            </td>

                                            <td>
                                                <form action="{{route('roles.destroy',$role)}}" class="eliminar" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger eliminar" href="{{ route('roles.destroy',$role) }}"><i class="fa fa-fw fa-edit"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
										<th>ID</th>
										<th>Nombre</th>
                                        <th>Nombre en Pantalla</th>
                                        <th width="10px">Acciones</th>
                                        <th width="10px"></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $roles->links() !!}
            </div>
        </div>
    </div>

@endsection


@section('js')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function() {
$('#table_id').DataTable({
    "language": {

        "search":   "Buscar",
        "lengthMenu": "Mostrar _MENU_ registros por pagina",
        "info": "Mostrando pagina _PAGE_ de _PAGES_",
        "zeroRecords": "No se encontró registro.",

        "paginate":{
                "previous": "Anterior",
                "next": "Siguiente",
                "first": "Primero",
                "last": "Ultimo"
        }
    }
}
);
} );
</script>
<script>
    $('.eliminar').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#0099FF',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, ¡eliminarlo!',
        cancelButtonText: 'Cancelar',
        }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
        }
        })
    });
</script>
@endsection
