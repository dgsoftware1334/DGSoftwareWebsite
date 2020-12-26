

<?php $__env->startSection('content'); ?>
<div class="panel-header panel-header-sm">
  </div>

 <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <a class="btn btn-primary btn-round text-white pull-right" href="<?php echo e(url('user/create')); ?>" title="Ajouter utilisateur">Ajouter</a>
            <h4 class="card-title">Liste d'utilisateurs</h4>
            <div class="col-12 mt-2">
                  <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                  <?php echo $__env->make('alerts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Profil</th>
                  <th>Nom D'utilisateur</th>
                  <th>Email</th>
                  <th>Date d'ajout</th>
                  <th class="disabled-sorting text-right">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td>
                      <span class="avatar avatar-sm rounded-circle">
                        <img src="<?php echo e(asset('storage/'.$user->profile_photo_path)); ?>" alt="" style="max-width: 80px; border-radiu: 100px">
                      </span>
                    </td>
                    <td><?php echo e($user->name); ?> <span style="font-weight: bold;" class="pull-right">(<?php echo e($user->status); ?>)</span> </td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->created_at); ?><p class=" text-muted" style="font-size:10px" align="right">membre  <?php echo e($user->created_at->locale('fr')->diffForHumans()); ?></p></td>
                      <td class="text-right">
                         <form  action="<?php echo e(url('profile/'.$user->id)); ?>" method="post" onsubmit="return confirm('Etes vous sure de vouloir supprimer cet utilisateur?')">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                          <button type="submit" rel="tooltip" class="btn btn-danger btn-icon btn-sm" data-original-title="Suprrimer Profil" title="Supprimer"><i class="now-ui-icons ui-1_simple-delete"></i></button>

                        </form>
                      </td>
                  </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
            </table>
          </div>
          <!-- end content-->
        </div>
        <!--  end card  -->
      </div>
      <!-- end col-md-12 -->
    </div>
    <!-- end row -->
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Utilisateurs',
    'activePage' => '',
    'activeNav' => '',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-ECG\resources\views/users/index.blade.php ENDPATH**/ ?>