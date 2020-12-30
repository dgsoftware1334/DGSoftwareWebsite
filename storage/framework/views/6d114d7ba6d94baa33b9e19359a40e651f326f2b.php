

<?php $__env->startSection('content'); ?>
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card ">
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
            <h4 class="card-title">Ajouter un cours</h4>
            <div class="col-12 mt-2">
            </div>
          </div>
          <div class="card-body ">
           <form method="POST" action="<?php echo e(url('/cours')); ?>" autocomplete="off" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <?php echo method_field('put'); ?>
              <?php echo $__env->make('alerts.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php echo $__env->make('alerts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

              <div class="form-group">
                <label for="exampleFormControlInput1">Titre de cours</label>
                <input type="text" class="form-control <?php $__errorArgs = ['cours'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="cours" id="exampleFormControlInput1" value="<?php echo e(old('cours')); ?>" autofocus required>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect2">Pour</label>
                <select class="form-control  <?php $__errorArgs = ['offre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" multiple="multiple" name="offre" value="<?php echo e(old('offre')); ?>" required>
                  <option align="center" class=" bg-warning" style="font-size:15px; font-weight:bold">--------------------------------------------------------Offres--------------------------------------------------------</option>
                 
                 <?php $__currentLoopData = $offres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <option value="<?php echo e($o->id); ?>"  <?php echo e((old('offre') ==$o->id) ? 'selected' : ''); ?>> <?php echo e($o->titre); ?> </option>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Durée</label> 
                <input type="time" class="form-control <?php $__errorArgs = ['durée'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('durée')); ?>" name="durée" required>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Catégorie</label>
                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="catégories" id="exampleRadios1" value="Cours" value="<?php echo e(old('catégories')); ?>" checked required>
                        Cours
                        <span class="form-check-sign"></span>
                    </label>
                </div>
                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="catégories" id="exampleRadios2" value="Cas clinique" value="<?php echo e(old('catégories')); ?>" required>
                         Cas clinique
                        <span class="form-check-sign"></span>
                    </label>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label> 
                <textarea class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description" id="exampleFormControlTextarea1" value="<?php echo e(old('description')); ?>" rows="5" required></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Vignette</label> 
                <div class="custom-file">
                  <input type="file" class="form-control <?php $__errorArgs = ['thumbnail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" accept=".png,.jpg,.jpeg," data-default-file="<?php echo e(old('thumbnail')); ?>" value="<?php echo e(old('thumbnail')); ?>" name="thumbnail" nullable>
                  <label class="custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
                  
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Cours</label> 
                <div class="custom-file">
                  <input type="file" accept=".mp4, .ogg, .WebM" data-default-file="<?php echo e(old('video')); ?>" class="form-control <?php $__errorArgs = ['video'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('video')); ?>" name="video">
                  <label class="custom-file-label" for="validatedCustomFile">Choisir une vidéo...</label>
                  
                </div>
              </div>
               <div class="card-footer " align="center">
                <button type="submit" class="btn btn-primary btn-round"><?php echo e(__('Enregistrer')); ?></button>
                <a href="<?php echo e(url('cours')); ?>" class="btn btn-default btn-round">Annuler</a>
              </div>
              <hr class="half-rule"/>

           </form>

          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', [
    'namePage' => 'Ajouter Cours',
    'class' => 'sidebar-mini',
    'activePage' => 'maps',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\E-ECG\resources\views/cours/create.blade.php ENDPATH**/ ?>