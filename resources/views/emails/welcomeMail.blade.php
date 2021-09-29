@component('mail::message')
hai Welcome Buddy..!!
Name:
{{$value['name']}}
e-mail:
{{$value['email']}}
Password:
{{$value['password']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
