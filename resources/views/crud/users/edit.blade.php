@extends('layouts.admin')
@section('title', 'Editar Usuario')
@section('titlenav', 'Editar Usuario')
@section('content')
    <br><br>
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h1>Editar Usuario</h1>
                            <div class="float-right">
                                <a class='btn btn-info' href="{{route('users.index')}}"><i class="fa-solid fa-arrow-left-long"></i> Volver</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        {!! Form::model($User, ['route' => ['users.update', $User], 'method' => 'put']) !!}

                            @include('crud.users.form')

                            <label for="role_id">Rol</label>
                            <select name="role_id" class="form-control">
                                @foreach($roles as $role)
                                  <option value="{{ $role->id }}" {{ $role->id == $User->rol_id ? 'selected' : ''  }}>{{ $role->nombre }}</option>
                                @endforeach
                            </select>

                            @error('role_id')
                            <h5 class="text-danger">
                                {{$message}}
                            </h5>
                            @enderror

                            {!! Form::submit('Actualizar Usuario', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
