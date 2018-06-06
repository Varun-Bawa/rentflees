    <?php $__env->startSection('content'); ?>
        <h1 align="center">About <?php echo e($company); ?></h1>
        <p>This is some Lorem ipsum test</p>
        <h3>Owned by <?php echo e($co_owner); ?></h3>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>