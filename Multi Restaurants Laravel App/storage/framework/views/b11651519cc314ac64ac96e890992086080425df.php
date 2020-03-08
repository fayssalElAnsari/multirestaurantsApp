<?php if($customFields): ?>
<h5 class="col-12 pb-4"><?php echo trans('lang.main_fields'); ?></h5>
<?php endif; ?>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
<!-- User Id Field -->
<div class="form-group row ">
  <?php echo Form::label('user_id', trans("lang.order_user_id"),['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::select('user_id', $user, null, ['class' => 'select2 form-control']); ?>

    <div class="form-text text-muted"><?php echo e(trans("lang.order_user_id_help")); ?></div>
  </div>
</div>


<!-- Order Status Id Field -->
<div class="form-group row ">
  <?php echo Form::label('order_status_id', trans("lang.order_order_status_id"),['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::select('order_status_id', $orderStatus, null, ['class' => 'select2 form-control']); ?>

    <div class="form-text text-muted"><?php echo e(trans("lang.order_order_status_id_help")); ?></div>
  </div>
</div>

</div>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

<!-- Tax Field -->
<div class="form-group row ">
  <?php echo Form::label('tax', trans("lang.order_tax"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::number('tax', null,  ['class' => 'form-control','placeholder'=>  trans("lang.order_tax_placeholder")]); ?>

    <div class="form-text text-muted">
      <?php echo e(trans("lang.order_tax_help")); ?>

    </div>
  </div>
</div>

<!-- Hint Field -->
<div class="form-group row ">
  <?php echo Form::label('hint', trans("lang.order_hint"), ['class' => 'col-3 control-label text-right']); ?>

  <div class="col-9">
    <?php echo Form::textarea('hint', null, ['class' => 'form-control','placeholder'=>
     trans("lang.order_hint_placeholder")  ]); ?>

    <div class="form-text text-muted"><?php echo e(trans("lang.order_hint_help")); ?></div>
  </div>
</div>
</div>
<?php if($customFields): ?>
<div class="clearfix"></div>
<div class="col-12 custom-field-container">
  <h5 class="col-12 pb-4"><?php echo trans('lang.custom_field_plural'); ?></h5>
  <?php echo $customFields; ?>

</div>
<?php endif; ?>
<!-- Submit Field -->
<div class="form-group col-12 text-right">
  <button type="submit" class="btn btn-<?php echo e(setting('theme_color')); ?>" ><i class="fa fa-save"></i> <?php echo e(trans('lang.save')); ?> <?php echo e(trans('lang.order')); ?></button>
  <a href="<?php echo route('orders.index'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> <?php echo e(trans('lang.cancel')); ?></a>
</div>
