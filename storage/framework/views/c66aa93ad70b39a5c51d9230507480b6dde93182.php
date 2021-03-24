

<?php $__env->startSection('content'); ?>

<script>
function Verifier() {
  var x = document.getElementById("password").value;
  var y = document.getElementById("confirm_password").value;

  if(x == y){
      document.getElementById("password").style.borderColor = "green";
      document.getElementById("confirm_password").style.borderColor = "green";
      document.getElementById("verif").textContent = "Mots de passes identiques";
      document.getElementById("verif").style.color = "green";

  } else{

    document.getElementById("confirm_password").style.borderColor = "red";
    document.getElementById("confirm_password").style.borderColor ="red";
    document.getElementById("verif").textContent = "Mots de passes non identiques";
    document.getElementById("verif").style.color = "red";
  }
  
}

function check() {
  var x = document.getElementById("password").value;
  var y = document.getElementById("confirm_password").value;

  if(x != y){
      throw "Mot de passes non compatibles!";
  }
  
}

</script>

 <section id="main-content">
      <section class="wrapper">

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


<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover" width="100%">
                <h4><i class="fa fa-users"></i> Employés <span class="pull-right" style="margin-right: 20px;  margin-top: -10 px;"><a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModal">Ajouter</a></span></h4>

                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Nom Prénom</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Username</th>
                    <th><i class="fa fa-bookmark"></i> Profil</th>
                    <th><i class=" fa fa-edit"></i> Email</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <?php $__currentLoopData = $employes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td>
                      <a href="basic_table.html#"><?php echo e($employe->name); ?> <?php echo e($employe->prenom); ?></a>
                    </td>
                    <td class="hidden-phone"><?php echo e($employe->username); ?></td>
                    <td><span class="label label-info"><?php echo e($employe->profil); ?></span> </td>
                    <td><?php echo e($employe->email); ?></td>
                    <td>

                      <form action="<?php echo e(url('/delete/employe/'.$employe->id)); ?>" method="post" onsubmit="return confirm('Voulez vous vraiment supprimer cet employé?')">
                  <?php echo e(csrf_field()); ?>

                  <?php echo e(method_field('DELETE')); ?>

                      <a href="<?php echo e(url('/profil/'.$employe->id)); ?>" class="btn btn-success btn-ms" title="Details"><i class="fa fa-align-justify"></i></a>
                      <a class="btn btn-primary btn-ms" data-toggle="modal" data-target="#Mymodel-<?php echo $employe->id;  ?>" title="Modifier"><i class="fa fa-pencil"></i></a>
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
  

  <!--           Ajouter Service      -->
    <div class="container">
  
  <!-- Trigger the modal with a button -->
 
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Nouveau employé</h4>
        </div>
        <div class="modal-body">
          <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="<?php echo e(route('upload.store_employer')); ?>" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
                          <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Nom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="firstname" type="text" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Prénom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="lastname" type="text" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Username</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="username" type="text" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="datenaissance" class="control-label col-lg-2">Date de naissance</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="datenaissance" name="datenaissance" type="date" required />
                    </div>
                  </div>

                   <div class="form-group ">
                    <label for="phone" class="control-label col-lg-2">Téléphone</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="phone" name="phone" type="text" required />
                    </div>
                  </div>

                   <div class="form-group ">
                    <label for="address" class="control-label col-lg-2">Adresse</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="address" name="address" type="text" required />
                    </div>
                  </div>


                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="email" type="email" required />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Mot de passe</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="password" type="password" required />

                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2">Confirmer mot de passe</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="confirm_password" name="confirm_password" type="password" oninput="Verifier()" required />
                      <p id="verif"></p>
                    </div>
                  </div>
                  
                 
                  <div class="form-group ">
                    <label for="profil" class="control-label col-lg-2">Profil</label>
                    <div class="col-lg-10">
                            <select class="form-control" id="cars" name="profil" required>
                              <option value="admin">Administrateur</option>
                              <option value="devlopper">Développeur</option>
                              <option value="designer">Designer</option>
                              
                            </select>
                      </div>      
                  </div>

                  <div class="form-group ">
                    <label for="photo" class="control-label col-lg-2">Photo</label>
                    <div class="col-lg-10">
                     <input type="file" name="files" id="fileToUpload">
                    </div>
                  </div>
                  
                  
          
        </div>
        <div class="modal-footer">
         <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" onsubmit="check()" >Save</button>
                      <button class="btn btn-theme04" type="button" data-dismiss="modal">Cancel</button>
                    </div>
                  </div>
        </div>
      </div>
      </form>
      
    </div>
  </div>
  
</div>


 <!--                   Modifier Service                  -->

<?php $__currentLoopData = $employes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="container">
                  <!-- Modal -->
  <div class="modal fade" id="Mymodel-<?php echo $e->id; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modifier employé</h4>
        </div>
        <div class="modal-body">
          <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="<?php echo e(url('/employe/update/'.$e->id)); ?>"
          enctype="multipart/form-data">
                      
                      <?php echo method_field('PUT'); ?>
                      <?php echo csrf_field(); ?>

                         <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Nom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="firstname" type="text" required value="<?php echo e($e->name); ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2">Prénom</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="lastname" type="text" required value="<?php echo e($e->prenom); ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2">Username</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="username" type="text" required value="<?php echo e($e->username); ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="datenaissance" class="control-label col-lg-2">Date de naissance</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="datenaissance" name="datenaissance" type="date" required value="<?php echo e($e->dateNaissance); ?>" />
                    </div>
                  </div>

                   <div class="form-group ">
                    <label for="phone" class="control-label col-lg-2">Téléphone</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="phone" name="phone" type="text" required value="<?php echo e($e->telephone); ?>" />
                    </div>
                  </div>

                   <div class="form-group ">
                    <label for="address" class="control-label col-lg-2">Adresse</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="address" name="address" type="text" required value="<?php echo e($e->address); ?>" />
                    </div>
                  </div>


                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="email" type="email" value="<?php echo e($e->email); ?>" required/>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Ancien mot de passe</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="oldpassword" type="password" required />

                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2">Nouveau mot de passe</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="password" type="password" required />

                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2">Confirmer mot de passe</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="confirm_password" name="confirm_password" type="password" oninput="Verifier()" required />
                      <p id="verif"></p>
                    </div>
                  </div>
                  
                 
                  <div class="form-group ">
                    <label for="profil" class="control-label col-lg-2">Profil</label>
                    <div class="col-lg-10">
                            <select class="form-control" id="cars" name="profil" required>
                              <option value="admin">Administrateur</option>
                              <option value="devlopper">Développeur</option>
                              <option value="designer">Designer</option>
                              
                            </select>
                      </div>      
                  </div>

                  <div class="form-group ">
                    <label for="photo" class="control-label col-lg-2">Photo</label>
                    <div class="col-lg-10">
                     <input type="file" name="files" id="fileToUpload" value="<?php echo e($e->photo); ?>">
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


</section>
  </section>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DGSoftware\resources\views/employes/index.blade.php ENDPATH**/ ?>