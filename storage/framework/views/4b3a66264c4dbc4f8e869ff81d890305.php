<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'label' => '',
    'type' => 'text',
    'name' => '',
    'placeholder' => '',
    'value' => '',
    'disabled' => false,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'label' => '',
    'type' => 'text',
    'name' => '',
    'placeholder' => '',
    'value' => '',
    'disabled' => false,
]); ?>
<?php foreach (array_filter(([
    'label' => '',
    'type' => 'text',
    'name' => '',
    'placeholder' => '',
    'value' => '',
    'disabled' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="col-md-12 mt-2">
    <div class="row align-items-center">
        <div class="col-md-4">
            <label class="form-label mb-0"><?php echo e($label); ?></label>
        </div>
        <div class="col-md-8">
            <input type="<?php echo e($type); ?>" class="form-control" placeholder="<?php echo e($placeholder); ?>" wire:model='<?php echo e($name); ?>' <?php echo e($disabled ? 'disabled' : ''); ?> />
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\pi\resources\views/components/form-input.blade.php ENDPATH**/ ?>