
 <?php if(auth()->guard()->check()): ?>
    
<?php endif; ?>
     <?php $__env->startSection('content'); ?>
        <h1>Services</h1>
        <?php if(count($services)>0): ?>
         <ul class="list-group"> 
               <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li class="list-group"><a href="/<?php echo e($service); ?>"><?php echo e($service); ?></a></li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </ul>
        <?php endif; ?>
     <?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\Student_record\resources\views/pages/services.blade.php ENDPATH**/ ?>