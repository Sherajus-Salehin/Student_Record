



<?php $__env->startSection('content'); ?>
<h3>Student name:  <?php echo e($info->name); ?></h3>
<h4>ID:            <?php echo e($info->uid); ?></h4>
<h4>semester:      <?php echo e($info->semester); ?></h4>
<h4>Course:        <?php echo e($info->course); ?></h4>
<h4>GPA:           <?php echo e($info->gpa); ?></h4>
<h4>comment:       <?php echo e($info->comment); ?></h4>
<a href="/Academics/<?php echo e($info->id); ?>/edit" class="btn btn-default">Edit</a>
<?php echo Form::open(['action' => ['AcademicsController@destroy', $info->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\Student_record\resources\views/Academics/show.blade.php ENDPATH**/ ?>