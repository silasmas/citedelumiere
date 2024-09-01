@component('mail::message')
# Bonjour Cher administrateur {{ $user->name }},

@component('mail::panel')
Vous avez reçu un message provenant d'un visiteur sur votre site dont les details sont ci-dessous :
@endcomponent

@component('mail::button', ['url' => config('app.url')."/login"])
Aller sur la partie admin
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
