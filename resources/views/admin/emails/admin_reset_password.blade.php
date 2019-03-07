@component('mail::message')
# Reset Account
Welcome {{$data['data']->name}}
The body of your message.

@component('mail::button', ['url' => aurl('reset-password').'/'.$data['token']])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
