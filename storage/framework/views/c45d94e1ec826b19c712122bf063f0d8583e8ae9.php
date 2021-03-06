<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Your saved hashes</div>
                <?php foreach($posts as $post): ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">#<?php echo e($post->id); ?></div>
                        <div class="panel-body">
                            <?php echo $post->content; ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>