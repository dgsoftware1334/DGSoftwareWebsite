
<?php 

$services = App\Models\Service::all();
?> 
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="<?php echo e(url('employe/'. Auth::user()->id)); ?>"><img src="<?php echo e(asset('storage/'. Auth::user()->profile_photo_path)); ?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->prenom); ?></h5>
          <li class="mt">
            <a class="active" href="<?php echo e(url('/home')); ?>">
              <i class="fa fa-dashboard"></i>
              <span>Tableau de bord</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="<?php echo e(url('/employes')); ?>">
              <i class="fa fa-user"></i>
              <span>le personnel</span>
              </a> 
          </li>
          <li class="sub-menu">
            <a href="<?php echo e(url('/services')); ?>">
              <i class="fa fa-tasks"></i>
              <span>Services</span>
              </a> 
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-users"></i>
              <span>Groupes</span>
              </a>
          </li> 
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Commandes</span>
              </a>
            <ul class="sub">
              <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $serv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(url('commandes/'.$serv->id.'/details')); ?>"><?php echo e($serv->titre); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Messagerie </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="<?php echo e(url('statistiques')); ?>">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Statistiques</span>
              </a> 
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Notifications</span>
            </a>
            
          </li> 
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside><?php /**PATH C:\laragon\www\DGSoftware\resources\views/layouts/mainSideBar.blade.php ENDPATH**/ ?>