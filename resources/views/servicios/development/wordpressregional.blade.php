<link href='/css/hosting/basico.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

@extends('layouts.new')

@section('content')

    <div class='container-fluid'>



                <a href='/'><img class='ssn' src='/css/img/ssn.png' width="60"></a>
                <div class='title'>

                    <h4 class='hi'> Has escogido nuestro </h4>

                    <img class='reparacion' src='/css/img/regionalV.png' width='85' height='100'>

                    <h4 class='service'> Servicio de Desarrollo en Wordpress (regional). </h4>

                </div>

                <h4 class='hi'> Completa este formulario y te contactaremos cuanto antes </h4>

                <div class='row justify-content-center'>
                    <div class='col-md-8'>
                        @if (session('mensaje'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('mensaje') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    </div>
                </div>

                <div class='row justify-content-center'>

                    <div class='col-md-4'>
                        <form method='post' action='{{ Route('development.store') }}'>
                            @csrf
                            <!-- Nombre -->
                            <div class="form-group">
                              <label class='labeli' for="nombre">Nombre</label>
                              <input autocomplete="off" value='{{ old('nombre') }}' name='nombre' type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" placeholder="Nombre">
                            </div>
                            <!-- Apellido -->
                            <div class="form-group">
                                <label class='labeli' for="nombre">Apellido</label>
                                <input autocomplete="off" value='{{ old('apellido') }}' name='apellido' type="text" class="form-control @error('apellido') is-invalid @enderror" id="apellido" placeholder="Apellido">
                            </div>
                            <!-- Teléfono -->
                            <div class="form-group">
                                <label class='labeli' for="nombre">Teléfono</label>
                                <input autocomplete="off" value='{{ old("telefono") }}' name='telefono' class="form-control @error('telefono') is-invalid @enderror" id="telefono" placeholder="0414-1234567">
                            </div>
                            <!-- Whatsapp -->
                            <p class='labeli'>¿Tienes Whatsapp?</p>
                            <div class="row rowi2 justify-content-center">
                                <div class="form-check form-check-inline">

                                        <div class="col-1"></div>
                                        <div class="col-4">
                                            <label class="form-check-label text-muted" for="si">Sí</label>
                                            <input @if(old('whatsapp')=='1') checked   @endif value='1'
                                            name='whatsapp' type="radio" class="form-check-input" id="si">
                                        </div>
                                        <div class="col-2"></div>
                                        <div class="col-4">
                                            <label class="form-check-label text-muted" for="no">No</label>
                                            <input  @if(old('whatsapp')=='0') checked   @endif  value='0'
                                             name='whatsapp' type="radio" class="form-check-input" id="no">
                                        </div>
                                        <div class="col-1"></div>

                                </div>
                                @if ($errors->has('whatsapp'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        Por favor, <strong>elija una opción.</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label class='labeli' for="nombre">Correo </label>
                                <input autocomplete="off" value='{{ old('correo') }}' name='correo' type="email" class="form-control @error('correo') is-invalid @enderror" placeholder="email@mail.com">
                            </div>

                            <!-- Mensaje -->
                            <div class="form-group">
                                <label class='labeli' for="mensaje">Mensaje </label>
                                <textarea rows='2' name='mensaje' type="email" class="form-control @error('mensaje') is-invalid @enderror" id="mensaje">{{ old('mensaje') }}</textarea>
                            </div>
                            <!-- Hidden Plan, just for testing purposes -->
                            <input name='tipo' type='text' value={{ $tipo }} hidden>
                            <input name='plan' type='text' value={{ $plan }} hidden>

                            <button class='btn btn-outline-primary btn-block sendi'> Enviar </button>
                        </form>
                    </div>

                </div>

    </div>


@endsection