<link href='/css/soporte.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

@extends('layouts.new')

@section('content')

    <div class='container-fluid'>



                <a href='/'><img class='ssn' src='/css/img/ssn.png' width="60"></a>
                <div class='title'>

                    <h4 class='hi'> Has escogido nuestro </h4>

                    <img class='reparacion' src='./css/img/reparacion.png' width='85'>

                    <h4 class='service'> Servicio técnico para pc y laptop. </h4>

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


                        <form method='post' action='{{ Route('soporte.store') }}'>
                            @csrf
                            <!-- Nombre -->
                            <div class="form-group">
                              <label class='labeli ' for="nombre">Nombre</label>
                                <input value='{{ old('nombre') }}' autocomplete='off' name='nombre' type="text" class="form-control @error("nombre") is-invalid @enderror" id="nombre" placeholder="Nombre">
                            </div>
                            <!-- Apellido -->
                            <div class="form-group">
                                <label class='labeli' for="nombre">Apellido</label>
                                <input value='{{ old('apellido') }}' autocomplete='off' name='apellido' type="text" class="form-control @error("apellido") is-invalid @enderror" id="apellido" placeholder="Apellido">
                            </div>
                            <!-- Teléfono -->
                            <div class="form-group">
                                <label class='labeli' for="nombre">Teléfono</label>
                                <input value='{{ old('telefono') }}' autocomplete='off' name='telefono' class="form-control @error("telefono") is-invalid @enderror" id="telefono" placeholder="0414-1234567">
                            </div>
                            <!-- Whatsapp -->
                            <p class='labeli'>¿Tienes Whatsapp?</p>
                            <div class="row rowi2 justify-content-center">
                                <div class="form-check form-check-inline">

                                        <div class="col-1"></div>
                                        <div class="col-4">
                                            <label class="form-check-label text-muted" for="si">Sí</label>
                                            <input  {{ old('whatsapp') == '1' ? 'checked' : '' }}
                                                    name='whatsapp' type="radio" class="form-check-input" id="si" value="1">
                                        </div>
                                        <div class="col-2"></div>
                                        <div class="col-4">
                                            <label class="form-check-label text-muted" for="no">No</label>
                                            <input {{ old('whatsapp') == '0' ? 'checked' : '' }}
                                             name='whatsapp' type="radio" class="form-check-input" id="no" value="0">
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
                                <input value='{{ old('correo') }}' autocomplete='off' name='correo' type="email" class="form-control @error("correo") is-invalid @enderror" id="telefono" placeholder="email@mail.com">
                            </div>
                            <!-- Equipo -->
                            <p class='labeli'>¿Qué equipo tienes?</p>
                            <div class="row rowi2 justify-content-center">
                                <div class="form-check form-check-inline">
                                        <div class="col-1"></div>
                                        <div class="col-6">
                                            <label class="form-check-label text-muted" for="computadora">Computadora</label>
                                            <input {{ old('equipo') === 'computadora' ? 'checked' : '' }}
                                             value='computadora' name='equipo' type="radio" class="form-check-input" id="computadora">
                                        </div>
                                        <div class="col-1"></div>
                                        <div class="col-4">
                                            <label class="form-check-label text-muted" for="laptop">Laptop</label>
                                            <input  {{ old('equipo') === 'laptop' ? 'checked' : '' }}
                                             value='laptop' name='equipo' type="radio" class="form-check-input" id="laptop">
                                        </div>
                                </div>
                                @if ($errors->has('equipo'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        Por favor, <strong>elija su equipo</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                            </div>

                            <!-- Mensaje -->
                            <div class="form-group">
                                <label class='labeli' for="mensaje">Mensaje </label>
                                <textarea rows='2' name='mensaje' type="email" class="form-control" id="mensaje">{{old('mensaje')}}</textarea>
                            </div>

                            <button class='btn btn-outline-primary btn-block sendi'> Enviar </button>
                        </form>
                    </div>

                </div>



    </div>


@endsection