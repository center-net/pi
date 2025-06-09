<div>
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title"><?php echo e(__('views.permissions')); ?></h4>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive mt-4">
            

            <div class="p-4">

                
                <label for="roleSelect">اختر الدور:</label>
                <select wire:model="selectedRoleId" wire:change="loadRolePermissions($event.target.value)" id="roleSelect" class="form-control mb-3">
                    <option value="">-- اختر --</option>
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                </select>
            
                <!--[if BLOCK]><![endif]--><?php if($selectedRoleId): ?>
                    <h5>صلاحيات الدور:</h5>
                    <ul>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <input 
                                    type="checkbox" 
                                    wire:click="togglePermission(<?php echo e($permission->id); ?>)" 
                                    <?php if(in_array($permission->id, $rolePermissions)): ?> checked <?php endif; ?>
                                />
                                <?php echo e($permission->name); ?>

                                <!--[if BLOCK]><![endif]--><?php if(in_array($permission->id, $rolePermissions)): ?>
                                    <button wire:click.prevent="deletePermissionFromRole(<?php echo e($permission->id); ?>)" class="btn btn-sm btn-danger ml-2">حذف</button>
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </ul>
                <?php else: ?>
                    <p>اختر دورًا لعرض صلاحياته.</p>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\pi\resources\views/dashboards/permissions/index.blade.php ENDPATH**/ ?>