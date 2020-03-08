<?php $__env->startPush('css_lib'); ?>
<?php echo $__env->make('layouts.datatables_css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $dataTable->table(['width' => '100%']); ?>


<?php $__env->startPush('scripts_lib'); ?>
<?php echo $__env->make('layouts.datatables_js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $dataTable->scripts(); ?>

<?php $__env->stopPush(); ?>