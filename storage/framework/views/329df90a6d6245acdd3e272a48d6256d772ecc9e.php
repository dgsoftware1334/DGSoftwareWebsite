
<?php $__env->startSection('content'); ?>
<div class="panel-header panel-header-sm"></div>

<div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
           <?php if(session()->has('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong><?php echo e(session()->get('success')); ?> </strong>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           <?php elseif(session()->has('error')): ?>
           <div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong><?php echo e(session()->get('error')); ?> </strong>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
            </div>
           <?php endif; ?>
          <div class="card-header">
            <h4 class="card-title">Liste d'abonnés</h4>
            <div class="col-12 mt-2"></div>
          </div>
          <div class="card-body">
            <div class="toolbar">
              <!--        Here you can write extra buttons/actions for the toolbar              -->
            </div>
            <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Profil</th>
                  <th>Nom</th>
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
                    <td><?php echo e($user->name); ?><p class=" text-muted" style="font-size:10px" align="right">Abonné  <?php echo e($user->created_at->locale('fr')->diffForHumans()); ?></p></td>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->created_at); ?> <span style="font-weight: bold;" class="pull-right">(<?php echo e($user->status); ?>)</span> </td>
                      <td class="text-right">
                         <form  action="<?php echo e(url('profile/'.$user->id)); ?>" method="post" onsubmit="return confirm('Etes vous sure de vouloir supprimer cet utilisateur?')">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                          <a href="<?php echo e(url('')); ?>" type="button" rel="tooltip" class="btn btn-info btn-sm btn-round btn-icon" title="Ajouter une durée"><i class="now-ui-icons arrows-1_refresh-69"></i>
                          </a>
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
    'namePage' => 'Liste des abonnés',
    'activePage' => 'profile',
    'activeNav' => '',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-ECG\resources\views/demandes/abonnés.blade.php ENDPATH**/ ?>