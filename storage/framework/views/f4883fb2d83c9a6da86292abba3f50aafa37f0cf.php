

<?php
  $admin = session('admin');
?>

<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-12">
      <?php if(session('success')): ?>
        <div class="alert alert-success">
          <?php echo e(session('success')); ?>

        </div>
      <?php endif; ?>

      <?php if(session('error')): ?>
        <div class="alert alert-error">
          <?php echo e(session('error')); ?>

        </div>
      <?php endif; ?>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="w-100 card-header card-header-primary">
              <h1 class="card-title ">Data Agama</h1>
            </div>
            <div class="card-body">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModalCenter">
                + Tambah
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Tambah data agama</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="<?php echo e(url('/tambahAgama62')); ?>" method="POST">
                      <?php echo csrf_field(); ?>
                      <div class="modal-body">
                        <div class="input-group mb-3">
                          <input name="nama_agama" type="name" class="form-control" placeholder="Nama agama">
                          <div class="input-group-append">
                            <div class="input-group-text">
                              <span class="fas fa-database"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <?php if($errors->any()): ?>
                          <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php echo e($error); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>
                        <?php endif; ?>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Nama
                    </th>
                    <th>
                      Action
                    </th>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $agamas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td>
                          <?php echo e($agama->id); ?>

                        </td>
                        <td>
                          <?php echo e($agama->nama_agama); ?>

                        </td>
                        <td>
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit">
                            Edit
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Edit data agama</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="<?php echo e(url('/updateAgama62', $agama->id)); ?>" method="POST">
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('PUT'); ?>
                                  <div class="modal-body">
                                    <div class="input-group mb-3">
                                      <input name="nama_agama" type="name" value="<?php echo e($agama->nama_agama); ?>"
                                        class="form-control" placeholder="Nama agama">
                                      <div class="input-group-append">
                                        <div class="input-group-text">
                                          <span class="fas fa-database"></span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <?php if($errors->any()): ?>
                                      <div class="alert alert-danger">
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <?php echo e($error); ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                      </div>
                                    <?php endif; ?>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>

                          <a href="<?php echo e(url("hapusAgama62/{$agama->id}")); ?>" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/row-->
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/admin/agama.blade.php ENDPATH**/ ?>