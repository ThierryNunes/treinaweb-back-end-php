

<?php $__env->startSection('titulo', 'Página Inicial'); ?>

<?php $__env->startSection('conteudo'); ?>
  <h1>Lista de Diaristas</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Telefone</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $diaristas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diarista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
            <th scope="row"> <?php echo e($diarista->id); ?> </th>
            <td> <?php echo e($diarista->nome_completo); ?> </td>
            <td> <?php echo e(\Clemdesign\PhpMask\Mask::apply($diarista->telefone, '(00) 00000-0000')); ?> </td>
            <td>
              <a href="<?php echo e(route('diaristas.edit', $diarista)); ?>" class="btn btn-primary">Atualizar</a>
              <a href="<?php echo e(route('diaristas.destroy', $diarista)); ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</a>
            </td>
        </tr>    
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <th></th>
            <td>Nenhum registro cadastrado</td>
            <td></td>
            <td></td>
        </tr>   
      <?php endif; ?>                          
    </tbody>
  </table>
  <a href="<?php echo e(route('diaristas.create')); ?>" class="btn btn-success">Nova Diarista</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Faculdade\Certificado\Cursos Online\TreinaWeb\treinaweb-multistack\e-diaristas\resources\views/index.blade.php ENDPATH**/ ?>