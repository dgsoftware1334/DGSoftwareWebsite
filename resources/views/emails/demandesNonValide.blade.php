@component('mail::message')
# Demande d'abonnement refusée

<h2 style="color: red">Alerte !</h2>
<br>
Il semble que votre inscription n'a pas été acceptée par l'administrateur <br>
<ul>
	<li>soit parce que la photo de votre reçu de paiement n'était pas clair</li>
	<li>soit parce que vous avez soumis une photo non valide</li>
</ul>

Veuillez confirmer que vous avez téléchargé la bonne photo !

<img src="{{ asset('storage/'.$recuCCP) }}" alt="Recu de paiment" style="max-width: 100%; height: auto;">

@component('mail::panel')
Pour résoudre ce problème, veuillez remplir à nouveau le formulaire correctement:
@endcomponent


@component('mail::button', ['url' => '/inscription','color' => 'error'])
Réinscrir
@endcomponent

Merci,<br>
{{ config('E-ECG') }}
@endcomponent
