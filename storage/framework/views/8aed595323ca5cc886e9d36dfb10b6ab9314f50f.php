

<?php $__env->startSection('content'); ?>

 <section id="main-content">
      <section class="wrapper">

<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <?php if(session('success')): ?>
                      <center>  <div class="alert alert-success">
                           <b> <?php echo e(session('success')); ?> </b>
                        </div> </center>
              <?php endif; ?>

              <?php if(session('delete')): ?>
                      <center>  <div class="alert alert-danger">
                           <b> <?php echo e(session('delete')); ?> </b>
                        </div> </center>
              <?php endif; ?>

              <?php if($errors->any()): ?>
                       <center> <div class="alert alert-danger">
                            <ul style="list-style-type:disc;">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <b>Une erreur est survenue!</b>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div></center>
              <?php endif; ?>

              <table class="table table-striped table-advance table-hover" width="100%">
                <h4><i class="fa fa-users"></i> Services <span class="pull-right" style="margin-right: 20px;  margin-top: -10 px;">

                  
                 
                  <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal">Ajouter</a></span></h4>

                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Titre</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Description</th>
                    <th><i class="fa fa-bookmark"></i>Prix</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td>
                      <a href="basic_table.html#"><?php echo e($service->titre); ?></a>
                    </td>
                    <td class="hidden-phone"> describe</td>
                    <td><?php echo e($service->prix); ?> DA</td>
                    <td><span class="label label-info label-mini"></span></td>
                    <td>

                      <form action="<?php echo e(url('/delete/service/'.$service->id)); ?>" method="post" onsubmit="return confirm('Voulez vous vraiment supprimer ce service?')">
                  <?php echo e(csrf_field()); ?>

                  <?php echo e(method_field('DELETE')); ?>

                      <a class="btn btn-success btn-ms" title="Details"><i class="fa fa-align-justify" data-toggle="modal" data-target="#ShowModel-<?php echo $service->id;  ?>" ></i></a>
                      <a class="btn btn-primary btn-ms" data-toggle="modal" data-target="#Mymodel-<?php echo $service->id;  ?>" title="Modifier"><i class="fa fa-pencil"></i></a>
                      <button class="btn btn-danger btn-ms" type="submit" title="Supprimer"><i class="fa fa-trash-o "></i></button>
                    </td>
                  </tr>
                </form>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>


<!--                       Ajouter Service                 -->

         <div class="container">
  
  <!-- Trigger the modal with a button -->
 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nouveau service</h4>
        </div>
        <div class="modal-body">
          <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="<?php echo e(route('upload.upload_photo')); ?>"
          enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>

                          <div class="form-group ">
                    <label for="titre" class="control-label col-lg-2">Nom service</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="titre" name="titre" type="text" />
                      <?php $__errorArgs = ['titre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="alert alert-danger"><?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="description" class="control-label col-lg-2">Description</label>
                    <div class="col-lg-10">
                     <textarea type="text" name="description"  value="<?php echo e(old('description')); ?>"></textarea>
                     <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="alert alert-danger"><?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="prix" class="control-label col-lg-2">Prix</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="prix" name="prix" type="text" />
                      <?php $__errorArgs = ['prix'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="alert alert-danger"><?php echo e($message); ?></div>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="photo" class="control-label col-lg-2">Photo</label>
                    <div class="col-lg-10">
                     <input type="file" name="files" id="fileToUpload">
                     <?php $__errorArgs = ['files'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  </div>
                  
                  
          
        </div>
        <div class="modal-footer">
         <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Enregistrer</button>
                      <button class="btn btn-theme04" type="button" data-dismiss="modal">Fermer</button>
                    </div>
                  </div>
        </div>
      </div>
      </form>
      
    </div>
  </div>
  
</div>



  <!--                   Modifier Service                  -->

<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="container">
                  <!-- Modal -->
  <div class="modal fade" id="Mymodel-<?php echo $service->id;?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modifier service</h4>
        </div>
        <div class="modal-body">
          <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="<?php echo e(url('/service/update/'.$service->id)); ?>"
          enctype="multipart/form-data">
                      
                      <?php echo method_field('PUT'); ?>
                      <?php echo csrf_field(); ?>

                          <div class="form-group ">
                    <label for="titre" class="control-label col-lg-2">Nom service</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="titre" name="titre" type="text" value="<?php echo e($service->titre); ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="description" class="control-label col-lg-2">Description</label>
                    <div class="col-lg-10">
                     <textarea type="text" name="description"  value="<?php echo e(old('description')); ?>" > <?php echo e($service->description); ?> </textarea>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="prix" class="control-label col-lg-2">Prix</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="prix" name="prix" type="text" value="<?php echo e($service->prix); ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="photo" class="control-label col-lg-2">Photo</label>
                    <div class="col-lg-10">
                     <input type="file" name="files" id="fileToUpload" value="<?php echo e($service->photo); ?>">
                    </div>
                  </div>
                  
                  
          
        </div>
        <div class="modal-footer">
         <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Enregistrer</button>
                      <button class="btn btn-theme04" type="button" data-dismiss="modal">Fermer</button>
                    </div>
                  </div>
        </div>
      </div>
      </form>
      
    </div>
  </div>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<!--       SHOW SERVICE   -->
<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="container">
                  <!-- Modal -->
  <div class="modal fade" id="ShowModel-<?php echo $service->id;?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Détails service</h4>
        </div>
        <div class="modal-body">

                             <div class="container">
                                <div class="row">
                                  <div class="col-sm-2">
                                    <b>Titre:</b>
                                  </div>
                                  <div class="col-sm-4">
                                    <?php echo e($service->titre); ?>

                                  </div>
                                </div>

                               <div class="row">
                                  <div class="col-sm-6">
                                    <b><hr></b>
                                  </div>
                                </div>


                                <div class="row">
                                  <div class="col-sm-2">
                                    <b>Description:</b>
                                  </div>
                                  <div class="col-sm-4">
                                    <?php echo e($service->description); ?>

                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-6">
                                    <b><hr></b>
                                  </div>
                                </div>

                                 <div class="row">
                                  <div class="col-sm-2">
                                    <b>Prix:</b>
                                  </div>
                                  <div class="col-sm-4">
                                    <?php echo e($service->prix); ?>

                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-6">
                                    <b><hr></b>
                                  </div>
                                </div>

                                 <div class="row">
                                  <div class="col-sm-2">
                                    <b>Photo</b>
                                  </div>
                                  <div class="col-md-3 card card-image" style=" background-image: url('../storage/<?php echo e($service->photo); ?>'); background-size: 300px 250px; ">
                                    
                                  </div>
                                </div>
                              </div>
                      

              
                  
                  
          
        </div>
        <div class="modal-footer">
         <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      
                      <button class="btn btn-theme04" type="button" data-dismiss="modal">Fermer</button>
                    </div>
                  </div>
        </div>
      </div>
      </form>
      
    </div>
  </div>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      </section>
    </section>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/services/index.blade.php ENDPATH**/ ?>