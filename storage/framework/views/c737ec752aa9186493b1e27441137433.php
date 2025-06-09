<section class="login-content">
   <div class="row m-0 align-items-center bg-white vh-100">
      <div class="col-md-6">
         <div class="row justify-content-center">
            <div class="col-md-10">
               <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                  <div class="card-body">
                     <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
                        <div class="container-fluid navbar-inner">
                       
                            <div class="">
                            <a href="<?php echo e(route('admin.dashboard')); ?>" class="navbar-brand d-flex align-items-center mb-3">
                                                  <svg width="30" class="text-primary" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                                     <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                                     <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                                     <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                                  </svg>
                                                  <h4 class="logo-title ms-3"><?php echo e($settings->name); ?></h4>
                                               </a>
                        </div> 
                            <div class=" navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto  navbar-list mb-2 mb-lg-0">
                                    <ul>
                    
                                    </ul>
                                    <li class="nav-item dropdown">
                                        <a href="#" class="search-toggle nav-link" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"><?php echo e(LaravelLocalization::getCurrentLocaleNative()); ?>

                                            <img src="<?php echo e(asset('images/Flag/' . LaravelLocalization::setLocale() . '.png')); ?>"
                                                class="img-fluid rounded-circle" alt="user"
                                                style="height: 30px; min-width: 30px; width: 30px;">
                                            <span class="bg-primary"></span>
                                        </a>
                                        <div class="sub-drop dropdown-menu dropdown-menu-end p-0" aria-labelledby="dropdownMenuButton2">
                                            <div class="card shadow-none m-0 border-0">
                                                <div class=" p-0 ">
                                                    <ul class="list-group list-group-flush">
                                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <!--[if BLOCK]><![endif]--><?php if($localeCode != LaravelLocalization::setLocale()): ?>
                                                                <li class="iq-sub-card list-group-item">
                                                                    <a class="p-0" hreflang="<?php echo e($localeCode); ?>"
                                                                        href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>"><img
                                                                            src="<?php echo e(asset('images/Flag/' . $properties['regional'] . '.png')); ?>"
                                                                            alt="<?php echo e($properties['regional']); ?>" class="img-fluid me-2"
                                                                            style="width: 15px;height: 15px;min-width: 15px;" />
                                                                        <?php echo e($properties['native']); ?>

                                                                    </a>
                                                                </li>
                                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    
                     <h2 class="mb-2 text-center"><?php echo e(__('auth.login')); ?></h2>
                     <p class="text-center"><?php echo e(__('auth.login_subtitle')); ?></p>
                     <form wire:submit.prevent="login">
                         <?php echo e(csrf_field()); ?>

                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="username" class="form-label"><?php echo e(__('auth.username')); ?></label>
                                 <input type="text" class="form-control" wire:model="username" placeholder="<?php echo e(__('auth.username')); ?>" required>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="password" class="form-label"><?php echo e(__('auth.password')); ?></label>
                                 <input class="form-control" type="password" placeholder="********"  wire:model="password"  required >
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-check mb-3">
                                 <input type="checkbox" class="form-check-input" id="customCheck1">
                                 <label class="form-check-label" for="customCheck1"><?php echo e(__('auth.remember_me')); ?></label>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <a href="#"  class="float-end"><?php echo e(__('auth.forgot_password')); ?></a>
                           </div>
                        </div>
                        <div class="d-flex justify-content-center">
                           <button type="submit" class="btn btn-primary"><?php echo e(__('auth.login')); ?></button>
                        </div>
                        <p class="text-center my-3"><?php echo e(__('auth.login_with_another')); ?></p>
                        <div class="d-flex justify-content-center">
                           <ul class="list-group list-group-horizontal list-group-flush">
                              <li class="list-group-item border-0 pb-0">
                                 <a href="#"><img src="<?php echo e(asset('images/brands/fb.svg')); ?>" alt="fb"></a>
                              </li>
                              <li class="list-group-item border-0 pb-0">
                                 <a href="#"><img src="<?php echo e(asset('images/brands/gm.svg')); ?>" alt="gm"></a>
                              </li>
                              <li class="list-group-item border-0 pb-0">
                                 <a href="#"><img src="<?php echo e(asset('images/brands/pi.svg')); ?>" alt="li"></a>
                              </li>
                           </ul>
                        </div>
                        <p class="mt-3 text-center">
                           <?php echo e(__('auth.no_account')); ?><a href="<?php echo e(route('signup')); ?>" class="text-underline"><?php echo e(__('auth.register')); ?></a>
                        </p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
         <img src="<?php echo e(asset('images/auth/01.png')); ?>" class="img-fluid gradient-main animated-scaleX" alt="images">
      </div>
   </div>
</section>
<?php /**PATH C:\laragon\www\pi\resources\views/auth/login.blade.php ENDPATH**/ ?>