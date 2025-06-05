<?php $__env->startSection('title',__('views.stores')); ?>
<?php $__env->startSection('content'); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('dashboards.stores.stores.index');

$__html = app('livewire')->mount($__name, $__params, 'lw-397350608-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pi\resources\views/dashboards/stores/stores/stores.blade.php ENDPATH**/ ?>