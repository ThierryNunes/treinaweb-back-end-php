

<?php $__env->startSection('titulo', 'Criar Diarista'); ?>

<?php $__env->startSection('conteudo'); ?>
    <h1>Criar Diarista</h1>
    <form action="<?php echo e(route('diaristas.store')); ?>" method="POST" enctype="multipart/form-data">      
        <?php echo $__env->make('_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Faculdade\Certificado\Cursos Online\TreinaWeb\treinaweb-multistack\e-diaristas\resources\views/create.blade.php ENDPATH**/ ?>