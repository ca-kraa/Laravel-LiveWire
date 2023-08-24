

<?php $__env->startPush('styles'); ?>
<?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">CRUD With Livewire</h1>
    <div class="row">
        <div class="col-md-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-create')->html();
} elseif ($_instance->childHasBeenRendered('s7vwLJQ')) {
    $componentId = $_instance->getRenderedChildComponentId('s7vwLJQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('s7vwLJQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('s7vwLJQ');
} else {
    $response = \Livewire\Livewire::mount('user-create');
    $html = $response->html();
    $_instance->logRenderedChild('s7vwLJQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    <div>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user-table')->html();
} elseif ($_instance->childHasBeenRendered('PJUh4bF')) {
    $componentId = $_instance->getRenderedChildComponentId('PJUh4bF');
    $componentTag = $_instance->getRenderedChildComponentTagName('PJUh4bF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('PJUh4bF');
} else {
    $response = \Livewire\Livewire::mount('user-table');
    $html = $response->html();
    $_instance->logRenderedChild('PJUh4bF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\UdaCoding\CodeDev\livewire-crud\resources\views/users/index.blade.php ENDPATH**/ ?>