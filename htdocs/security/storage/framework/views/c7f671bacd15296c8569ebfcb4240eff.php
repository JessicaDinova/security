<?php $__env->startSection('content'); ?>
    <section>
        <div style="display: flex; flex-direction: row; gap: 55%; margin-bottom: 30px; margin-top: 10px">
            <h2>Overview of your subscribers</h2>
            <a href="<?php echo e(route('subscribers.create')); ?>" class="button" style="text-decoration: none">Add new subscriber</a>
        </div>

        <table class="table is-striped has-text-centered">
            <thead>
            <tr>
                <th class="has-text-centered">ID</th>
                <th class="has-text-centered">Name</th>
                <th class="has-text-centered">Surname</th>
                <th colspan="4">Money spent on your paw pics</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $subscribers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscriber): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($subscriber->id); ?></td>
                    <td><?php echo e($subscriber->name); ?></td>
                    <td><?php echo e($subscriber->surname); ?></td>
                    <td><?php echo e($subscriber->moneySpent); ?>€</td>
                    <td><a href="<?php echo e(route('subscribers.show', $subscriber->id)); ?>" class="button" style="text-decoration: none">Show</a></td>
                    <td><a href="<?php echo e(route('subscribers.edit', $subscriber->id)); ?>" class="button" style="text-decoration: none">Edit</a></td>
                    <td>
                        <form method="POST" action="<?php echo e(route('subscribers.show', $subscriber->id)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="button">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jessi\PhpstormProjects\untitled\Laravel_php\security\resources\views/auth/subscribers/index.blade.php ENDPATH**/ ?>