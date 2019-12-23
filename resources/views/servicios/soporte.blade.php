<link href='/css/soporte.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

@extends('layouts.new')

@section('content')

    <div class='container-fluid'>



                <img class='ssn' src='./css/img/ssn.png' width="60">
                <div class='title'>

                    <h4 class='hi'> Has escogido nuestro </h4>

                    <img class='reparacion' src='./css/img/reparacion.png' width='85'>

                    <h4 class='service'> Servicio técnico para pc y laptop. </h4>

                </div>

                <h4 class='hi'> Completa este formulario y te contactaremos cuanto antes </h4>

                <div class='row justify-content-center'>

                    <div class='col-md-4'>
                        <form>
                            <!-- Nombre -->
                            <div class="form-group">
                              <label class='labeli' for="nombre">Nombre</label>
                              <input name='nombre' type="text" class="form-control" id="nombre" placeholder="Nombre">
                            </div>
                            <!-- Apellido -->
                            <div class="form-group">
                                <label class='labeli' for="nombre">Apellido</label>
                                <input name='apellido' type="text" class="form-control" id="apellido" placeholder="Apellido">
                            </div>
                            <!-- Teléfono -->
                            <div class="form-group">
                                <label class='labeli' for="nombre">Teléfono</label>
                                <input name='telefono' type="number" class="form-control" id="telefono" placeholder="0414-1234567">
                            </div>
                            <!-- Whatsapp -->
                            <p class='labeli'>¿Tienes Whatsapp?</p>
                            <div class="row rowi2 justify-content-center">
                                <div class="form-check form-check-inline">

                                        <div class="col-1"></div>
                                        <div class="col-4">
                                            <label class="form-check-label text-muted" for="si">Sí</label>
                                            <input name='whatsapp' type="radio" class="form-check-input" id="si">
                                        </div>
                                        <div class="col-2"></div>
                                        <div class="col-4">
                                            <label class="form-check-label text-muted" for="no">No</label>
                                            <input name='whatsapp' type="radio" class="form-check-input" id="no">
                                        </div>
                                        <div class="col-1"></div>

                                </div>
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label class='labeli' for="nombre">Correo </label>
                                <input name='mail' type="email" class="form-control" id="telefono" placeholder="email@mail.com">
                            </div>
                            <!-- Equipo -->
                            <p class='labeli'>¿Qué equipo tienes?</p>
                            <div class="row rowi2 justify-content-center">
                                <div class="form-check form-check-inline">
                                        <div class="col-1"></div>
                                        <div class="col-6">
                                            <label class="form-check-label text-muted" for="computadora">Computadora</label>
                                            <input name='equipo' type="radio" class="form-check-input" id="computadora">
                                        </div>
                                        <div class="col-1"></div>
                                        <div class="col-4">
                                            <label class="form-check-label text-muted" for="laptop">Laptop</label>
                                            <input name='equipo' type="radio" class="form-check-input" id="laptop">
                                        </div>
                                        {{-- <div class="col-1"></div> --}}


                                </div>
                            </div>

                            <!-- Mensaje -->
                            <div class="form-group">
                                <label class='labeli' for="mensaje">Mensaje </label>
                                <textarea rows='2' name='mensaje' type="email" class="form-control" id="mensaje"></textarea>
                            </div>

                            <button class='btn btn-outline-primary btn-block sendi'> Enviar </button>
                        </form>
                    </div>

                </div>



    </div>

@endsection