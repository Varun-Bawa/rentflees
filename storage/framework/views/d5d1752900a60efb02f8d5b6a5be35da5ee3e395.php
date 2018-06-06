<?php $__env->startSection('content'); ?>
    <h1 align="center">Displaying House </h1><h7>House id:<?php echo e($id); ?></h7>
    <p>This is some Lorem ipsum test</p>
    <h3>Rent : 13000</h3>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>