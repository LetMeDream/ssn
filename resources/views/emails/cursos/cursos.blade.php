@component('mail::message')
# Un servicio de <b>Cursos y Capacitaciones</b> ha sido registrado con los siguientes datos

<strong>Nombre: </strong> {{ $data['nombre'] . ' ' . $data['apellido'] }} <br>
<strong>Correo: </strong> {{ $data['correo'] }} <br>
<strong>Teléfono: </strong> {{ $data['telefono'] }} <br>


Thanks,<br>
<em>SSN</em>
@endcomponent
