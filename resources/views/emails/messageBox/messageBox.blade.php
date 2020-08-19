@component('mail::message')

    # Mensaje recibido.

    Nombre:  {{ $data['name'] }}
    Correo:  {{$data['email']}}
    Mensaje: {{$data['message']}}

{{--
@component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
<em>SSN</em>
@endcomponent