<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                  <form method="POST" action="<?php echo e(url('/addProfile')); ?>" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>

                      <div class="form-group row">
                          <label for="name" class="col-md-4 col-form-label text-md-right">
                            <?php echo e(__('Enter Name')); ?></label>

                          <div class="col-md-6">
                              <input id="name" type="name" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                              is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>"
                              required autocomplete="name" autofocus>

                              <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                  <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                  </span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="designation" class="col-md-4 col-form-label text-md-right">
                            <?php echo e(__('Enter Designation')); ?></label>

                          <div class="col-md-6">
                              <input id="designation" type="designation"
                              class="form-control <?php if ($errors->has('designation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('designation'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                              name="designation" required autocomplete="designation">

                              <?php if ($errors->has('designation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('designation'); ?>
                                  <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                  </span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="profile_pic" class="col-md-4 col-form-label text-md-right">
                            <?php echo e(__('Profile Picture')); ?></label>

                          <div class="col-md-6">
                              <input id="profile_pic" type="file"
                              class="form-control <?php if ($errors->has('designation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('designation'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                              name="profile_pic" required autocomplete="profile_pic">

                              <?php if ($errors->has('profile_pic')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('profile_pic'); ?>
                                  <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                  </span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                          </div>
                      </div>



                      <div class="form-group row mb-0">
                          <div class="col-md-8 offset-md-4">
                              <button type="submit" class="btn btn-primary btn-lg">
                                  Add profile
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/profiles/profile.blade.php ENDPATH**/ ?>