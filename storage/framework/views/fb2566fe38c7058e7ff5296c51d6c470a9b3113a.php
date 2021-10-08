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
					<a class="sidebar-nav-item sidebar-nav-item-secondary c-dashboard-toggle-menu-link"
					href="<?php echo e(url('/dashboard/home')); ?>">Dashboard Home</a>
					<a class="sidebar-nav-item sidebar-nav-item-secondary c-dashboard-toggle-menu-link "
					href="<?php echo e(url('/dashboard/profile')); ?>">Account Details</a>
					<a class="sidebar-nav-item sidebar-nav-item-secondary c-dashboard-toggle-menu-link"
					href="<?php echo e(url('/dashboard/saved-searches')); ?>">Saved Searches</a>
					<a class="sidebar-nav-item sidebar-nav-item-secondary c-dashboard-toggle-menu-link   is-active"
					href="<?php echo e(url('/dashboard/downloads')); ?>">Exported Files</a>
					<a class="sidebar-nav-item sidebar-nav-item-secondary c-dashboard-toggle-menu-link "
					href="<?php echo e(url('/dashboard/billing')); ?>">Billing</a>
					<a class="sidebar-nav-item sidebar-nav-item-secondary c-dashboard-toggle-menu-link "
					href="<?php echo e(url('dashboard/support')); ?>">Support</a>
				</div>
				<button id="tab-toggle-btn" class="c-dashboard-toggle-menu-button" type="button"></button>
			</div>
		</div>
		<div class="l-dashboard-content">
			<h3 class="primary-title clear-gap-vertical">Exported Files</h3>
			<p>In this page, you can re-download your previously exported files.</p>
			
			<br>
			<?php if(!empty($downloadseach)): ?>
				<div class="table-responsive shadow-primary">
					<table class="table table-primary table-hover table-fixed">
						<thead>
							<tr class="text-nowrap">
								<th width="25%">Trasaction id </th>
								<th width="25%">Total Contact</th>
								<th width="25%">Trasaction Date</th>								
								<th class="hidden-dd" width="25%"></th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($downloadseach as $key=>$value): ?>
								<tr>
								<td class="table-stong-text">
									<?php echo e($value['values']->trasactionid); ?>

									<br>	
								</td>
								<td><?php echo e($value['totalsavedata']); ?></td>
								<td><?php echo e($value['values']->Trasactiondate); ?></td>
								
								<td class="hidden-dd"><a href="<?Php echo url("downloadsfiles/{$value['downloadlinkids']}") ?>" class="button button-septenary button-slim text-uppercase full-width">Download</a></td>
							</tr>


						<?php endforeach; ?>


					</table>
				</div>	
			<?php else: ?> 
				<div class="text-center">
					<span class="gap-bottom-small block">You do not have any purchased download yet.</span>
					<a href="/tool/business" class="button button-primary">Build a List Now!</a>
				</div>	
			<?php endif; ?>
		</div>

	</div>

</div>
</div>

<?php echo $__env->make('new_footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- <script>
$(document).ready(function (){
	$('.export-file').on('click', function(){

	});
});
</script> -->