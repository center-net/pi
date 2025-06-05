<section class="login-content">
   <div class="row m-0 align-items-center bg-white vh-100">
      <div class="col-md-6">
         <div class="row justify-content-center">
            <div class="col-md-10">
               <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card">
                  <div class="card-body">
                     <a href="<?php echo e(route('admin.dashboard')); ?>" class="navbar-brand d-flex align-items-center mb-3">
                        <svg width="30" class="text-primary" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                           <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                           <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                           <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                        </svg>
                        <h4 class="logo-title ms-3"><?php echo e(env('APP_NAME')); ?></h4>
                     </a>
                     <h2 class="mb-2 text-center">تسجيل الدخول</h2>
                     <p class="text-center">قم بتسجيل الدخول للبقاء على اتصال.</p>
                     <form wire:submit.prevent="login">
                         <?php echo e(csrf_field()); ?>

                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="username" class="form-label">اسم المستخدم</label>
                                 <input type="text" class="form-control" wire:model="username" placeholder="username" required>
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <label for="password" class="form-label">كلمة المرور</label>
                                 <input class="form-control" type="password" placeholder="********"  wire:model="password"  required >
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-check mb-3">
                                 <input type="checkbox" class="form-check-input" id="customCheck1">
                                 <label class="form-check-label" for="customCheck1">تذكرنى</label>
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <a href="#"  class="float-end">هل نسيت كلمة السر؟</a>
                           </div>
                        </div>
                        <div class="d-flex justify-content-center">
                           <button type="submit" class="btn btn-primary">تسجيل الدخول</button>
                        </div>
                        <p class="text-center my-3">أو تسجيل الدخول باستخدام حسابات أخرى؟</p>
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
                           ليس لديك حساب؟ <a href="<?php echo e(route('signup')); ?>" class="text-underline">انقر هنا للتسجيل.</a>
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