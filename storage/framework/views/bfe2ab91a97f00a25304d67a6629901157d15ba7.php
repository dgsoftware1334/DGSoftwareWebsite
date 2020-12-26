<div class="sidebar" data-color="blue">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="<?php echo e(url('/')); ?>" class="simple-text">
       <img src="<?php echo e(asset('assets/img/logo/E-ECG-LOGO-[Converted].png')); ?>" alt="logo" style="width: 40px, widows: 40px;">
    <?php echo e(__('E-ECG')); ?>

    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="<?php if($activePage == 'home'): ?> active <?php endif; ?>">
        <a href="<?php echo e(route('home')); ?>">
          <i class="now-ui-icons design_app"></i>
          <p><?php echo e(__('Accueil')); ?></p>
        </a>
      </li>

      <li class = "<?php if($activePage == 'maps'): ?> active <?php endif; ?>">
        <a href="<?php echo e(url('cours')); ?>">
          <i class="now-ui-icons education_agenda-bookmark"></i>
          <p><?php echo e(__('Cours')); ?></p>
        </a>
      </li>
      <li class="<?php if($activePage == 'demandes'): ?> active <?php endif; ?>">
        <a href="<?php echo e(url('demandes')); ?>">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p><?php echo e(__("Demandes D'abonnement")); ?></p>
        </a>
      </li> 
      <li class = "<?php if($activePage == 'profile'): ?> active <?php endif; ?>">
        <a href="<?php echo e(url('abonnés')); ?>">
          <i class="now-ui-icons users_circle-08"></i>
          <p><?php echo e(__("Abonnés")); ?></p>
        </a>
      </li>    
      <li class = "<?php if($activePage == 'typography'): ?> active <?php endif; ?>">
        <a href="<?php echo e(route('page.index','typography')); ?>">
          <i class="now-ui-icons ui-1_email-85"></i>
          <p><?php echo e(__('Messages')); ?></p>
        </a>
      </li>
      <li class = " <?php if($activePage == 'notifications'): ?> active <?php endif; ?>">
        <a href="<?php echo e(route('page.index','notifications')); ?>">
          <i class="now-ui-icons ui-1_bell-53"></i>
          <p><?php echo e(__('Notifications')); ?></p>
        </a>
      </li>
      <li class = " <?php if($activePage == 'table'): ?> active <?php endif; ?>">
        <a href="<?php echo e(route('page.index','table')); ?>">
          <i class="now-ui-icons business_chart-bar-32"></i>
          <p><?php echo e(__('Statistiques')); ?></p>
        </a>
      </li>
    </ul>
  </div>
</div>
<?php /**PATH C:\laragon\www\E-ECG\resources\views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>