<!-- Backend Bundle JavaScript -->
<script src="<?php echo e(asset('js/libs.min.js')); ?>"></script>
<?php if(in_array('data-table',$assets ?? [])): ?>
<script src="<?php echo e(asset('vendor/datatables/buttons.server-side.js')); ?>"></script>
<?php endif; ?>
<?php if(in_array('chart',$assets ?? [])): ?>
    <!-- apexchart JavaScript -->
    <script src="<?php echo e(asset('js/charts/apexcharts.js')); ?>"></script>
    <!-- widgetchart JavaScript -->
    <script src="<?php echo e(asset('js/charts/widgetcharts.js')); ?>"></script>
    <script src="<?php echo e(asset('js/charts/dashboard.js')); ?>"></script>
<?php endif; ?>

<!-- mapchart JavaScript -->

<script src="<?php echo e(asset('js/charts/vectore-chart.js')); ?>"></script>


<!-- fslightbox JavaScript -->
<script src="<?php echo e(asset('js/plugins/fslightbox.js')); ?>"></script>
<script src="<?php echo e(asset('js/plugins/slider-tabs.js')); ?>"></script>
<script src="<?php echo e(asset('js/plugins/form-wizard.js')); ?>"></script>

<!-- settings JavaScript -->
<script src="<?php echo e(asset('js/plugins/setting.js')); ?>"></script>

<script src="<?php echo e(asset('js/plugins/circle-progress.js')); ?>"></script>
<?php if(in_array('animation',$assets ?? [])): ?>
<!--aos javascript-->

<?php endif; ?>

<?php if(in_array('calender',$assets ?? [])): ?>
<!-- Fullcalender Javascript -->

<script src="<?php echo e(asset('vendor/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/plugins/calender.js')); ?>"></script>
<?php endif; ?>


<script src="<?php echo e(asset('js/plugins/flatpickr.js')); ?>" defer></script>


<?php echo $__env->yieldPushContent('scripts'); ?>

<script src="<?php echo e(asset('js/plugins/prism.mini.js')); ?>"></script>

<!-- Custom JavaScript -->

<script src="<?php echo e(asset('js/modelview.js')); ?>"></script>
<?php /**PATH C:\laragon\www\pi\resources\views/partials/dashboard/_scripts.blade.php ENDPATH**/ ?>