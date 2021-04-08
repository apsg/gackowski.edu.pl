@component('mail::message')
# Kontakt od {{ $name }} <{{ $email }}>

{{ nl2br($message) }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
