@component('mail::message')
hai Welcome Buddy..!!
<br>
Name:
{{$value['name']}}<br>
e-mail:
{{$value['email']}}<br>
Password:
{{$value['password']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent