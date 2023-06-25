<?php $__env->startSection('content'); ?>
    <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4" style="margin-top: 10px; margin-bottom: 20px">New subscriber</h1>

        <form method="POST" action="<?php echo e(route('subscribers.store')); ?>">
            <?php echo csrf_field(); ?>

            <div class="field">
                <label class="label" for="name">Name</label>
                <div class="control">
                    <input class="input <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           type="text"
                           name="name"
                           id="name"
                           value="<?php echo e(old('name')); ?>">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="help is-danger"><?php echo e($errors->first ('name')); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="field">
                <label class="label" for="surname">Surname</label>
                <div class="control">
                    <input class="input <?php $__errorArgs = ['surname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           type="text"
                           name="surname"
                           id="surname"
                           value="<?php echo e(old('surname')); ?>">
                    <?php $__errorArgs = ['surname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="help is-danger"><?php echo e($errors->first ('surname')); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="field">
                <label class="label" for="moneySpent">Money spent</label>
                <div class="control">
                    <input class="input <?php $__errorArgs = ['moneySpent'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           type="number"
                           min="0"
                           name="moneySpent"
                           id="moneySpent"
                           value="<?php echo e(old('moneySpent')); ?>">
                    <?php $__errorArgs = ['moneySpent'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="help is-danger"><?php echo e($errors->first ('moneySpent')); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="field">
                <button class="button" type="submit">Submit</button>
                <a href="<?php echo e(route('subscribers.index')); ?>" class="button" style="text-decoration: none;">Back to overview</a>
            </div>

        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jessi\PhpstormProjects\untitled\Laravel_php\security\resources\views/auth/subscribers/create.blade.php ENDPATH**/ ?>