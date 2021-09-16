


<?php $__env->startSection('content'); ?>
<h3> academics</h3>
<?php if(count($Academics)>0): ?>
     <?php $__currentLoopData = $Academics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $academy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <div class="well">
          <h3><a href="/Academics/<?php echo e($academy->id); ?>"> <?php echo e($academy->uid); ?></a></h3>
          <small>semester: <?php echo e($academy->semester); ?></small>
          <small>||course: <?php echo e($academy->course); ?></small>
     </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     <?php echo e($Academics->links()); ?>

<?php endif; ?>
     
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\Student_record\resources\views/Academics/index.blade.php ENDPATH**/ ?>