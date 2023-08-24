<div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($index + 1); ?></td>
                <td><?php echo e($item->name); ?></td>
                <td><?php echo e($item->email); ?></td>
                <td><?php echo e($item->created_at); ?></td>
                <td>
                    <a href="<?php echo e(route('users.details',$item->id)); ?>" class="badge bg-primary">Detail</a>
                    <a href="<?php echo e(route('users.edit',$item->id)); ?>" class="badge bg-warning">Edit</a>
                    <button wire:click="delete(<?php echo e($item->id); ?>)"class="btn badge bg-danger">Delete</button>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH D:\UdaCoding\CodeDev\livewire-crud\resources\views/livewire/user-table.blade.php ENDPATH**/ ?>