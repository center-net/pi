<div>
    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-6 mb-3">
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
            <div class="col-md-6 mb-3">
                <label class="form-label" for="key"><?php echo e(__('views.key')); ?></label>
                <input type="text" class="form-control" id="key" wire:model.defer="key">
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['key'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label" for="color"><?php echo e(__('views.color')); ?></label>
                <input type="text" class="form-control" id="color" wire:model.defer="color" placeholder="e.g., bg-primary text-white">
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
            </div>
            <div class="col-md-12 mb-3">
                <label class="form-label"><?php echo e(__('views.permissions')); ?></label>
                <div class="row">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $allPermissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="<?php echo e($permission->id); ?>" id="permission_<?php echo e($permission->id); ?>" wire:model.defer="selectedPermissions">
                                <label class="form-check-label" for="permission_<?php echo e($permission->id); ?>">
                                    <?php echo e($permission->name); ?>

                                </label>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </div>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['selectedPermissions'];
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
</div><?php /**PATH C:\laragon\www\pi\resources\views/dashboards/roles/role-form.blade.php ENDPATH**/ ?>