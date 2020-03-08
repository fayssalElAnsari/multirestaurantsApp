<div class='btn-group btn-group-sm'>
  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('foodOrders.show')): ?>
  <a data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('lang.view_details')); ?>" href="<?php echo e(route('foodOrders.show', $id)); ?>" class='btn btn-link'>
    <i class="fa fa-eye"></i>
  </a>
  <?php endif; ?>

  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('foodOrders.edit')): ?>
  <a data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('lang.food_order_edit')); ?>" href="<?php echo e(route('foodOrders.edit', $id)); ?>" class='btn btn-link'>
    <i class="fa fa-edit"></i>
  </a>
  <?php endif; ?>

  <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('foodOrders.destroy')): ?>
<?php echo Form::open(['route' => ['foodOrders.destroy', $id], 'method' => 'delete']); ?>

  <?php echo Form::button('<i class="fa fa-trash"></i>', [
  'type' => 'submit',
  'class' => 'btn btn-link text-danger',
  'onclick' => "return confirm('Are you sure?')"
  ]); ?>

<?php echo Form::close(); ?>

  <?php endif; ?>
</div>
