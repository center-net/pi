

<!-- Favicon -->

<link rel="shortcut icon" href="<?php echo e(asset('uplods/admin/settings/' .$settings->icon)); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('css/libs.min.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/hope-ui.css?v=1.1.0')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/custom.css?v=1.1.0')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/dark.css?v=1.1.0')); ?>">

 <?php if( LaravelLocalization::setLocale() === 'ar' ||
        LaravelLocalization::setLocale() === 'fr' ): ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('css/rtl.css?v=1.1.0')); ?>">
    <?php endif; ?>
<link rel="stylesheet" href="<?php echo e(asset('css/customizer.css?v=1.1.0')); ?>">

<!-- Fullcalender CSS -->





<style>
    th.hide-search input{
       display: none;
    }
 </style>
<?php /**PATH C:\laragon\www\pi\resources\views/partials/dashboard/_head.blade.php ENDPATH**/ ?>