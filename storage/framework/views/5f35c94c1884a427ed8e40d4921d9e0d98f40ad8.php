<?php if(count($errors)>0): ?>
     <?php $__currentLoopData = $errors ->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="alert alert-danger">
          <?php echo e($error); ?>

     </div>
          
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
<?php endif; ?>

<?php if(session('success')): ?>
     <div class="alert alert-success">
          <?php echo e(sesssion('success')); ?>

     </div>
     
<?php endif; ?>
<?php if(session('error')): ?>
     <div class="alert alert-danger">
          <?php echo e(sesssion('error')); ?>

     </div>
     
<?php endif; ?><?php /**PATH H:\xampp\htdocs\Student_record\resources\views/inc/messages.blade.php ENDPATH**/ ?>