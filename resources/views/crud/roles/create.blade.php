@extends('layouts.admin')
@section('title', 'Crear Rol')
@section('titlenav', 'Crear Rol')
@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h1>Nuevo Rol</h1>
                            <div class="float-right">
                                <a class='btn btn-info' href="{{route('roles.index')}}"><i class="fa-solid fa-arrow-left-long"></i> Volver</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        {!! Form::open(['route' => 'roles.store']) !!}

                                @include('crud.roles.form')


                            {!! Form::submit('Crear Usuario', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
