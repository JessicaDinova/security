<?php $__env->startSection('content'); ?>
    <div style="display: flex; flex-direction: row; gap: 66%; margin-bottom: 30px; margin-top: 10px">
        <h1 class="title"><?php echo e($subscriber->name); ?> <?php echo e($subscriber->surname); ?></h1>
        <a href="<?php echo e(route('subscribers.index')); ?>" class="button" style="text-decoration: none;">Back to overview</a>
    </div>
    <table class="table is-striped has-text-centered">
        <thead>
        <tr>
            <th class="has-text-centered">ID</th>
            <th class="has-text-centered">Name</th>
            <th class="has-text-centered">Surname</th>
            <th class="has-text-left">Money spent on your paw pics</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo e($subscriber->id); ?></td>
                <td><?php echo e($subscriber->name); ?></td>
                <td><?php echo e($subscriber->surname); ?></td>
                <td class="has-text-left"><?php echo e($subscriber->moneySpent); ?>€</td>
            </tr>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jessi\PhpstormProjects\untitled\Laravel_php\security\resources\views/auth/subscribers/show.blade.php ENDPATH**/ ?>