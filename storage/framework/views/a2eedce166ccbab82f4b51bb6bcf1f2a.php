<div>
    <?php if (isset($component)) { $__componentOriginalf5195e7fca34cd992a211fbb69930ea9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf5195e7fca34cd992a211fbb69930ea9 = $attributes; } ?>
<?php $component = App\View\Components\ModelComponent::resolve(['model' => 'addUserModal','title' => ''.e(__('views.add_user')).'','submitName' => ''.e(__('views.save')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('model-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ModelComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf5195e7fca34cd992a211fbb69930ea9)): ?>
<?php $attributes = $__attributesOriginalf5195e7fca34cd992a211fbb69930ea9; ?>
<?php unset($__attributesOriginalf5195e7fca34cd992a211fbb69930ea9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf5195e7fca34cd992a211fbb69930ea9)): ?>
<?php $component = $__componentOriginalf5195e7fca34cd992a211fbb69930ea9; ?>
<?php unset($__componentOriginalf5195e7fca34cd992a211fbb69930ea9); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\laragon\www\pi\resources\views/dashboards/users/add.blade.php ENDPATH**/ ?>