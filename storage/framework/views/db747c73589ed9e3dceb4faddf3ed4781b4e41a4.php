<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post</div>

                <div class="card-body">
                <div class="row">
                  <form method="POST" action="<?php echo e(url('addPost')); ?>"
                  enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>

                      <div class="form-group row">
                          <label for="post_title" class="col-md-4 col-form-label text-md-right">
                          Title</label>
                          <div class="col-md-6">
                              <input id="post_title" type="text"
                              class="form-control <?php if ($errors->has('post_title')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('post_title'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                               name="post_title" value="<?php echo e(old('post_title')); ?>"
                               required autocomplete="post_title" autofocus>

                              <?php if ($errors->has('post_title')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('post_title'); ?>
                                  <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                  </span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="post_body" class="col-md-4 col-form-label text-md-right">
                            Post Body</label>
                          <div class="col-md-6">
                              <textarea id="post_body"
                              class="form-control <?php if ($errors->has('post_body')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('post_body'); ?>
                              is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="post_body"
                              value="<?php echo e(old('post_body')); ?>" required
                            ></textarea>

                              <?php if ($errors->has('post_body')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('post_body'); ?>
                                  <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                  </span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="category_id" class="col-md-4 col-form-label text-md-right">
                            Categories</label>

                          <div class="col-md-6">
                              <select id="category_id" type="category_id"
                              class="form-control <?php if ($errors->has('category_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('category_id'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                               name="category_id" required>
                               <option value="">Select</option>
                                <?php if(count($categories) > 0): ?>
                                <?php $__currentLoopData = $categories ->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>">
                                  <?php echo e($category->category); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                              </select>
                              <?php if ($errors->has('category_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('category_id'); ?>
                                  <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                  </span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="post_image" class="col-md-4 col-form-label text-md-right">
                          Featured Image</label>
                          <div class="col-md-6">
                              <input id="post_image" type="file"
                              class="form-control <?php if ($errors->has('designation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('designation'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                              name="post_image" required>
                              <?php if ($errors->has('post_image')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('post_image'); ?>
                                  <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                  </span>
                              <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                          </div>
                      </div>


                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary btn-large btn-block">
                                Publish Post
                              </button>
                          </div>
                      </div>
                  </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/posts/post.blade.php ENDPATH**/ ?>