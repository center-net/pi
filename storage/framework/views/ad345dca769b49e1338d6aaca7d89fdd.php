<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(env('APP_NAME')); ?> | Responsive Bootstrap 5 Admin Dashboard Template</title>

    <?php echo $__env->make('partials.dashboard._head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="">
    <?php echo $__env->make('partials.dashboard._body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <a class="btn btn-fixed-end btn-secondary btn-icon btn-dashboard" href="../landing-pages/index">Landing Pages</a>
</body>

</html>
<?php /**PATH C:\laragon\www\pi\resources\views/layouts/dashboard/dashboard.blade.php ENDPATH**/ ?>