@component('mail::message')
    Portfolio contact form email.<br/>
    From: {{ $email }}<br/>
    <br/>
    Name: {{ $name }}<br/>
    <br/>
    Message:<br/>
    {{ $message_content }}
@endcomponent
