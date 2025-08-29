<div>
    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-12 mb-3">
                <label class="form-label" for="name"><?php echo e(__('views.name')); ?></label>
                <input type="text" class="form-control" id="name" wire:model.defer="name">
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
        <button type="submit" class="btn btn-primary"><?php echo e(__('views.save')); ?></button>
    </form>
</div><?php /**PATH C:\laragon\www\pi\resources\views/dashboards/main-categories/main-category-form.blade.php ENDPATH**/ ?>