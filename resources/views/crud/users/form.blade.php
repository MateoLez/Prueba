{{-- Nombre --}}
<div class="form-group">
    {!! Form::label('nombre', 'Nombre') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control','placeholder' => 'Ingrese el Nombre del usuario', 'required']) !!}

@error('nombre')
    <h5 class="text-danger">
        {{$message}}
    </h5>
@enderror
</div>

{{-- Cedula --}}
<div class="form-group">
    {!! Form::label('cedula', 'Cedula') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control','placeholder' => 'Ingrese la Cedula del Usuario', 'required', ]) !!}

@error('cedula')
    <h5 class="text-danger">
        {{$message}}
    </h5>
@enderror
</div>

{{-- email --}}
<div class="form-group">
    {!! Form::label('email', 'Correo') !!}
    {!! Form::email('email', null, ['class' => 'form-control','placeholder' => 'Ingrese el Correo del Usuario' , 'required']) !!}

@error('email')
    <h5 class="text-danger">
        {{$message}}
    </h5>
@enderror
</div>

{{-- Contraseña --}}
<div class="form-group">
    <label for="password">Contraseña</label>
    <input type="password" name="password" class="form-control" placeholder="Ingrese la Contraseña del Usuario">

@error('password')
    <h5 class="text-danger">
        {{$message}}
    </h5>
@enderror
</div>




