<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" 
    dir="<?php echo e(LaravelLocalization::setLocale() === 'ar' || LaravelLocalization::setLocale() === 'fr' ? 'rtl':'ltr'); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e($settings->name); ?> | المصادقة</title>

    <link rel="shortcut icon" href="<?php echo e(asset('images/favicon.ico')); ?>" />


  <?php echo $__env->make('partials.dashboard._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>

<body >
    <div class="wrapper">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo $__env->make('partials.dashboard._scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>

</html>
<?php /**PATH C:\laragon\www\pi\resources\views/layouts/dashboard/guest.blade.php ENDPATH**/ ?>