<div class="container-fluid">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title"><?php echo e(__('views.site_settings')); ?></h4>
        </div>
    </div>
    <div class="card-body p-5">
        <form wire:submit.prevent='submit'>
            <!--[if BLOCK]><![endif]--><?php if(session()->has('message')): ?>
                <div class="alert alert-primary my-success-alert">
                    <?php echo e(session('message')); ?>

                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general" type="button" role="tab" aria-controls="general" aria-selected="true"><?php echo e(__('views.general')); ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="branding-tab" data-bs-toggle="tab" data-bs-target="#branding" type="button" role="tab" aria-controls="branding" aria-selected="false"><?php echo e(__('views.branding')); ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="social-media-tab" data-bs-toggle="tab" data-bs-target="#social-media" type="button" role="tab" aria-controls="social-media" aria-selected="false"><?php echo e(__('views.social_media')); ?></button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active p-3" id="general" role="tabpanel" aria-labelledby="general-tab">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <?php if (isset($component)) { $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-input','data' => ['name' => 'settings.name','label' => ''.e(__('views.site_name')).'','placeholder' => ''.e(__('views.site_name')).'','disabled' => !auth()->user()->hasPermission('edit_settings')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'settings.name','label' => ''.e(__('views.site_name')).'','placeholder' => ''.e(__('views.site_name')).'','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!auth()->user()->hasPermission('edit_settings'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $attributes = $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $component = $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <?php if (isset($component)) { $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-input','data' => ['name' => 'settings.email','label' => ''.e(__('views.email')).'','placeholder' => ''.e(__('views.email')).'','disabled' => !auth()->user()->hasPermission('edit_settings')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'settings.email','label' => ''.e(__('views.email')).'','placeholder' => ''.e(__('views.email')).'','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!auth()->user()->hasPermission('edit_settings'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $attributes = $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $component = $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <?php if (isset($component)) { $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-input','data' => ['name' => 'settings.phone','label' => ''.e(__('views.phone_number')).'','placeholder' => ''.e(__('views.phone_number')).'','disabled' => !auth()->user()->hasPermission('edit_settings')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'settings.phone','label' => ''.e(__('views.phone_number')).'','placeholder' => ''.e(__('views.phone_number')).'','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!auth()->user()->hasPermission('edit_settings'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $attributes = $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $component = $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <?php if (isset($component)) { $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-input','data' => ['name' => 'settings.address','label' => ''.e(__('views.site_address')).'','placeholder' => ''.e(__('views.site_address')).'','disabled' => !auth()->user()->hasPermission('edit_settings')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'settings.address','label' => ''.e(__('views.site_address')).'','placeholder' => ''.e(__('views.site_address')).'','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!auth()->user()->hasPermission('edit_settings'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $attributes = $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $component = $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade p-3" id="branding" role="tabpanel" aria-labelledby="branding-tab">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="form-label"><?php echo e(__('views.site_logo')); ?></label>
                            <input type="file" class="form-control" wire:model='logo1' <?php echo e(auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'); ?>/>
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
                            <div wire:loading wire:target="logo1"><?php echo e(__('views.uploading')); ?>...</div>
                            <!--[if BLOCK]><![endif]--><?php if($logo1): ?>
                                <img class="img-fluid rounded mt-2" src="<?php echo e($logo1->temporaryUrl()); ?>">
                            <?php else: ?>
                                <img class="img-fluid rounded mt-2" src="<?php echo e(Storage::disk('public')->url('admin/settings/' . $settings->logo)); ?>">
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><?php echo e(__('views.site_icon')); ?></label>
                            <input type="file" class="form-control" wire:model='icon1' <?php echo e(auth()->user()->hasPermission('edit_settings') ? '' : 'disabled'); ?>/>
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
                            <div wire:loading wire:target="icon1"><?php echo e(__('views.uploading')); ?>...</div>
                            <!--[if BLOCK]><![endif]--><?php if($icon1): ?>
                                <img class="img-fluid rounded mt-2" src="<?php echo e($icon1->temporaryUrl()); ?>">
                            <?php else: ?>
                                <img class="img-fluid rounded mt-2" src="<?php echo e(Storage::disk('public')->url('admin/settings/' . $settings->icon)); ?>">
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade p-3" id="social-media" role="tabpanel" aria-labelledby="social-media-tab">
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <?php if (isset($component)) { $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-input','data' => ['name' => 'settings.facebook','label' => ''.e(__('views.fb')).'','placeholder' => ''.e(__('views.fb')).'','disabled' => !auth()->user()->hasPermission('edit_settings')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'settings.facebook','label' => ''.e(__('views.fb')).'','placeholder' => ''.e(__('views.fb')).'','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!auth()->user()->hasPermission('edit_settings'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $attributes = $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $component = $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <?php if (isset($component)) { $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-input','data' => ['name' => 'settings.twitter','label' => ''.e(__('views.x')).'','placeholder' => ''.e(__('views.x')).'','disabled' => !auth()->user()->hasPermission('edit_settings')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'settings.twitter','label' => ''.e(__('views.x')).'','placeholder' => ''.e(__('views.x')).'','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!auth()->user()->hasPermission('edit_settings'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $attributes = $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $component = $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <?php if (isset($component)) { $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-input','data' => ['name' => 'settings.linkedin','label' => ''.e(__('views.li')).'','placeholder' => ''.e(__('views.li')).'','disabled' => !auth()->user()->hasPermission('edit_settings')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'settings.linkedin','label' => ''.e(__('views.li')).'','placeholder' => ''.e(__('views.li')).'','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!auth()->user()->hasPermission('edit_settings'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $attributes = $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $component = $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <?php if (isset($component)) { $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form-input','data' => ['name' => 'settings.instagram','label' => ''.e(__('views.in')).'','placeholder' => ''.e(__('views.in')).'','disabled' => !auth()->user()->hasPermission('edit_settings')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'settings.instagram','label' => ''.e(__('views.in')).'','placeholder' => ''.e(__('views.in')).'','disabled' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!auth()->user()->hasPermission('edit_settings'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $attributes = $__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__attributesOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14)): ?>
<?php $component = $__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14; ?>
<?php unset($__componentOriginal93a7e4fbb8709cb7edbcf616ab99cd14); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
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