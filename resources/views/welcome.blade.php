<link href="/css/welcome.css" rel="stylesheet">

@extends('layouts.app')

@section('content')
<div class="container-fluid rela">
    <div class="row mid"></div>

</div>
<div class="container-fluid relax">
    <div class="row justify-content-center rela">
        <div class='col-2 d-none d-sm-block'></div>{{-- Hide on x-small --}}
        <div class='col-1 d-block d-sm-none'></div>{{-- Show on x-small  --}}
        <div class='d-block d-sm-none spacing'></div>{{-- Show on x-small  --}}
        <div class="col-2 outService">
            <a class='linkMe' href='soporte'>
                <div class='reparacion'>
                    <img class='reparacionImg' src='css/img/reparacion.png' width="65" height="65">

                    <p class='p_1'>Soporte técnico para pc y laptop.</p>
                </div>
            </a>
        </div>
        <div class='col-1'></div>

        <div class="col-2 outService">
            <a class='linkMe' href='hosting'>
                <div class='hosting'>
                    <img class='hostingImg' src='css/img/hosting.png' width="65" height="65">

                    <p class='p_1'>Hosting y dominios</p>
                </div>
            </a>
        </div>
        <div class='col-1'></div>
        <div class="col-2 outService">
            <a class='linkMe' href='development'>
                <div class='marketing'>
                    <img class='marketingImg' src='css/img/desarollo.png' width="65" height="65">

                    <p class='p_1'>Desarollo de software y web.</p>
                </div>
            </a>
        </div>
        <div class='col-2'></div>
    </div>
    <div class="row justify-content-center rela2">

        <div class='col-2 d-none d-sm-block'></div>{{-- Hide on x-small --}}
        <div class='col-1 d-block d-sm-none'></div>{{-- Show on x-small  --}}
        <div class='d-block d-sm-none spacing'></div>{{-- Show on x-small  --}}
        <div class="col-2 outService">

            <a class='linkMe' href='capacitaciones'>

                <div class='reparacion'>
                    <img class='reparacionImg' src='css/img/cursos.png' width="65" height="65">

                    <p class='p_1'>Cursos y capacitaciones.</p>
                </div>

            </a>


        </div>
        <div class='col-1'></div>
        <div class="col-2 outService">

            <a class='linkMe' href='diseño'>
                <div class='hosting'>
                    <img class='hostingImg' src='css/img/diseño.png' width="65" height="65">

                    <p class='p_1'>Diseño gráfico</p>
                </div>
            </a>
        </div>
        <div class='col-1'></div>
        <div class="col-2 outService">
            <a class='linkMe' href='marketing'>
                <div class='marketing'>
                    <img class='marketingImg' src='css/img/marketing.png' width="65" height="65">

                    <p class='p_1'>Marketing</p>
                </div>
            </a>
        </div>
        <div class='col-2'></div>
    </div>

</div>

<!-- This site is converting visitors into subscribers and customers with respond.io - https://respond.io -->
<script src="https://app.respond.io/facebook/chat/plugin/40880/181956451966108" async></script>

@endsection
