<div>
    <?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php endif; ?>
</div>
<?php /**PATH D:\UdaCoding\CodeDev\livewire-crud\resources\views/my_components/alert_success.blade.php ENDPATH**/ ?>