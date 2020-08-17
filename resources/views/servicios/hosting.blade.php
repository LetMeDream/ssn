<link href='/css/hosting.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

@extends('layouts.new')

@section('content')

    <div class='container-fluid'>



                <a href='/'><img class='ssn' src='/css/img/ssn.png' width="60"></a>


                    <h4 class='service'> Consigue el plan que se ajusta a las necesidades de tu proyecto. </h4>

                    {{-- Hosting full start--}}
                    <strong>
                        <h3 class="planes">
                            Planes full (Hosting+Dominio)
                        </h3>
                    </strong>

                    <div class="row justify-content-center">
                        {{-- Estudiantes --}}
                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col3'>

                                <img class='cursos' src='./css/img/cursos2.png' >

                                <h3 class='headin'>Estudiantes</h3>
                                <p class='price'>
                                    <strong>USD 27</strong><span class='text-muted spani'>/anuales</span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Implementación Wordpress</span></li>
                                        <li class='has'><span class='text-muted'>1GB de almacenamiento</span></li>
                                        <li class='has'><span class='text-muted'>Base de datos</span></li>
                                        <li class='has'><span class='text-muted'>Panel de administración</span></li>
                                        <li class='has'><span class='text-muted'>Tu <b>dominio</b>.com o com.ve</span></li>
                                        <li class="has"><span class="text-muted">Certificado SSL gratis</span></li>
                                    </ul>

                                </div>

                                <a href='{{ Route('estudiante') }}'
                                 {{-- href='hosting/estudiante' --}} class='btn btn-primary btn-block contact'>CONTACTAR</a>

                            </div>
                        </div>
                        {{-- Básico --}}
                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col3'>

                                <img class='cursos' src='./css/img/basico.png' >

                                <h3 class='headin'>Básico</h3>
                                <p class='price'>
                                    <strong>USD 50</strong><span class='text-muted spani'>/anual</span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Implementación Wordpress</span></li>
                                        <li class='has'><span class='text-muted'>1GB de almacenamiento</span></li>
                                        <li class='has'><span class='text-muted'>Base de datos</span></li>
                                        <li class='has'><span class='text-muted'>Panel de administración</span></li>
                                        <li class='has'><span class='text-muted'>Dominio .com o dominio .com.ve</span></li>
                                        <li class="has"><span class="text-muted">Certificado SSL gratis</span></li>
                                    </ul>

                                </div>

                                <a href='hosting/basico' class='btn btn-primary btn-block contact'>CONTACTAR</a>


                            </div>
                        </div>
                        {{-- Emprendedor --}}
                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col3'>

                                <img class='cursos' src='./css/img/emprendedor.png' >

                                <h3 class='headin'>Emprendedores</h3>
                                <p class='price'>
                                    <strong>USD 70</strong><span class='text-muted spani'>/anual</span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Implementación Wordpress</span></li>
                                        <li class='has'><span class='text-muted'>1GB de almacenamiento</span></li>
                                        <li class='has'><span class='text-muted'>Base de datos</span></li>
                                        <li class='has'><span class='text-muted'>Panel de administración</span></li>
                                        <li class='has'><span class='text-muted'>Dominio .com o dominio .com.ve</span></li>
                                        <li class="has"><span class="text-muted">Certificado SSL gratis</span></li>
                                    </ul>

                                </div>

                                <a href='hosting/emprendedor' class='btn btn-primary btn-block contact'>CONTACTAR</a>

                            </div>
                        </div>

                        {{-- Estudiantes, sólo tamaño medio --}}
                        <div class="col-md-4 d-none d-md-block d-lg-none">
                            <div class='col3'>

                                <img class='cursos' src='./css/img/cursos2.png' >

                                <h3 class='headin'>Estudiantes</h3>
                                <p class='price'>
                                    <strong>USD 27</strong><span class='text-muted spani'>/anuales</span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Implementación Wordpress</span></li>
                                        <li class='has'><span class='text-muted'>1GB de almacenamiento</span></li>
                                        <li class='has'><span class='text-muted'>Base de datos</span></li>
                                        <li class='has'><span class='text-muted'>Panel de administración</span></li>
                                        <li class='has'><span class='text-muted'>Tu <b>dominio</b>.com o com.ve</span></li>
                                        <li class="has"><span class="text-muted">Certificado SSL gratis</span></li>
                                    </ul>

                                </div>

                                <a href='{{ Route('estudiante') }}'
                                 {{-- href='hosting/estudiante' --}} class='btn btn-primary btn-block contact'>CONTACTAR</a>

                            </div>
                        </div>
                        {{-- Básico, sólo tamaño medio --}}
                        <div class="col-md-4 d-none d-md-block d-lg-none">
                            <div class='col3'>

                                <img class='cursos' src='./css/img/basico.png' >

                                <h3 class='headin'>Básico</h3>
                                <p class='price'>
                                    <strong>USD 50</strong><span class='text-muted spani'>/anual</span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Implementación Wordpress</span></li>
                                        <li class='has'><span class='text-muted'>1GB de almacenamiento</span></li>
                                        <li class='has'><span class='text-muted'>Base de datos</span></li>
                                        <li class='has'><span class='text-muted'>Panel de administración</span></li>
                                        <li class='has'><span class='text-muted'>Dominio .com o dominio .com.ve</span></li>
                                    </ul>

                                </div>

                                <a href='hosting/basico' class='btn btn-primary btn-block contact'>CONTACTAR</a>


                            </div>
                        </div>

                    </div>

                    <div class="row justify-content-center justMid">

                        {{-- Emprendedor, sólo tamaño medio --}}
                        <div class="col-lg-4 d-none d-md-block d-lg-none">
                            <div class='col3'>

                                <img class='cursos' src='./css/img/emprendedor.png' >

                                <h3 class='headin'>Emprendedores</h3>
                                <p class='price'>
                                    <strong>USD 70</strong><span class='text-muted spani'>/anual</span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Implementación Wordpress</span></li>
                                        <li class='has'><span class='text-muted'>1GB de almacenamiento</span></li>
                                        <li class='has'><span class='text-muted'>Base de datos</span></li>
                                        <li class='has'><span class='text-muted'>Panel de administración</span></li>
                                        <li class='has'><span class='text-muted'>Dominio .com o dominio .com.ve</span></li>
                                    </ul>

                                </div>

                                <a href='hosting/emprendedor' class='btn btn-primary btn-block contact'>CONTACTAR</a>

                            </div>
                        </div>

                    </div>
                    {{-- Hosting full end --}}

                    {{-- Hosting start--}}
                    <strong><h3 class='planes'>Planes de hosting</h3></strong>

                    <div class="row justify-content-center">
                        {{-- Estudiantes --}}
                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col3'>

                                <img class='cursos' src='./css/img/cursos2.png' >

                                <h3 class='headin'>Estudiantes</h3>
                                <p class='price'>
                                    <strong>USD 1</strong><span class='text-muted spani'>/mensual</span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Implementación Wordpress</span></li>
                                        <li class='has'><span class='text-muted'>1GB de almacenamiento</span></li>
                                        <li class='has'><span class='text-muted'>Base de datos</span></li>
                                        <li class='has'><span class='text-muted'>Panel de administración</span></li>
                                        <li class='has'><span class='text-muted'>Tu <b>dominio</b>.ssn.com.ve gratis</span></li>
                                        <li class="has"><span class="text-muted">Certificado SSL gratis</span></li>
                                    </ul>

                                </div>

                                <a href='{{ Route('estudiante') }}'
                                 {{-- href='hosting/estudiante' --}} class='btn btn-primary btn-block contact'>CONTACTAR</a>

                            </div>
                        </div>
                        {{-- Básico --}}
                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col3'>

                                <img class='cursos' src='./css/img/basico.png' >

                                <h3 class='headin'>Básico</h3>
                                <p class='price'>
                                    <strong>USD 3</strong><span class='text-muted spani'>/mensual</span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Implementación Wordpress</span></li>
                                        <li class='has'><span class='text-muted'>1GB de almacenamiento</span></li>
                                        <li class='has'><span class='text-muted'>Base de datos</span></li>
                                        <li class='has'><span class='text-muted'>Panel de administración</span></li>
                                        <li class='has'><span class='text-muted'>Tu <b>dominio</b>.ssn.com.ve gratis</span></li>
                                        <li class="has"><span class="text-muted">Certificado SSL gratis</span></li>
                                    </ul>

                                </div>

                                <a href='hosting/basico' class='btn btn-primary btn-block contact'>CONTACTAR</a>


                            </div>
                        </div>
                        {{-- Emprendedor --}}
                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col3'>

                                <img class='cursos' src='./css/img/emprendedor.png' >

                                <h3 class='headin'>Emprendedores</h3>
                                <p class='price'>
                                    <strong>USD 5</strong><span class='text-muted spani'>/mensual</span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Implementación Wordpress</span></li>
                                        <li class='has'><span class='text-muted'>1GB de almacenamiento</span></li>
                                        <li class='has'><span class='text-muted'>Base de datos</span></li>
                                        <li class='has'><span class='text-muted'>Panel de administración</span></li>
                                        <li class='has'><span class='text-muted'>Tu <b>dominio</b>.ssn.com.ve gratis</span></li>
                                        <li class="has"><span class="text-muted">Certificado SSL gratis</span></li>
                                    </ul>

                                </div>

                                <a href='hosting/emprendedor' class='btn btn-primary btn-block contact'>CONTACTAR</a>

                            </div>
                        </div>

                        {{-- Estudiantes, sólo tamaño medio --}}
                        <div class="col-md-4 d-none d-md-block d-lg-none">
                            <div class='col3'>

                                <img class='cursos' src='./css/img/cursos2.png' >

                                <h3 class='headin'>Estudiantes</h3>
                                <p class='price'>
                                    <strong>USD 1</strong><span class='text-muted spani'>/mensual</span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Implementación Wordpress</span></li>
                                        <li class='has'><span class='text-muted'>1GB de almacenamiento</span></li>
                                        <li class='has'><span class='text-muted'>Base de datos</span></li>
                                        <li class='has'><span class='text-muted'>Panel de administración</span></li>
                                        <li class='has'><span class='text-muted'>Tu <b>dominio</b>.ssn.com.ve gratis</span></li>
                                        <li class="has"><span class="text-muted">Certificado SSL gratis</span></li>
                                    </ul>

                                </div>

                                <a href='{{ Route('estudiante') }}'
                                 {{-- href='hosting/estudiante' --}} class='btn btn-primary btn-block contact'>CONTACTAR</a>

                            </div>
                        </div>
                        {{-- Básico, sólo tamaño medio --}}
                        <div class="col-md-4 d-none d-md-block d-lg-none">
                            <div class='col3'>

                                <img class='cursos' src='./css/img/basico.png' >

                                <h3 class='headin'>Básico</h3>
                                <p class='price'>
                                    <strong>USD 3</strong><span class='text-muted spani'>/mensual</span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Implementación Wordpress</span></li>
                                        <li class='has'><span class='text-muted'>1GB de almacenamiento</span></li>
                                        <li class='has'><span class='text-muted'>Base de datos</span></li>
                                        <li class='has'><span class='text-muted'>Panel de administración</span></li>
                                        <li class='has'><span class='text-muted'>Tu <b>dominio</b>.ssn.com.ve gratis</span></li>
                                        <li class="has"><span class="text-muted">Certificado SSL gratis</span></li>
                                    </ul>

                                </div>

                                <a href='hosting/basico' class='btn btn-primary btn-block contact'>CONTACTAR</a>


                            </div>
                        </div>

                    </div>

                    <div class="row justify-content-center justMid">

                        {{-- Emprendedor, sólo tamaño medio --}}
                        <div class="col-lg-4 d-none d-md-block d-lg-none">
                            <div class='col3'>

                                <img class='cursos' src='./css/img/emprendedor.png' >

                                <h3 class='headin'>Emprendedores</h3>
                                <p class='price'>
                                    <strong>USD 5</strong><span class='text-muted spani'>/mensual</span>
                                </p>

                                <div class='caracteristicas'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Implementación Wordpress</span></li>
                                        <li class='has'><span class='text-muted'>1GB de almacenamiento</span></li>
                                        <li class='has'><span class='text-muted'>Base de datos</span></li>
                                        <li class='has'><span class='text-muted'>Panel de administración</span></li>
                                        <li class='has'><span class='text-muted'>Tu <b>dominio</b>.ssn.com.ve gratis</span></li>
                                        <li class="has"><span class="text-muted">Certificado SSL gratis</span></li>
                                    </ul>

                                </div>

                                <a href='hosting/emprendedor' class='btn btn-primary btn-block contact'>CONTACTAR</a>

                            </div>
                        </div>

                    </div>
                    {{-- Databases --}}
                    <strong><h3 class='bdd'>Planes de bases de datos dedicadas</h3></strong>

                    <div class="row justify-content-center">


                        <div class="col-lg-3 pad">
                            <div class='col3'> {{-- Base de datos --}}

                                <img class='cursos' src='./css/img/hosting.png' >

                                <h3 class='headin'>MySQL Profesional</h3>
                                <p class='price'>
                                    <strong>USD 5</strong><span class='text-muted spani'>/mensual</span>
                                </p>
                                <p class='factura text-muted'>
                                    <strong>USD 50</strong> por facturación anual
                                </p>

                                <div class='caracteristicasB'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Autorespaldable</span></li>
                                        <li class='has'><span class='text-muted'>Servidor exclusivo para B.D.</span></li>
                                        <li class='has'><span class='text-muted'>Optimizada con SSD</span></li>
                                    </ul>

                                </div>

                                <a href='base-de-datos' class='btn btn-primary btn-block contact'>CONTACTAR</a>


                            </div>
                        </div>


                    </div>
                    {{-- Planes de VPS --}}
                    <strong><h3 class='vps'>Planes de VPS</h3></strong>

                    <div class="row justify-content-center">


                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col33'> {{-- Básico --}}

                                <img class='cursos' src='./css/img/basico.png' >

                                <h3 class='headin'>Básico</h3>
                                <p class='price'>
                                    <strong>USD 12</strong><span class='text-muted spani'>/mensual</span>
                                </p>
                                <p class='factura text-muted'>
                                    Planes a partir de <strong>USD 12</strong> por facturación mensual
                                </p>

                                <div class='caracteristicasC'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>1 GB de memoria RAM</span></li>
                                        <li class='has'><span class='text-muted'>S.O. Ubuntu Server</span></li>
                                        <li class='has'><span class='text-muted'>Procesador de 1 núcleo</span></li>
                                        <li class='has'><span class='text-muted'>40 GB SSD</span></li>
                                        <li class='has'><span class='text-muted'>Ubicado en USA</span></li>
                                        <li class='has'><span class='text-muted'>Velocidad de red 100 MBPS</span></li>
                                    </ul>

                                </div>

                                <a href='vps/basico' class='btn btn-primary btn-block contactC'>CONTACTAR</a>


                            </div>
                        </div>

                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col33'> {{-- Avanzado --}}

                                <img class='cursos' src='./css/img/avanzado.png' >

                                <h3 class='headin'>Avanzado</h3>
                                <p class='price'>
                                    <strong>USD 17</strong><span class='text-muted spani'>/mensual</span>
                                </p>
                                <p class='factura text-muted'>
                                    Planes a partir de <strong>USD 17</strong> por facturación mensual
                                </p>

                                <div class='caracteristicasC'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>2 GB de memoria RAM</span></li>
                                        <li class='has'><span class='text-muted'>S.O. Ubuntu Server</span></li>
                                        <li class='has'><span class='text-muted'>Procesador de 2 núcleos</span></li>
                                        <li class='has'><span class='text-muted'>40 GB SSD</span></li>
                                        <li class='has'><span class='text-muted'>Ubicado en USA</span></li>
                                        <li class='has'><span class='text-muted'>Velocidad de red 100 MBPS</span></li>
                                    </ul>

                                </div>

                                <a href='vps/avanzado' class='btn btn-primary btn-block contactC'>CONTACTAR</a>


                            </div>
                        </div>

                        {{-- For medium size only --}}
                        <div class="col-4 d-none d-md-block d-lg-none">
                            <div class='col33'> {{-- Básico --}}

                                <img class='cursos' src='./css/img/basico.png' >

                                <h3 class='headin'>Básico</h3>
                                <p class='price'>
                                    <strong>USD 12</strong><span class='text-muted spani'>/mensual</span>
                                </p>
                                <p class='factura text-muted'>
                                    Planes a partir de <strong>USD 12</strong> por facturación mensual
                                </p>

                                <div class='caracteristicasC'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>1 GB de memoria RAM</span></li>
                                        <li class='has'><span class='text-muted'>S.O. Ubuntu Server</span></li>
                                        <li class='has'><span class='text-muted'>Procesador de 1 núcleo</span></li>
                                        <li class='has'><span class='text-muted'>40 GB SSD</span></li>
                                        <li class='has'><span class='text-muted'>Ubicado en USA</span></li>
                                        <li class='has'><span class='text-muted'>Velocidad de red 100 MBPS</span></li>
                                    </ul>

                                </div>

                                <a href='vps/basico' class='btn btn-primary btn-block contactC'>CONTACTAR</a>


                            </div>
                        </div>

                        <div class="col-4 d-none d-md-block d-lg-none">
                            <div class='col33'> {{-- Avanzado --}}

                                <img class='cursos' src='./css/img/avanzado.png' >

                                <h3 class='headin'>Avanzado</h3>
                                <p class='price'>
                                    <strong>USD 17</strong><span class='text-muted spani'>/mensual</span>
                                </p>
                                <p class='factura text-muted'>
                                    Planes a partir de <strong>USD 17</strong> por facturación mensual
                                </p>

                                <div class='caracteristicasC'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>2 GB de memoria RAM</span></li>
                                        <li class='has'><span class='text-muted'>S.O. Ubuntu Server</span></li>
                                        <li class='has'><span class='text-muted'>Procesador de 2 núcleos</span></li>
                                        <li class='has'><span class='text-muted'>40 GB SSD</span></li>
                                        <li class='has'><span class='text-muted'>Ubicado en USA</span></li>
                                        <li class='has'><span class='text-muted'>Velocidad de red 100 MBPS</span></li>
                                    </ul>

                                </div>

                                <a href='vps/avanzado' class='btn btn-primary btn-block contactC'>CONTACTAR</a>


                            </div>
                        </div>
                        {{-- For medium size only --}}

                    </div>

                    {{-- Planes de dominios --}}
                    <strong><h3 class='vps'>Planes de dominios</h3></strong>

                    <div class="row justify-content-center mb-4">


                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col3'> {{-- Regional --}}

                                <img class='cursos' src='./css/img/regional.png' >

                                <h3 class='headin'>Regional (.com.ve)</h3>
                                <p class='price'>
                                    <strong>USD 15</strong><span class='text-muted spani'>/anual</span>
                                </p>
                                <p class='factura text-muted'>
                                    Sólo válido para clientes de nuestro servicio de hosting.
                                </p>

                                <div class='caracteristicasC'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Registrado en Conatel</span></li>
                                        <li class='has'><span class='text-muted'>Registro en días</span></li>
                                        <li class='has'><span class='text-muted'>SEO optimizado para Venezuela</span></li>
                                    </ul>

                                </div>

                                <a href='dominios/regional' class='btn btn-primary btn-block contact'>CONTACTAR</a>


                            </div>
                        </div>

                        <div class="col-lg-3 d-md-none d-lg-block pad">
                            <div class='col3'> {{-- Global --}}

                                <img class='cursos' src='./css/img/global.png' >

                                <h3 class='headin'>Global (.com)</h3>
                                <p class='price'>
                                    <strong>USD 15</strong><span class='text-muted spani'>/anual</span>
                                </p>
                                <p class='factura text-muted'>
                                    Sólo válido para clientes de nuestro servicio de hosting.
                                </p>

                                <div class='caracteristicasC'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Registrado en USA</span></li>
                                        <li class='has'><span class='text-muted'>Registro en horas</span></li>
                                        <li class='has'><span class='text-muted'>SEO optimizado para global y Venezuela</span></li>
                                    </ul>

                                </div>

                                <a href='dominios/global' class='btn btn-primary btn-block contact'>CONTACTAR</a>


                            </div>
                        </div>

                        {{-- For medium size only --}}
                        <div class="col-4 d-none d-md-block d-lg-none">
                            <div class='col3'> {{-- Regional --}}

                                <img class='cursos' src='./css/img/regional.png' >

                                <h3 class='headin'>Regional (.com.ve)</h3>
                                <p class='price'>
                                    <strong>USD 15</strong><span class='text-muted spani'>/anual</span>
                                </p>
                                <p class='factura text-muted'>
                                    Sólo válido para clientes de nuestro servicio de hosting.
                                </p>

                                <div class='caracteristicasC'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Registrado en Conatel</span></li>
                                        <li class='has'><span class='text-muted'>Registro en días</span></li>
                                        <li class='has'><span class='text-muted'>SEO optimizado para Venezuela</span></li>
                                    </ul>

                                </div>

                                <a href='dominios/regional' class='btn btn-primary btn-block contact'>CONTACTAR</a>


                            </div>
                        </div>

                        <div class="col-4 d-none d-md-block d-lg-none">
                            <div class='col3'> {{-- Global --}}

                                <img class='cursos' src='./css/img/global.png' >

                                <h3 class='headin'>Global (.com)</h3>
                                <p class='price'>
                                    <strong>USD 15</strong><span class='text-muted spani'>/anual</span>
                                </p>
                                <p class='factura text-muted'>
                                    Sólo válido para clientes de nuestro servicio de hosting.
                                </p>

                                <div class='caracteristicasC'>

                                    <p class='caract'><strong>Caracteristicas</strong></p>
                                    <ul class='has'>
                                        <li class='has'><span class='text-muted'>Registrado en USA</span></li>
                                        <li class='has'><span class='text-muted'>Registro en horas</span></li>
                                        <li class='has'><span class='text-muted'>SEO optimizado para global y Venezuela</span></li>
                                    </ul>

                                </div>

                                <a href='dominios/global' class='btn btn-primary btn-block contact'>CONTACTAR</a>


                            </div>
                        </div>
                        {{-- For medium size only --}}

                    </div>




    </div>



@endsection