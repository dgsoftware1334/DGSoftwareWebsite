<?php $__env->startComponent('mail::message'); ?>
# Compte d'accés E-ECG
<h2 style="color: red">Félicitation !</h2>
<br>
Votre inscription a été validée par l'administrateur, vous pouvez désormais accéder aux différents cours présentés dans <u>l'<?php echo e($user-> status); ?></u>.

<video src="assets/heartbeat.mp4"  preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" width="100%" height="200px" style="background-color:black;"></video>


Veuillez vous connecter à votre compte avec:<br>
<b>l'email : </b> <i><?php echo e($user->email); ?> </i>.<br>
<b>mot de passe :</b> <i> <?php echo e($motDepasse); ?>. </i><br><br>

<?php $__env->startComponent('mail::panel'); ?>
Il est conseillé de changer votre mot de passe dans un premier temps après votre connexion avec un mot de passe dont vous vous souviendrez
<?php if (isset($__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c)): ?>
<?php $component = $__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c; ?>
<?php unset($__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>


<?php $__env->startComponent('mail::button', ['url' => '/login','color' => 'error']); ?>
<b> Commencer</b>
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>


E-ECG vous souhaite la bienvenue dans la famille, <br> cordialement
<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\E-ECG\resources\views/emails/accountCreated.blade.php ENDPATH**/ ?>