@component('mail::message')
# Un servicio de <b>Hosting</b> ha sido registrado con los siguientes datos

<strong>Nombre: </strong> {{ $data['nombre'] . ' ' . $data['apellido'] }} <br>
<strong>Correo: </strong> {{ $data['correo'] }} <br>
<strong>Servicio: </strong> {{ $data['tipo'] }} <br>
<strong>Plan: </strong> {{ $data['plan'] }} <br>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
<em>SSN</em>
@endcomponent
