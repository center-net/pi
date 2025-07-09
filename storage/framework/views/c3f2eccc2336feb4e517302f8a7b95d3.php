<div class="header-top hidden-sm-down">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="header-top-left col-lg-6 col-md-6 d-flex justify-content-start align-items-center">
                    <div class="detail-email d-flex align-items-center justify-content-center">
                        <i class="icon-email"></i>
                        <p><?php echo e(__('site.email')); ?> : </p>
                        <span>
                            <?php echo e($settings->email); ?> 
                </span>
                    </div>
                    <div class="detail-call d-flex align-items-center justify-content-center">
                        <i class="icon-deal"></i>
                        <p><?php echo e(__('site.today_deals')); ?> </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex justify-content-end align-items-center header-top-right">
                    <div class="register-out">
                        <i class="zmdi zmdi-account"></i>
                        <?php if(auth()->guard()->guest()): ?>
                            <a class="register" href="#"
                               data-link-action="display-register-form">
                               <?php echo e(__('site.register')); ?>

                            </a>
                            <span class="or-text"><?php echo e(__('site.or')); ?></span>
                            <a class="login" href="#" rel="nofollow" title="Log in to your customer account"><?php echo e(__('site.sign_in')); ?></a>
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>


                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <?php echo e(__('site.logout')); ?>

                            </a>

                            <form id="logout-form" action="#" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>

                        <?php endif; ?>
                    </div>
                    <div id="_desktop_currency_selector"
                         class="currency-selector groups-selector hidden-sm-down currentcy-selector-dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                             role="main">
                            <span class="expand-more">GBP</span>
                        </div>
                        <div class="currency-list dropdown-menu">
                            <div class="currency-list-content text-left">
                                <div class="currency-item current flex-first">
                                    <a title="British Pound" rel="nofollow"
                                       href="index-1.htm?home=home_3&amp;SubmitCurrency=1&amp;id_currency=1">£ GBP</a>
                                </div>
                                <div class="currency-item">
                                    <a title="US Dollar" rel="nofollow"
                                       href="index-2.htm?home=home_3&amp;SubmitCurrency=1&amp;id_currency=2">$ USD</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="_desktop_language_selector"
                         class="language-selector groups-selector hidden-sm-down language-selector-dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                             role="main">
                            <span class="expand-more"><img class="img-fluid" src="<?php echo e(asset('images/Flag/' . LaravelLocalization::setLocale() . '.png')); ?>" alt="<?php echo e(LaravelLocalization::getCurrentLocaleNative()); ?>" width="16"
                                                           height="11"></span>
                        </div>
                        <div class="language-list dropdown-menu">
                            <div class="language-list-content text-left">
                                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($localeCode != LaravelLocalization::setLocale()): ?>
                                        <div class="language-item ">
                                            <a rel="alternate" hreflang="<?php echo e($localeCode); ?>"
                                               href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                                                <img class="img-fluid" src="<?php echo e(asset('images/Flag/' . $properties['regional'] . '.png')); ?>" alt="<?php echo e($properties['native']); ?>" width="16" height="11">
                                                <span><?php echo e($properties['native']); ?></span>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\pi\resources\views/front/includes/header-top.blade.php ENDPATH**/ ?>