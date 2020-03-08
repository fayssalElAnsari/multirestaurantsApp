<div class="card <?php echo e(Request::is('settings/users*') || Request::is('settings/permissions*') || Request::is('settings/roles*') ? '' : 'collapsed-card'); ?>">
    <div class="card-header">
        <h3 class="card-title"><?php echo e(trans('lang.permission_menu')); ?></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa <?php echo e(Request::is('settings/users*') || Request::is('settings/permissions*') || Request::is('settings/roles*') ? 'fa-minus' : 'fa-plus'); ?>"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a href="<?php echo route('permissions.index'); ?>" class="nav-link <?php echo e(Request::is('settings/permissions*') ? 'selected' : ''); ?>">
                    <i class="fa fa-inbox"></i> <?php echo e(trans('lang.permission_plural')); ?>

                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo route('roles.index'); ?>" class="nav-link <?php echo e(Request::is('settings/roles*') ? 'selected' : ''); ?>">
                    <i class="fa fa-inbox"></i> <?php echo e(trans('lang.role_plural')); ?>

                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo route('users.index'); ?>" class="nav-link <?php echo e(Request::is('settings/users*') ? 'selected' : ''); ?>">
                    <i class="fa fa-users"></i> <?php echo e(trans('lang.user_plural')); ?>

                </a>
            </li>

        </ul>
    </div>
</div>

<div class="card <?php echo e(Request::is('settings/app/globals*') ||
             Request::is('settings/app/localisation*') ||
             Request::is('settings/app/social*') ||
             Request::is('settings/app/payment*') ||
             Request::is('settings/mail*') ||
             Request::is('settings/translation*') ||
             Request::is('settings/customFields*')
 ? '' : 'collapsed-card'); ?>">
    <div class="card-header">
        <h3 class="card-title"><?php echo e(trans('lang.app_setting_globals')); ?></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa <?php echo e(Request::is('settings/app/globals*') ||
             Request::is('settings/app/localisation*') ||
             Request::is('settings/app/social*') ||
             Request::is('settings/app/payment*') ||
             Request::is('settings/mail*') ||
             Request::is('settings/translation*') ||
             Request::is('settings/customFields*')
             ? 'fa-minus' : 'fa-plus'); ?>"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a href="<?php echo url('settings/app/globals'); ?>" class="nav-link <?php echo e(Request::is('settings/app/globals*') ? 'selected' : ''); ?>">
                    <i class="fa fa-cog"></i> <?php echo e(trans('lang.app_setting_globals')); ?>

                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('settings/app/localisation'); ?>" class="nav-link <?php echo e(Request::is('settings/app/localisation*') ? 'selected' : ''); ?>">
                    <i class="fa fa-language"></i> <?php echo e(trans('lang.app_setting_localisation')); ?>

                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('settings/app/social'); ?>" class="nav-link <?php echo e(Request::is('settings/app/social*') ? 'selected' : ''); ?>">
                    <i class="fa fa-globe"></i> <?php echo e(trans('lang.app_setting_social')); ?>

                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('settings/app/payment'); ?>" class="nav-link <?php echo e(Request::is('settings/app/payment*') ? 'selected' : ''); ?>">
                    <i class="fa fa-credit-card"></i> <?php echo e(trans('lang.app_setting_payment')); ?>

                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('settings/mail/smtp'); ?>" class="nav-link <?php echo e(Request::is('settings/mail*') ? 'selected' : ''); ?>">
                    <i class="fa fa-envelope"></i> <?php echo e(trans('lang.app_setting_mail')); ?>

                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo url('settings/translation/en'); ?>" class="nav-link <?php echo e(Request::is('settings/translation*') ? 'selected' : ''); ?>">
                    <i class="fa fa-language"></i> <?php echo e(trans('lang.app_setting_translation')); ?>

                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo route('customFields.index'); ?>" class="nav-link <?php echo e(Request::is('settings/customFields*') ? 'selected' : ''); ?>">
                    <i class="fa fa-list"></i> <?php echo e(trans('lang.custom_field_plural')); ?>

                </a>
            </li>

        </ul>
    </div>
</div>
