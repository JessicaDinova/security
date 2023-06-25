<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center mt-5">
        <?php if(Route::has('login')): ?>
            <?php if(auth()->guard()->check()): ?>
            <h1>To see our pictures click on sweet pics button in navigation</h1>
            <?php else: ?>
        <h1>To see our wonderful pictures please log in or register</h1>
    </div>
    <?php endif; ?>
    <?php endif; ?>
    <div>
        <img src="/images/winkingCat.png" style="height: 400px; width: 500px">
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\jessi\PhpstormProjects\untitled\Laravel_php\security\resources\views/welcome.blade.php ENDPATH**/ ?>