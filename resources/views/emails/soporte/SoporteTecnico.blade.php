@component('mail::message')
# Un servicio de <b>Soporte Técnico</b> ha sido registrado con los siguientes datos

<strong>Nombre: </strong> {{ $data['nombre'] . ' ' . $data['apellido'] }} <br>
<strong>Correo: </strong> {{ $data['correo'] }} <br>
<strong>Teléfono: </strong> {{ $data['telefono'] }} <br>

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
<em>SSN</em>
@endcomponent
