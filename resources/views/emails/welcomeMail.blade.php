@component('mail::message')
hai Welcome Buddy..!!
Name:
{{$value['name']}}<br>
e-mail:
{{$value['email']}}<br>
Password:
{{$value['password']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
