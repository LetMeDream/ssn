<link href='/css/development.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

@extends('layouts.new')

@section('content')

    <div class='container-fluid'>



                <img class='ssn' src='./css/img/ssn.png' width="60">
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
                                    <strong>USD 100</strong><span class='text-muted spani'>/facturación única.</span>
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

                                <a class='btn btn-primary btn-block contactC'>CONTACTAR</a>


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

                                <a class='btn btn-primary btn-block contactC'>CONTACTAR</a>


                            </div>
                        </div>
                        {{-- Medium size only --}}
                        <div class="col-4 d-none d-md-block d-lg-none">
                            <div class='col33'> {{-- Básico --}}

                                <img class='cursos' src='./css/img/regional.png' >

                                <h3 class='headin'>Wordpress regional</h3>
                                <p class='price'>
                                    <strong>USD 100</strong><span class='text-muted spani'>/facturación única.</span>
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

                                <a class='btn btn-primary btn-block contactC'>CONTACTAR</a>


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

                                <a class='btn btn-primary btn-block contactC'>CONTACTAR</a>


                            </div>
                        </div>
                        {{-- Medium size only --}}


                    </div>

                    {{-- Planes de dominios --}}
                    <strong><h3 class='vps'>Planes de desarrollo remoto</h3></strong>

                    <div class="row justify-content-center">


                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col3'> {{-- Regional --}}

                                <img class='cursos' src='./css/img/regional.png' >

                                <h3 class='headin'>Wordpress regional</h3>
                                <p class='price'>
                                    <strong>USD 100</strong><span class='text-muted spani'>/facturación única</span>
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

                                <a class='btn btn-primary btn-block contact'>CONTACTAR</a>


                            </div>
                        </div>

                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col3'> {{-- Global --}}

                                <img class='cursos' src='./css/img/global.png' >

                                <h3 class='headin'>Wordpress Global</h3>
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

                                <a class='btn btn-primary btn-block contact'>CONTACTAR</a>


                            </div>
                        </div>

                        {{-- Medium size only --}}
                        <div class="col-4 d-none d-md-block d-lg-none">
                            <div class='col3'> {{-- Regional --}}

                                <img class='cursos' src='./css/img/regional.png' >

                                <h3 class='headin'>Wordpress regional</h3>
                                <p class='price'>
                                    <strong>USD 100</strong><span class='text-muted spani'>/facturación única</span>
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

                                <a class='btn btn-primary btn-block contact'>CONTACTAR</a>


                            </div>
                        </div>
                        <div class='col-1 d-none d-md-block d-lg-none'></div>
                        <div class="col-4 d-none d-md-block d-lg-none">
                            <div class='col3'> {{-- Global --}}

                                <img class='cursos' src='./css/img/global.png' >

                                <h3 class='headin'>Wordpress Global</h3>
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

                                <a class='btn btn-primary btn-block contact'>CONTACTAR</a>


                            </div>
                        </div>
                        {{-- Medium size only --}}

                    </div>


                </div>


    </div>

@endsection