

<?php
  $admin = session('admin');
?>

<?php $__env->startSection('content'); ?>
  <div class="card p-4">
    <div class="container bootstrap snippet">
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
        <!--/col-3-->
        <div class="col-sm-12">

          <h1>Detail User</h1>
          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <div class="w-100 d-flex justify-content-center">
                <label for="foto" class="text-center">
                  <img style="cursor: pointer;" src="<?php echo e(asset('img/' . $user->foto)); ?>" width="200px" height="200px"
                    class="rounded-circle" alt="foto profil" id="preview_foto">
                </label>
                <input disabled type="file" name="foto" id="foto" value="<?php echo e($user->foto); ?>" hidden>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="first_name">
                    <h5>Nama</h5>
                  </label>
                  <input disabled type="text" class="form-control" name="name" id="first_name"
                    value="<?php echo e($user->name); ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="email">
                    <h5>Email</h5>
                  </label>
                  <input disabled type="text" class="form-control" name="email" id="email"
                    value="<?php echo e($user->email); ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="phone">
                    <h5>Alamat</h5>
                  </label>
                  <input disabled type="text" class="form-control" name="alamat" id="alamat"
                    value="<?php echo e($detailUser->alamat); ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="mobile">
                    <h5>Tempat Lahir</h5>
                  </label>
                  <input disabled type="text" class="form-control" name="tempat_lahir" id="tempat_lahir"
                    value="<?php echo e($detailUser->tempat_lahir); ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="email">
                    <h5>Tanggal Lahir</h5>
                  </label>
                  <input disabled type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"
                    value="<?php echo e(date('Y-m-d', strtotime($detailUser->tanggal_lahir))); ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="foto_ktp">
                    <h5>Foto KTP</h5>
                  </label>
                  <img src="<?php echo e(asset('img/' . $detailUser->foto_ktp)); ?>" alt="" id="preview_foto_ktp"
                    class="w-50 mt-3">
                </div>
              </div>
              <div class="form-group">
                <div class="col-xs-6">
                  <label for="foto_ktp">
                    <h5>Umur</h5>
                  </label>
                  <input disabled type="number" class="form-control" id="umur" name="umur"
                    value="<?php echo e($detailUser->umur); ?>">
                </div>
              </div>
              <input disabled type="text" name="id" id="id" value="<?php echo e($user->id); ?>" hidden>
              <div class="form-group">
                <div class="col-xs-12">
                  <br>
                  <a href="<?php echo e(url('admin/dashboard62')); ?>" class="btn btn-lg btn-primary" type="submit"><i
                      class="fa fa-caret-left mr-2"></i>Kembali</a>
                </div>
              </div>

              <hr>

            </div>

          </div>
          <!--/tab-pane-->
        </div>
        <!--/tab-content-->

      </div>
      <!--/row-->
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\backend-laravel\resources\views/admin/detailUser.blade.php ENDPATH**/ ?>