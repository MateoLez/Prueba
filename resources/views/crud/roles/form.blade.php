{{-- Nombre --}}
<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','placeholder' => 'Ingrese el Nombre del rol', 'required']) !!}

@error('nombre')
    <h5 class="text-danger">
        {{$message}}
    </h5>
@enderror
</div>

{{-- Cedula --}}
<div class="form-group">
    {!! Form::label('nombre_pantalla', 'Nombre en Pantalla') !!}
    {!! Form::text('nombre_pantalla', null, ['class' => 'form-control','placeholder' => 'Ingrese el Nombre en Pantalla del rol', 'required', ]) !!}

@error('nombre_pantalla')
    <h5 class="text-danger">
        {{$message}}
    </h5>
@enderror
</div>
