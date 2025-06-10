<?php $__env->startSection('title',__('views.management')); ?>

<?php $__env->startSection('headerbtn'); ?>
<?php if (isset($component)) { $__componentOriginalced10e33359afba4c6e2087079aac61a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalced10e33359afba4c6e2087079aac61a = $attributes; } ?>
<?php $component = App\View\Components\ButtonComponent::resolve(['title' => ''.e(__('views.add_user')).'','modalid' => 'addUserModal'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ButtonComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalced10e33359afba4c6e2087079aac61a)): ?>
<?php $attributes = $__attributesOriginalced10e33359afba4c6e2087079aac61a; ?>
<?php unset($__attributesOriginalced10e33359afba4c6e2087079aac61a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalced10e33359afba4c6e2087079aac61a)): ?>
<?php $component = $__componentOriginalced10e33359afba4c6e2087079aac61a; ?>
<?php unset($__componentOriginalced10e33359afba4c6e2087079aac61a); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('dashboards.users.index');

$__html = app('livewire')->mount($__name, $__params, 'lw-3935166202-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('dashboards.users.add');

$__html = app('livewire')->mount($__name, $__params, 'lw-3935166202-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pi\resources\views/dashboards/users/users.blade.php ENDPATH**/ ?>