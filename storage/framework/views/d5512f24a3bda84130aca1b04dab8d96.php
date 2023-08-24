

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="mb-4">
        <a href="<?php echo e(route('users.home')); ?>" class="text-primary">Back</a>
    </div>
    <div class="mb-3">
    <label for="name"class="form-label">Name</label>
    <input type="text" value="<?php echo e($user->name); ?>" class="form-control" disabled >
    </div>
    <div class="mb-3">
    <label for="email"class="form-label">Email Address</label>
    <input type="text" value="<?php echo e($user->email); ?>" class="form-control" disabled>
     </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UdaCoding\CodeDev\livewire-crud\resources\views/users/show.blade.php ENDPATH**/ ?>