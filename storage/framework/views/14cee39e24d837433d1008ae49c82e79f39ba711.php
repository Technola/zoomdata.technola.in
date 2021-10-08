Dear <?php echo e($user->fname); ?>,<br><br>

You have been registered on <?php echo e(url('/')); ?>.<br><br>

Please verify your mail first!.<br><br>

<a href="<?php echo e(url('/verify/'.$user->id)); ?>" style=" background: green; padding: 6px 20px 6px 20px; color: #fff !important; text-decoration: none; text-transform: uppercase; font-weight: 500;">Verify</a><br><br>

Best Regards,<br><br>
Global Leads Team    