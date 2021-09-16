

<?php $__env->startSection('content'); ?>
     <h3>Create Student academic activity</h3>
     <?php echo Form::open(['action' => 'AcademicsController@store','method'=>'POST']); ?>

          <div class="form-group">
               <?php echo e(Form::label('name','Name')); ?>

               <?php echo e(Form::text('name','',['class'=>'form-control','placeholder' =>'Name'])); ?>

          </div>
          <div class="form-group">
               <?php echo e(Form::label('uid','Student-ID')); ?>

               <?php echo e(Form::text('uid','',['class'=>'form-control','placeholder' =>'Student-ID'])); ?>

          </div>
          <div class="form-group">
               <?php echo e(Form::label('course','Course-name')); ?>

               <?php echo e(Form::text('course','',['class'=>'form-control','placeholder' =>'Course-name'])); ?>

          </div>
          <div class="form-group">
               <?php echo e(Form::label('gpa','Obtained GPA')); ?>

               <?php echo e(Form::text('gpa','',['class'=>'form-control','placeholder' =>'Obtained GPA'])); ?>

          </div>
          <div class="form-group">
               <?php echo e(Form::label('semester','Current-Semester')); ?>

               <?php echo e(Form::text('semester','',['class'=>'form-control','placeholder' =>'Current-Semester'])); ?>

          </div>
          <div class="form-group">
               <?php echo e(Form::label('comment','Your-comment')); ?>

               <?php echo e(Form::text('comment','',['class'=>'form-control','placeholder' =>'Your-comment'])); ?>

          </div>
          <?php echo e(Form::submit('submit',['class'=>'btn btn-primary'])); ?>

     <?php echo Form::close(); ?>

       
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\Student_record\resources\views/Academics/create.blade.php ENDPATH**/ ?>