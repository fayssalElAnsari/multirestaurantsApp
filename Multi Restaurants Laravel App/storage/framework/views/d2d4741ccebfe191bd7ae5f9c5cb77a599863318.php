<?php $__env->startPush('css_lib'); ?>
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/iCheck/flat/blue.css')); ?>">
    <!-- select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/select2/select2.min.css')); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/summernote/summernote-bs4.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('plugins/dropzone/bootstrap.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startSection('settings_title',trans('lang.user_table')); ?>
<?php $__env->startSection('settings_content'); ?>
    <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('adminlte-templates::common.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="clearfix"></div>
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo url('settings/mail/smtp'); ?>"><i class="fa fa-envelope mr-2"></i><?php echo e(trans('lang.app_setting_smtp')); ?><?php if(setting('mail_driver') === 'smtp'): ?><span class="badge ml-2 badge-success"><?php echo e(trans('lang.active')); ?></span><?php endif; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('settings/mail/mailgun'); ?>"><i class="fa fa-envelope-o mr-2"></i><?php echo e(trans('lang.app_setting_mailgun')); ?><?php if(setting('mail_driver') === 'mailgun'): ?><span class="badge ml-2 badge-success"><?php echo e(trans('lang.active')); ?></span><?php endif; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('settings/mail/sparkpost'); ?>"><i class="fa fa-envelope-o mr-2"></i><?php echo e(trans('lang.app_setting_sparkpost')); ?><?php if(setting('mail_driver') === 'sparkpost'): ?><span class="badge ml-2 badge-success"><?php echo e(trans('lang.active')); ?></span><?php endif; ?>
                    </a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <?php echo Form::open(['url' => ['settings/update'], 'method' => 'patch']); ?>

            <div class="row">
                <div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
                <?php echo Form::hidden('mail_driver','smtp'); ?>


                <!-- mail_host Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('mail_host', trans("lang.app_setting_mail_host"), ['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::text('mail_host', setting('mail_host'),  ['class' => 'form-control','placeholder'=>  trans("lang.app_setting_mail_host_placeholder")]); ?>

                            <div class="form-text text-muted">
                                <?php echo e(trans("lang.app_setting_mail_host_help")); ?>

                            </div>
                        </div>
                    </div>

                    <!-- mail_port Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('mail_port', trans("lang.app_setting_mail_port"), ['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::text('mail_port', setting('mail_port'),  ['class' => 'form-control','placeholder'=>  trans("lang.app_setting_mail_port_placeholder")]); ?>

                            <div class="form-text text-muted">
                                <?php echo e(trans("lang.app_setting_mail_port_help")); ?>

                            </div>
                        </div>
                    </div>

                    <!-- Lang Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('mail_encryption', trans("lang.app_setting_mail_encryption"),['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::select('mail_encryption', ['tls'=>'TLS', 'ssl'=>'SSL'], setting('mail_encryption'), ['class' => 'select2 form-control']); ?>

                            <div class="form-text text-muted"><?php echo e(trans("lang.app_setting_mail_encryption_help")); ?></div>
                        </div>
                    </div>

                </div>
                <div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
                    <!-- mail_username Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('mail_username', trans("lang.app_setting_mail_username"), ['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::text('mail_username', setting('mail_username'),  ['class' => 'form-control','placeholder'=>  trans("lang.app_setting_mail_username_placeholder")]); ?>

                            <div class="form-text text-muted">
                                <?php echo e(trans("lang.app_setting_mail_username_help")); ?>

                            </div>
                        </div>
                    </div>

                    <!-- mail_password Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('mail_password', trans("lang.app_setting_mail_password"), ['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::text('mail_password', setting('mail_password'),  ['class' => 'form-control','placeholder'=>  trans("lang.app_setting_mail_password_placeholder")]); ?>

                            <div class="form-text text-muted">
                                <?php echo e(trans("lang.app_setting_mail_password_help")); ?>

                            </div>
                        </div>
                    </div>
                    <!-- mail_from_address Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('mail_from_address', trans("lang.app_setting_mail_from_address"), ['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::text('mail_from_address', setting('mail_from_address'),  ['class' => 'form-control','placeholder'=>  trans("lang.app_setting_mail_from_address_placeholder")]); ?>

                            <div class="form-text text-muted">
                                <?php echo e(trans("lang.app_setting_mail_from_address_help")); ?>

                            </div>
                        </div>
                    </div>

                    <!-- mail_from_name Field -->
                    <div class="form-group row ">
                        <?php echo Form::label('mail_from_name', trans("lang.app_setting_mail_from_name"), ['class' => 'col-4 control-label text-right']); ?>

                        <div class="col-8">
                            <?php echo Form::text('mail_from_name', setting('mail_from_name'),  ['class' => 'form-control','placeholder'=>  trans("lang.app_setting_mail_from_name_placeholder")]); ?>

                            <div class="form-text text-muted">
                                <?php echo e(trans("lang.app_setting_mail_from_name_help")); ?>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- Submit Field -->
                <div class="form-group mt-4 col-12 text-right">
                    <button type="submit" class="btn btn-<?php echo e(setting('theme_color')); ?>"><i class="fa fa-save"></i> <?php echo e(trans('lang.save')); ?> <?php echo e(trans('lang.app_setting_smtp')); ?></button>
                    <a href="<?php echo route('users.index'); ?>" class="btn btn-default"><i class="fa fa-undo"></i> <?php echo e(trans('lang.cancel')); ?></a>
                </div>

            </div>
            <?php echo Form::close(); ?>

            <div class="clearfix"></div>
        </div>
    </div>
    </div>
    <?php echo $__env->make('layouts.media_modal',['collection'=>null], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts_lib'); ?>
    <!-- iCheck -->
    <script src="<?php echo e(asset('plugins/iCheck/icheck.min.js')); ?>"></script>
    <!-- select2 -->
    <script src="<?php echo e(asset('plugins/select2/select2.min.js')); ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo e(asset('plugins/summernote/summernote-bs4.min.js')); ?>"></script>
    
    <script src="<?php echo e(asset('plugins/dropzone/dropzone.js')); ?>"></script>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var dropzoneFields = [];
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.settings.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>