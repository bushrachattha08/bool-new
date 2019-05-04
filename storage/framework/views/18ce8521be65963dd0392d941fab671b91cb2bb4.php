<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <?php if(count($errors) > 0): ?>
             <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div class="alert alert-danger"><?php echo e($error); ?></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>

           <?php if(session('response')): ?>
            <div class="alert alert-success"><?php echo e(session('response')); ?></div>
           <?php endif; ?>
            <div class="card">
                <div class="card-header">Category</div>
                <div class="card-body">
                  <form method="POST" action="<?php echo e(url('/addCategory')); ?>">
                      <?php echo csrf_field(); ?>

                      <div class="form-group row">
                          <label for="category" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Enter Category')); ?></label>

                          <div class="col-md-6">
                              <input id="category" type="category" class="form-control <?php if ($errors->has('category')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('category'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                              name="category" value="<?php echo e(old('category')); ?>"
                              required autocomplete="category" autofocus>

                              <?php if ($errors->has('category')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('category'); ?>
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
                              <button type="submit" class="btn btn-primary">
                                  <?php echo e(__('add Category')); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/categories/category.blade.php ENDPATH**/ ?>