@extends('layouts.invitado')
@section('content')

{{-- Inicio --}}
<section>
    <div class="header">

        {{-- Eslogan --}}
        <div class="inner-header flex">
            <div class="headline">
            <h1 style="font-weight: 900;">Eslogan Empresa</h1>
            </div>
        </div>

        <!--Olas Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>

                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>

    </div>
</section>


<section id="contactanos">
    <div class="wrapperc"><br>
        <div class="container">
            <div class="section-contact" style="margin-top: 5em">

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <div class="header-section text-center">
                            {{-- Titulo Contactanos --}}
                            <h2 class="title">¿Quieres Saber Más?
                                <span class="big-title">CONTÁCTANOS</span>
                            </h2>
                            {{-- Texto Contenido --}}
                            <p class="description">Complete el formulario y nos pondremos en contacto en el menor tiempo posible, para enfrentar juntos los retos de tu empresa.</p>
                        </div>
                    </div>
                </div>

                <div class="form-contact">
                    {{-- Formulacion de Contacto --}}
                    <form action="" method="POST">
                        <!-- Token Post -->
                        @csrf
                        <div class="row">
                            {{-- Nombre --}}
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="nombre" placeholder="Ingresa tu Nombre" onkeypress="return soloLetras(event)"
                                    pattern="[a-zA-ZÀ-ÿ\s]{1,18}" maxlength="18" title="Nombre es requerido" required>
                                </div>
                            </div>
                            {{-- Correo --}}
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-envelope"></i>
                                    <input type="text" name="correo" placeholder="Ingresa tu Correo"
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Debe contener '@' y '.' y es requerido"  maxlength="30" required>
                                </div>
                            </div>
                            {{-- Celular --}}
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-phone"></i>
                                    <input type="text" name="celular" placeholder="Ingresa tu celular" title="Celular es requerido"
                                    pattern="[0-9]{6,12}" title="Minimo 6 numeros y maximo 12" onkeypress="return numeros(event)" maxlength="12" required>
                                </div>
                            </div>
                            {{-- Empresa --}}
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-check"></i>
                                    <input type="text" name="empresa" placeholder="Ingresa tu empresa" onkeypress="return soloLetras(event)"
                                    pattern="[a-zA-ZÀ-ÿ\s]{1,18}" maxlength="25">
                                </div>
                            </div>
                            {{-- Descripción de Solicitud --}}
                            <div class="col-12">
                                <div class="single-input">
                                    <i class="fas fa-comment-dots"></i>
                                    <textarea name="mensaje" placeholder="Ingresar una breve descripcion del servicio que quieres cotizar"></textarea>
                                </div>
                            </div>
                            {{-- Boton Enviar --}}
                            <div class="col-12">
                                <div class="submit-input text-center">
                                    <input type="submit" name="submit" value="ENVIAR">
                                </div>
                            </div>

                        </div>
                    </form>

                    <!-- Mensaje si se envio correctamente -->
                    @if(session('enviado'))
                    <script>
                        Swal.fire(
                        '¡Mensaje enviado Correctamente!',
                        'Nos pondremos en contacto lo mas pronto posible',
                        'success'
                    )
                    </script>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
