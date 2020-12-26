@component('mail::message')
# Compte d'accés E-ECG
<h2 style="color: red">Félicitation !</h2>
<br>
Votre inscription a été validée par l'administrateur, vous pouvez désormais accéder aux différents cours présentés dans <u>l'{{$user-> status}}</u>.

<video src="assets/heartbeat.mp4"  preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" width="100%" height="200px" style="background-color:black;"></video>


Veuillez vous connecter à votre compte avec:<br>
<b>l'email : </b> <i>{{$user->email}} </i>.<br>
<b>mot de passe :</b> <i> {{$motDepasse}}. </i><br><br>

@component('mail::panel')
Il est conseillé de changer votre mot de passe dans un premier temps après votre connexion avec un mot de passe dont vous vous souviendrez
@endcomponent


@component('mail::button', ['url' => '/login','color' => 'error'])
<b> Commencer</b>
@endcomponent


E-ECG vous souhaite la bienvenue dans la famille, <br> cordialement
@endcomponent
