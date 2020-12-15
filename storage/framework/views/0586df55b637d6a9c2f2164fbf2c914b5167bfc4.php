<?php $__env->startPush('plugin-styles'); ?>
  <?php echo Html::style('/assets/plugins/dragula/dragula.min.css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('plugin-scripts'); ?>
  <?php echo Html::script('/assets/plugins/dragula/dragula.min.js'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('custom-scripts'); ?>
  <?php echo Html::script('/assets/js/dragula.js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-ECG\resources\views\pages\sample.blade.php ENDPATH**/ ?>