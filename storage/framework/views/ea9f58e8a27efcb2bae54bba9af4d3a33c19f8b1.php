<style type="text/css">
   .avatar{
     border-radius: 100%;
     max-width: 100px;
}
   .profile{
     align-items: left;
   }
   .posts{
     align-items: center;
   }
   </style>
<?php $__env->startSection('content'); ?>
<div class="banner_area banner_2">
    <img src="images/blog-banner.jpg" alt="" class="banner_img">
    <div class="media profile_picture">
      <div class="profile" alt="" class="circle">
        <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
        <div class="col-md-4">
          <?php if(!empty($profile)): ?>
          <img src="<?php echo e($profile->profile_pic); ?>"
          class="" alt=""/>
          <?php else: ?>
          <img src="<?php echo e(url('images/avatar.png')); ?>"
          class="avatar" alt=""/>
          <?php endif; ?>
          <?php if(!empty($profile)): ?>
          <p class="media_body"><?php echo e($profile->name); ?></p>
          <?php else: ?>
      <p></p>
          <?php endif; ?>
          <?php if(!empty($profile)): ?>
        <p class="media_body"><?php echo e($profile->designation); ?></p>
          <?php else: ?>
        <p></p>
          <?php endif; ?>
        </div>
      </div>

    </div>
</div>
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
                <div class="card-header">
                   <div class="panel panel-default text-center">
                     <div class="panel-heading">
                       <div class="row">
                         <div class="col-md-4">Blog</div>
                         <div class="col-md-8">
                           <form method="POST" action= '<?php echo e(url("/search")); ?>' >
                             <?php echo e(csrf_field()); ?>

                             <div class="input-group">
                               <input type="text"  name="search" class="form-control"
                               placeholder="Search for....">
                               <span class="input-group-btn">
                                 <button type="submit" class="btn btn-default">
                                   Go!
                                 </button>
                               </span>

                             </div>
                           </form>
                         </div>
                       </div>
                     </div>
                      <div class="col-md-8" >
                        <div class="posts">
                        <?php if(count($posts) > 0): ?>
                        <?php $__currentLoopData = $posts ->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h4><?php echo e($post->post_title); ?></h4>

                        <img src=" <?php echo e($post->post_image); ?>" alt="">
                        <p><?php echo e(substr( $post->post_body, 0,150)); ?></p>
                         <ul class="nav nav-pills">
                           <li role="presentation">
                             <a href='<?php echo e(url("/view/{$post->id}")); ?>' >
                               <span class="far fa-eye" > VIEW </span>
                             </a>
                           </li>
                            <?php if(Auth::id() ==12): ?>
                               <li role="presentation">
                                 <a href='<?php echo e(url("/edit/{$post->id}")); ?>'>
                                  <span class="fas fa-edit" > Edit</span>
                                </a>
                               </li>
                           <li role="presentation">
                             <a href='<?php echo e(url("/delete/{$post->id}")); ?>'>
                               <i class="fas fa-trash-alt" >  Delete </i>
                             </a>
                           </li>
                           <?php endif; ?>
                         </ul>
                        <cite style="">Posted on: <?php echo e(date('M j,Y H:i',
                           strtotime($post->updated_at))); ?></cite>
                        <hr/>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                            <p> No Post Available</p>

                            <?php endif; ?>
                            <?php echo e($posts->links()); ?>


                </div>
            </div>
      </div>
    </div>
  </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/resources/views/home.blade.php ENDPATH**/ ?>