<?php $__env->startComponent('mail::message'); ?>
# Demande d'abonnement refusée

<h2 style="color: red">Alerte !</h2>
<br>
Il semble que votre inscription n'a pas été acceptée par l'administrateur <br>
<ul>
	<li>soit parce que la photo de votre reçu de paiement n'était pas clair</li>
	<li>soit parce que vous avez soumis une photo non valide</li>
</ul>

Veuillez confirmer que vous avez téléchargé la bonne photo !

<img src="<?php echo e(asset('storage/'.$recuCCP)); ?>" alt="Recu de paiment" style="max-width: 100%; height: auto;">

<?php $__env->startComponent('mail::panel'); ?>
Pour résoudre ce problème, veuillez remplir à nouveau le formulaire correctement:
<?php if (isset($__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c)): ?>
<?php $component = $__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c; ?>
<?php unset($__componentOriginal78a7183c9f5e577b074162f44312b5a9c6fd7b4c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>


<?php $__env->startComponent('mail::button', ['url' => '/inscription','color' => 'error']); ?>
Réinscrir
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

Merci,<br>
<?php echo e(config('E-ECG')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\laragon\www\E-ECG\resources\views/emails/demandesNonValide.blade.php ENDPATH**/ ?>