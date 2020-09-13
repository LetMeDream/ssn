<link href='/css/development.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

@extends('layouts.new')

@section('content')

    <div class='container-fluid'>



                <a href='/'><img class='ssn' src='/css/img/ssn.png' width="60"></a>
                <div class='title'>

                    <h4 class='service'> Consigue el plan que se ajusta a las necesidades de tu proyecto. </h4>
                    {{-- Planes de VPS --}}
                    <strong><h3 class='vps'>Planes de desarrollo en wordpress</h3></strong>

                    <div class="row justify-content-center">


                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col33'> {{-- Básico --}}

                                <img class='cursos' src='./css/img/regional.png' >

                                <h3 class='headin'>Wordpress regional</h3>
                                <p class='price'>
                                    <strong>USD 120</strong><span class='text-muted spani'>/facturación única.</span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Dominio .com.ve</span></li>
                                        <li class='has'><span class='text-muted'>1 año de hosting básico</span></li>
                                        <li class='has'><span class='text-muted'>1 GB almacenamiento SSD</span></li>
                                        <li class='has'><span class='text-muted'>10 correos de 500 MB</span></li>
                                        <li class='has'><span class='text-muted'>Certificado SSL gratis</span></li>
                                        <li class='has'><span class='text-muted'>SEO optimizado para Venezuela</span></li>
                                    </ul>

                                </div>

                                <a href='development/desarrollo-wordpress/regional' class='btn btn-primary btn-block contactC'>CONTACTAR</a>


                            </div>
                        </div>

                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col33'> {{-- Avanzado --}}

                                <img class='cursos' src='./css/img/global.png' >

                                <h3 class='headin'>Wordpress global</h3>
                                <p class='price'>
                                    <strong>USD 120</strong><span class='text-muted spani'>/facturación única</span>
                                </p>


                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Dominio .com</span></li>
                                        <li class='has'><span class='text-muted'>1 año de hosting básico</span></li>
                                        <li class='has'><span class='text-muted'>1 GB almacenamiento SSD</span></li>
                                        <li class='has'><span class='text-muted'>10 correos de 500 MB</span></li>
                                        <li class='has'><span class='text-muted'>Certificado SSL gratis</span></li>
                                        <li class='has'><span class='text-muted'>SEO optimizado para Global y Venezuela</span></li>
                                    </ul>

                                </div>

                                <a href='development/desarrollo-wordpress/global' class='btn btn-primary btn-block contactC'>CONTACTAR</a>


                            </div>
                        </div>
                        {{-- Medium size only --}}
                        <div class="col-4 d-none d-md-block d-lg-none">
                            <div class='col33'> {{-- Básico --}}

                                <img class='cursos' src='./css/img/regional.png' >

                                <h3 class='headin'>Wordpress regional</h3>
                                <p class='price'>
                                    <strong>USD 120</strong><span class='text-muted spani'>/facturación única.</span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Dominio .com.ve</span></li>
                                        <li class='has'><span class='text-muted'>1 año de hosting básico</span></li>
                                        <li class='has'><span class='text-muted'>1 GB almacenamiento SSD</span></li>
                                        <li class='has'><span class='text-muted'>10 correos de 500 MB</span></li>
                                        <li class='has'><span class='text-muted'>Certificado SSL gratis</span></li>
                                        <li class='has'><span class='text-muted'>SEO optimizado para Venezuela</span></li>
                                    </ul>

                                </div>

                                <a href='development/desarrollo-wordpress/regional'  class='btn btn-primary btn-block contactC'>CONTACTAR</a>


                            </div>
                        </div>
                        <div class='col-1 d-none d-md-block d-lg-none'></div>
                        <div class="col-4 d-none d-md-block d-lg-none">
                            <div class='col33'> {{-- Avanzado --}}

                                <img class='cursos' src='./css/img/global.png' >

                                <h3 class='headin'>Wordpress global</h3>
                                <p class='price'>
                                    <strong>USD 120</strong><span class='text-muted spani'>/facturación única</span>
                                </p>


                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Dominio .com</span></li>
                                        <li class='has'><span class='text-muted'>1 año de hosting básico</span></li>
                                        <li class='has'><span class='text-muted'>1 GB almacenamiento SSD</span></li>
                                        <li class='has'><span class='text-muted'>10 correos de 500 MB</span></li>
                                        <li class='has'><span class='text-muted'>Certificado SSL gratis</span></li>
                                        <li class='has'><span class='text-muted'>SEO optimizado para Global y Venezuela</span></li>
                                    </ul>

                                </div>

                                <a href='development/desarrollo-wordpress/global' class='btn btn-primary btn-block contactC'>CONTACTAR</a>


                            </div>
                        </div>
                        {{-- Medium size only --}}


                    </div>

                    {{-- Planes de dominios --}}
                    <strong><h3 class='vps'>Planes de desarrollo y soporte remoto</h3></strong>

                    <div class="row justify-content-center">


                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col3 dev'> {{-- Dev --}}

                                <img class='cursos' src='./css/img/horas.png' >

                                <h3 class='headin'>Básico por horas</h3>
                                <p class='price'>
                                    <strong>USD 10</strong><span class='text-muted spani'>/por hora </span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caractDev text-muted'>Aplica para contratos de menos de 20 horas al mes</p>


                                </div>

                                <a href='development/desarrollo-remoto/regional' class='btn btn-primary btn-block contact devBtn'>CONTACTAR</a>


                            </div>
                        </div>

                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col3 dev'> {{-- Global --}}

                                <img class='cursos' src='./css/img/star.png' >

                                <h3 class='headin'>Socios por horas</h3>
                                <p class='price'>
                                    <strong>USD 7</strong><span class='text-muted spani'>/por hora </span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caractDev text-muted'>Aplica para contratos de más de 20 horas al mes</p>

                                </div>

                                <a href='development/desarrollo-remoto/global' class='btn btn-primary btn-block contact devBtn'>CONTACTAR</a>


                            </div>
                        </div>

                        {{-- Medium size only --}}
                        <div class="col-4 d-none d-md-block d-lg-none">
                            <div class='col3 dev'> {{-- Dev --}}

                                <img class='cursos' src='./css/img/horas.png' >

                                <h3 class='headin'>Básico por horas</h3>
                                <p class='price'>
                                    <strong>USD 10</strong><span class='text-muted spani'>/por hora </span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caractDev text-muted'>Aplica para contratos de menos de 20 horas al mes</p>


                                </div>

                                <a href='development/desarrollo-remoto/regional' class='btn btn-primary btn-block contact devBtn'>CONTACTAR</a>


                            </div>
                        </div>
                        <div class='col-1 d-none d-md-block d-lg-none'></div>
                        <div class="col-4 d-none d-md-block d-lg-none">
                            <div class='col3 dev'> {{-- Global --}}

                                <img class='cursos' src='./css/img/star.png' >

                                <h3 class='headin'>Socios por horas</h3>
                                <p class='price'>
                                    <strong>USD 7</strong><span class='text-muted spani'>/por hora </span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caractDev text-muted'>Aplica para contratos de más de 20 horas al mes</p>

                                </div>

                                <a href='development/desarrollo-remoto/global' class='btn btn-primary btn-block contact devBtn'>CONTACTAR</a>


                            </div>
                        </div>
                        {{-- Medium size only --}}

                    </div>


                </div>

    </div>

    <!-- This site is converting visitors into subscribers and customers with respond.io - https://respond.io -->
    <script src="https://app.respond.io/facebook/chat/plugin/40880/181956451966108" async></script>



@endsection