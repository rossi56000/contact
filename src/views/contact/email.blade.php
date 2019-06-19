@component('mail::message')
# Introduction
Nouveau message de {{$name}}
<br>
Message:
{{$message}}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
