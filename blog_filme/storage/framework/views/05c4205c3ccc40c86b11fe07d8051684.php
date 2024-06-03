<?php $__env->startSection('title', 'Lista Escolha'); ?>

<?php $__env->startSection('content'); ?>

    <?php if($id != null): ?>
    <p>Id filme: <?php echo e($id); ?></p>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\vinic\Documents\blog_filme\resources\views/listaescolha.blade.php ENDPATH**/ ?>