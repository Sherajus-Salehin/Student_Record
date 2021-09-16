

<?php $__env->startSection('content'); ?>
     <h1><?php echo e($post->title); ?></h1>
     <small>Written on<?php echo e($post->created_at); ?></small>
     <div>
          <h3><?php echo e($post->body); ?></h3>
     </div>
     <?php if(Auth::user()->id==$post->user_id): ?>
     <?php echo Form::open(['action' => ['FeedController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

            <?php echo Form::close(); ?>

     <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\Student_record\resources\views/posts/show.blade.php ENDPATH**/ ?>