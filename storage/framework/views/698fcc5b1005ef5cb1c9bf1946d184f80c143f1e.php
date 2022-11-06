

<?php
  $admin = session('admin');
  $users = session('users');
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
            <div class="card-header card-header-primary">
              <h1 class="card-title ">Data User</h1>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Aktif
                    </th>
                    <th>
                      Action
                    </th>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr <?php echo e($user->role === 2 ? 'hidden' : ''); ?>>
                        <td>
                          <?php echo e($user->id); ?>

                        </td>
                        <td>
                          <?php echo e($user->name); ?>

                        </td>
                        <td>
                          <?php echo e($user->email); ?>

                        </td>
                        <td>
                          <form action="<?php echo e(url('setIsAktif62/' . $user->id)); ?>" method="POST" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="btn-group btn-toggle">
                              <button <?php echo e($user->is_aktif === 1 ? '' : 'type="submit"'); ?>

                                class="btn btn-md <?php echo e($user->is_aktif == 1 ? 'btn-primary active' : 'btn-default'); ?>">Aktif</button>
                              <button <?php echo e($user->is_aktif === 0 ? '' : 'type="submit"'); ?>

                                class="btn btn-md <?php echo e($user->is_aktif == 0 ? 'btn-primary active' : 'btn-default'); ?>">Nonaktif</button>
                            </div>
                            <input type="number" name="is_aktif" id="is_aktif"
                              value="<?php echo e($user->is_aktif == 1 ? 0 : 1); ?>" hidden>
                          </form>
                        </td>
                        
                        <td>
                          <a href="<?php echo e(url('detailUser62/' . $user->id)); ?>" class="btn btn-primary btn-sm">Detail</a>
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\backend-laravel\resources\views/admin/index.blade.php ENDPATH**/ ?>