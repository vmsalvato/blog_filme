<?php $__env->startSection('title', 'Lista'); ?>

<?php $__env->startSection('content'); ?>
    <?php if($busca != ''): ?>
     <p>Filme: <?php echo e($busca); ?> </p>        
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vinic\Documents\blog_filme\resources\views/lista.blade.php ENDPATH**/ ?>