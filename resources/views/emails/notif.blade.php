@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => env('APP_URL')])
Back
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent