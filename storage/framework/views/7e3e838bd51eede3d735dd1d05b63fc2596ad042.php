<?php echo $__env->make('new_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="page-title">
        <div class="container">
            <span class="page-title-title heading">Hi <?php echo e(Session::get('user_name')); ?>,</span>
        </div>
    </div>
    <div class="container">
        <div class="l-dashboard">
            <div class="l-dashboard-sidebar gap-bottom-large-tld">
                <div class="c-dashboard-toggle-menu">
                    <div class="sidebar-nav sidebar-nav-without-icon shadow-primary c-dashboard-toggle-menu-menu">
                        <a class="sidebar-nav-item sidebar-nav-item-secondary c-dashboard-toggle-menu-link is-active"
                            href="<?php echo e(url('/dashboard/home')); ?>">Dashboard Home</a>
                        <a class="sidebar-nav-item sidebar-nav-item-secondary c-dashboard-toggle-menu-link "
                            href="<?php echo e(url('/dashboard/profile')); ?>">Account Details</a>
                        <a class="sidebar-nav-item sidebar-nav-item-secondary c-dashboard-toggle-menu-link "
                            href="<?php echo e(url('dashboard/saved-searches')); ?>">Saved Searches</a>
                        <a class="sidebar-nav-item sidebar-nav-item-secondary c-dashboard-toggle-menu-link "
                            href="<?php echo e(url('dashboard/downloads')); ?>">Exported Files</a>
                        <a class="sidebar-nav-item sidebar-nav-item-secondary c-dashboard-toggle-menu-link "
                            href="<?php echo e(url('/dashboard/billing')); ?>">Billing</a>
                        <a class="sidebar-nav-item sidebar-nav-item-secondary c-dashboard-toggle-menu-link "
                            href="<?php echo e(url('dashboard/support')); ?>">Support</a>
                    </div>
                    <button id="tab-toggle-btn" class="c-dashboard-toggle-menu-button" type="button"></button>
                </div>
            </div>
            <div class="l-dashboard-content">

                <?php if($message = Session::get('success')): ?>
                <div class="custom-alerts alert alert-success fade in">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <?php echo $message; ?>

                </div>
                <?php Session::forget('success');?>
                <?php endif; ?>
                <h3 class="primary-title clear-gap-vertical">Your Dashboard</h3>

                <p>Your Bookyourdata dashboard.</p>
                <hr class="hr-line">
                <div class="pad-vertical">
                    <div class="row gap-bottom">
                        <div class="col-sm-6">
                            <div class="gap-bottom">
                                <h4 class="clear-gap-vertical secondary-title font-large">Registration Date</h4>
                            </div>
                            <?php foreach($dashbrd as $key => $value): ?>
                                <span><?php echo e($registration_date = $value->created_at); ?></span>
                            <?php endforeach; ?>

                            
                        </div>
                    </div>
                </div>
                <hr class="hr-line">
                <div class="pad-vertical">
                    <h3 class="primary-title clear-gap-vertical">Build a List</h3>
                    <p>Create a new contact list now.</p>
                    <a href="<?php echo e(url('tool/business')); ?>" class="button button-primary">Build a List Now!</a>
                </div>
            </div>
           
        </div>

    </div>
    </div> 

<?php echo $__env->make('new_footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>