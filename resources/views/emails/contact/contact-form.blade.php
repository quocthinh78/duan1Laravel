@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'https://getbootstrap.com/docs/4.1/components/navs/'])
Button Text
@endcomponent
<p>Hi Admin, I am <strong>{{$data['name']}} email</strong> <strong>{{$data['email']}}</strong></p>
<p>Phone number, <strong>{{$data['phone']}}</strong></p>
<p>I feel {{$data['comment']}}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
