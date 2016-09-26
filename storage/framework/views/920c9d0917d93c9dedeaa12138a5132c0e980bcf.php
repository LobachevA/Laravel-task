<?php $__env->startSection('hash'); ?>
    <p>Выбранные слова и их хеш</p>
    <?php if(!empty($_POST['submit'])): ?>
    <?php foreach($_POST['words'] as $word): ?>
        <?php foreach($_POST['alg'] as $alg): ?>
        <p>Слово <?php echo $word; ?> Метод <?php echo $alg; ?> Результат: <?php echo hash($alg,$word); ?></p>
        <?php endforeach; ?>
    <?php endforeach; ?>
    <?php endif; ?>
    <form action="/home" method="post">
        <input type="hidden" id="_token"  name="_token" value="<?php echo e(csrf_token()); ?>">
        <input type="hidden"  name="s" value="<?php echo e($s); ?>">
        <input type="submit" name="save" value="Save">
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>