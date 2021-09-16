

<?php $__env->startSection('content'); ?>
     <h1>Important Updates</h1>
     <?php if(count($posts)>=1): ?>
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="well"> 
                    <h3><a href="/posts/<?php echo e($post->id); ?>"> <?php echo e($post->title); ?></h3>
                    <small>posted on<?php echo e($post->created_at); ?></small>
               </div> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php echo e($posts->links()); ?>

     <?php else: ?>
          <p>Tour duye asho, kaj nai</p>
     <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\Student_record\resources\views/posts/index.blade.php ENDPATH**/ ?>