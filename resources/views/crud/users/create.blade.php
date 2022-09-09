@extends('layouts.admin')
@section('title', 'Crear Usuarios')
@section('titlenav', 'Crear Usuarios')
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h1>Nuevo Usuario</h1>
                            <div class="float-right">
                                <a class='btn btn-info' href="{{route('users.index')}}"><i class="fa-solid fa-arrow-left-long"></i> Volver</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        {!! Form::open(['route' => 'users.store']) !!}

                                @include('crud.users.form')

                            {{-- Roles --}}
                            <div class="form-group">
                                {!! Form::label('role_id', 'Correo') !!}
                                {!! Form::select('role_id', $roles, null, ['class' => 'form-control','placeholder' => 'Seleccione un Rol', 'required']) !!}

                            @error('role_id')
                                <h5 class="text-danger">
                                    {{$message}}
                                </h5>
                            @enderror
                            </div>

                            {!! Form::submit('Crear Usuario', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

