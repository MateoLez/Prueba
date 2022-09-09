@extends('layouts.admin')
@section('title', 'Usuarios')
@section('titlenav', 'Usuarios')
@section('content')
<div class="container-fluid">
    <br><br>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h1>Lista de Usuarios</h1>
                            <div class="float-right">
                                <a class='btn btn-info' href="{{route('users.create')}}"><i class="fa-solid fa-plus"></i> Crear Usuario</a>
                                <a class='btn btn-danger' href="users/pdf"><i class="fa-regular fa-file-pdf"></i>  PDF</a>
                                <a class='btn btn-success' href="users/excel"><i class="fa-regular fa-file-excel"></i>  Excel</a>
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
                                        <th>Cedula</th>
                                        <th>Email</th>
                                        <th>Rol</th>
                                        <th width="10px">Acciones</th>
                                        <th width="10px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>

											<td>{{ $user->id }}</td>
                                            <td>{{ $user->nombre }}</td>
                                            <td>{{ $user->cedula }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->Role->nombre }}</td>

                                            {{-- Acciones --}}

                                            <td>
                                                <a class="btn btn-sm btn-primary" href="{{ route('users.edit', $user->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                            </td>

                                            <td>
                                                <form action="{{route('users.destroy',$user)}}" class="eliminar" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger eliminar" href="{{ route('users.destroy',$user) }}"><i class="fa fa-fw fa-edit"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
										<th>ID</th>
										<th>Nombre</th>
                                        <th>Cedula</th>
                                        <th>Email</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $users->links() !!}
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
