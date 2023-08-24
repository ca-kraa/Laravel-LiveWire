

<?php $__env->startPush('styles'); ?>
<?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="mb-4">
        <a href="<?php echo e(route('users.home')); ?>" class="text-primary">Back</a>
    </div>
        <div class="row mb-4">
        <div class="col-md-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-edit', ['user'=>$user])->html();
} elseif ($_instance->childHasBeenRendered('MbLSeTb')) {
    $componentId = $_instance->getRenderedChildComponentId('MbLSeTb');
    $componentTag = $_instance->getRenderedChildComponentTagName('MbLSeTb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MbLSeTb');
} else {
    $response = \Livewire\Livewire::mount('user-edit', ['user'=>$user]);
    $html = $response->html();
    $_instance->logRenderedChild('MbLSeTb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UdaCoding\CodeDev\livewire-crud\resources\views/users/edit.blade.php ENDPATH**/ ?>