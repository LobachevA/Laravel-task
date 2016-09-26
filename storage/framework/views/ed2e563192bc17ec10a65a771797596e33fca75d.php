<?php /*

<?php $__env->startSection('startform'); ?>
    <form action="" method="post">
        <p>Выберите слова</p>
        <select name = "words[]" multiple size="4">
            <?php foreach($words as $word): ?>{
                echo "<option value =<?php echo e($word->word); ?>><?php echo e($word->word); ?></option>";}
            <?php endforeach; ?>
        </select>
        <p>Выберите алгоритм</p>
        <select name = "alg[]" multiple size="4">
            <option value ="md5">md5</option>
            <option value ="sha1">sha1</option>
            <option value ="tiger128,3">tiger128,3</option>
            <option value ="crc32">crc32</option>
            <option value ="haval128,3">haval128,3</option>
        </select>
        <p>
            <input type="hidden" id="_token"  name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="submit" name="submit" value="Send">
        </p>
    </form>
<?php $__env->stopSection(); ?>*/ ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>