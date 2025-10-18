<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" 
    dir="<?php echo e(LaravelLocalization::setLocale() === 'ar' || LaravelLocalization::setLocale() === 'fr' ? 'rtl':'ltr'); ?>">

<head>


    <meta charset="utf-8">


    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <title><?php echo e($settings->name); ?> | <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="Shop powered by PrestaShop">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=yes">
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo e(asset('uplods/admin/settings/' . $settings->icon)); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('uplods/admin/settings/' . $settings->icon)); ?>">
    <link href="<?php echo e(asset('assets/front/css/css.css')); ?>?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
    <link href="<?php echo e(asset('assets/front/css/css-1.css')); ?>?family=Oswald:300,400,500,600,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/front/themes/vinova_savemart/assets/cache/theme-78026624.css')); ?>"
          type="text/css" media="all">


    <script type="text/javascript">

        var prestashop = {
            "static_token": "28add935523ef131c8432825597b9928",
            "token": "cad5fe8236d849a3b4023c4e5ca6a313"
        };
    </script>

    <script type="text/javascript">
        var baseDir = "/savemart/";
        var static_token = "28add935523ef131c8432825597b9928";
    </script>


    <style type="text/css">
        #main-site {
            background-color: #ffffff;
        }

        @media (min-width: 1200px) {
            .container {
                width: 1200px;
            }

            #header .container {
                width: 1200px;
            }

            .footer .container {
                width: 1200px;
            }

            #index .container {
                width: 1200px;
            }
        }

        #popup-subscribe .modal-dialog .modal-content {
            background-image: url(../modules/novthemeconfig/images/newsletter_bg-1.png);
        }
    </style>

    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body id="index" class="lang-en country-gb currency-gbp layout-full-width page-index tax-display-enabled">


<main id="main-site" class="displayhomenovthree">


    <header id="header" class="header-3 sticky-menu">

        <?php echo $__env->make('front.includes.header-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('front.includes.header-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('front.includes.header-center', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('front.includes.header-bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    <div id="header-sticky">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="d-flex align-items-center col-xl-3 col-md-3">
                    <div class="contentstickynew_verticalmenu"></div>
                    <div class="contentstickynew_logo"></div>
                </div>
                <div class="contentstickynew_search col-xl-7 col-md-6"></div>
                <div class="contentstickynew_group d-flex justify-content-end col-xl-2 col-md-3"></div>
            </div>
        </div>
    </div>


    <aside id="notifications">
        <div class="container">


        </div>
    </aside>

    <?php echo $__env->yieldContent('slider'); ?>
    <div id="wrapper-site">
        <div id="content-wrapper" class="full-width">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>

    <?php echo $__env->make('front.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="canvas-overlay"></div>
    <div id="back-top">
  <span>
    <i class="fa fa-long-arrow-up"></i>  </span>
    </div>
</main>

<div id="mobile_top_menu_wrapper" class="hidden-md-up">
    <div class="content">
        <div id="_mobile_verticalmenu"></div>
    </div>
</div>


<div id="mobile-pagemenu" class="mobile-boxpage d-flex hidden-md-up">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="title-box"><?php echo e(__('site.menu')); ?></div>
            <div class="close-box"><?php echo e(__('site.close')); ?></div>
        </div>
        <div class="box-content">
            <div id="_mobile_top_menu" class="js-top-menu"></div>
        </div>
    </div>
</div>
<div id="mobile-blockcart" class="mobile-boxpage d-flex hidden-md-up">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="title-box"><?php echo e(__('site.cart')); ?></div>
            <div class="close-box"><?php echo e(__('site.close')); ?></div>
        </div>
        <div id="_mobile_cart" class="box-content"></div>
    </div>
</div>
<div id="mobile-pageaccount" class="mobile-boxpage d-flex hidden-md-up" data-titlebox-parent="Account">
    <div class="content-boxpage col">
        <div class="box-header d-flex justify-content-between align-items-center">
            <div class="back-box"><?php echo e(__('site.back')); ?></div>
            <div class="title-box"><?php echo e(__('site.account')); ?></div>
            <div class="close-box"><?php echo e(__('site.close')); ?></div>
        </div>
        <div class="box-content d-flex justify-content-center align-items-center text-center">
            <div>
                <div id="_mobile_account_list">
                    <div class="account-list-content">
                        <div>
                            <a class="login" href="login-1.html" rel="nofollow" title="Log in to your customer account"><i
                                    class="fa fa-sign-in"></i><?php echo e(__('site.sign_in')); ?></a>
                        </div>
                        <div>
                            <a class="register" href="login-1.html" rel="nofollow" title="Register Account"><i
                                    class="fa fa-user"></i><?php echo e(__('site.register_account')); ?></a>
                        </div>
                        <div>
                            <a class="check-out" href="cart.html" rel="nofollow" title="Checkout"><i
                                    class="material-icons">check_circle</i><?php echo e(__('site.checkout')); ?></a>
                        </div>
                        <div class="link_wishlist">
                            <a href="login-2.html" title="My Wishlists">
                                <i class="fa fa-heart"></i><?php echo e(__('site.my_wishlists')); ?>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="links-currency" data-target="#box-currency" data-titlebox="Currency"><span>Currency</span><i
                        class="zmdi zmdi-arrow-right"></i></div>
                <div class="links-language" data-target="#box-language" data-titlebox="Language"><span><?php echo e(__('site.language')); ?></span><i
                        class="zmdi zmdi-arrow-right"></i></div>
            </div>
        </div>
        <div id="box-currency" class="box-content d-flex">
            <div class="w-100">
                <div class="item-currency current">
                    <a title="British Pound" rel="nofollow"
                       href="index-1.htm?home=home_3&amp;SubmitCurrency=1&amp;id_currency=1">British Pound: GBP</a>
                </div>
                <div class="item-currency">
                    <a title="US Dollar" rel="nofollow"
                       href="index-2.htm?home=home_3&amp;SubmitCurrency=1&amp;id_currency=2">US Dollar: USD</a>
                </div>

            </div>
        </div>

        <div id="box-language" class="box-content d-flex">
            <div class="w-100">

                   <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($localeCode != LaravelLocalization::setLocale()): ?>
                <div class="item-language current">
                    <a rel="alternate" hreflang="<?php echo e($localeCode); ?>"
                                               href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>" class="d-flex align-items-center">
                    <img class="img-fluid mr-2"
                                            src="<?php echo e(asset('images/Flag/' . $properties['regional'] . '.png')); ?>"
                                            alt="<?php echo e($properties['native']); ?>"
                                            width="16" height="11"><span><?php echo e($properties['native']); ?></span></a>
                </div>
                               
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

    </div>
</div>


<div id="stickymenu_bottom_mobile" class="d-flex align-items-center justify-content-center hidden-md-up text-center">
    <div class="stickymenu-item"><a href="http://demo.bestprestashoptheme.com/savemart/"><i
                class="zmdi zmdi-home"></i><span><?php echo e(__('site.home')); ?></span></a></div>
    <div class="stickymenu-item"><a href="#" class="js-btn-search"><i
                class="zmdi zmdi-search"></i><span><?php echo e(__('site.search')); ?></span></a></div>
    <div class="stickymenu-item">
        <div id="_mobile_cart_bottom" class="nov-toggle-page" data-target="#mobile-blockcart"></div>
    </div>
    <div class="stickymenu-item"><a href="login-2.html"><i class="zmdi zmdi-favorite-outline"></i><span><?php echo e(__('site.my_wishlists')); ?></span></a>
    </div>
    <div class="stickymenu-item"><a href="#" class="nov-toggle-page" data-target="#mobile-pageaccount"><i
                class="zmdi zmdi-account-o"></i><span><?php echo e(__('site.account')); ?></span></a></div>
</div>


<script type="text/javascript"
        src="<?php echo e(asset('assets/front/themes/vinova_savemart/assets/cache/bottom-3c96ed23.js')); ?>"></script>

<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
<?php /**PATH C:\laragon\www\pi\resources\views/layouts/site.blade.php ENDPATH**/ ?>