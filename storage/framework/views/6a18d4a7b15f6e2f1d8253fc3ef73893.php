
<?php $__env->startSection('content'); ?>

<h1>Welcome to your profile</h1>
<h2><?php echo e($name); ?></h2>
<h2><?php echo e($id); ?></h2>
<h2><?php echo e($dob); ?></h2>

<ul>
    <?php $__currentLoopData = $names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($n); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL PROJECT\Basic-Laravel\resources\views/profile.blade.php ENDPATH**/ ?>