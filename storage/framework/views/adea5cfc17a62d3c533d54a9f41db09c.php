<div>
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title"><?php echo e(__('views.site_settings')); ?></h4>
        </div>
    </div>
    <div class="card-body p-5">
        <form class="row" wire:submit.prevent='submit'>
            <!--[if BLOCK]><![endif]--><?php if(session()->has('message')): ?>
                <div class="alert alert-primary my-success-alert">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
              <div class="col-md-6 row" >
                <div class="col-md-6">
                    <label class="form-label"><?php echo e(__('views.site_logo')); ?></label>
                    <input type="file" class="form-control" placeholder="logo1" wire:model='logo1' <?php echo e(auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'); ?>/>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['logo1'];
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
                <div class="col-md-6">
                    <div wire:loading wire:target="logo1"><?php echo e(__('views.uploading')); ?>...</div>
                    <!--[if BLOCK]><![endif]--><?php if($logo1): ?>
                        <img width="80" height="80" src="<?php echo e($logo1->temporaryUrl()); ?>">
                    <?php else: ?>
                        <img width="80" height="80" src="<?php echo e(asset('uplods/admin/settings/' .$settings->logo)); ?>">
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
            <div class="col-md-6 row" >
                <div class="col-md-6">
                    <label class="form-label"><?php echo e(__('views.site_icon')); ?></label>
                    <input type="file" class="form-control" placeholder="icon1" wire:model='icon1' <?php echo e(auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'); ?>/>
                    <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['icon1'];
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
                <div class="col-md-6">
                    <div wire:loading wire:target="icon1"><?php echo e(__('views.uploading')); ?>...</div>
                    <!--[if BLOCK]><![endif]--><?php if($icon1): ?>
                        <img width="80" height="80" src="<?php echo e($icon1->temporaryUrl()); ?>">
                    <?php else: ?>
                        <img width="80" height="80" src="<?php echo e(asset('uplods/admin/settings/' .$settings->icon)); ?>">
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label"><?php echo e(__('views.site_name')); ?></label>
                <input type="text" class="form-control" placeholder="<?php echo e(__('views.site_name')); ?>" wire:model='settings.name' <?php echo e(auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'); ?>/>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['settings.name'];
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
            <div class="col-md-6">
                <label class="form-label"><?php echo e(__('views.email')); ?></label>
                <input type="text" class="form-control" placeholder="<?php echo e(__('views.email')); ?>" wire:model='settings.email' <?php echo e(auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'); ?>/>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['settings.email'];
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
            <div class="col-md-6 mt-2">
                <label class="form-label"><?php echo e(__('views.site_address')); ?></label>
                <input type="text" class="form-control" placeholder="<?php echo e(__('views.site_address')); ?>" wire:model='settings.address' <?php echo e(auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'); ?>/>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['settings.address'];
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
            <div class="col-md-6 mt-2">
                <label class="form-label"><?php echo e(__('views.phone_number')); ?></label>
                <input type="text" class="form-control" placeholder="<?php echo e(__('views.phone_number')); ?>" wire:model='settings.phone' <?php echo e(auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'); ?>/>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['settings.phone'];
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
            <div class="col-md-6 mt-2">
                <label class="form-label"><?php echo e(__('views.fb')); ?></label>
                <input type="text" class="form-control" placeholder="<?php echo e(__('views.fb')); ?>" wire:model='settings.facebook' <?php echo e(auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'); ?>/>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['settings.facebook'];
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
            <div class="col-md-6 mt-2">
                <label class="form-label"><?php echo e(__('views.x')); ?></label>
                <input type="text" class="form-control" placeholder="<?php echo e(__('views.x')); ?>" wire:model='settings.twitter' <?php echo e(auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'); ?>/>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['settings.twitter'];
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
            <div class="col-md-6 mt-2">
                <label class="form-label"><?php echo e(__('views.li')); ?></label>
                <input type="text" class="form-control" placeholder="<?php echo e(__('views.li')); ?>" wire:model='settings.linkedin' <?php echo e(auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'); ?>/>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['settings.linkedin'];
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
            <div class="col-md-6 mt-2">
                <label class="form-label"><?php echo e(__('views.in')); ?></label>
                <input type="text" class="form-control" placeholder="<?php echo e(__('views.in')); ?>" wire:model='settings.instagram' <?php echo e(auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'); ?>/>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['settings.instagram'];
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
            <div class="col-md-12 mt-4">
                <!--[if BLOCK]><![endif]--><?php if(auth()->user()->hasPermission('edit_settings')): ?>
                    <button class="btn btn-primary"><?php echo e(__('views.submit')); ?></button>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]--> 
            </div>
        </form>
    </div>
</div>
<?php /**PATH C:\laragon\www\pi\resources\views/dashboards/settings/index.blade.php ENDPATH**/ ?>