

<?php $__env->startSection("contentheader_title", "Users"); ?>
<?php $__env->startSection("contentheader_description", "users listing"); ?>
<?php $__env->startSection("section", "Users"); ?>
<?php $__env->startSection("sub_section", "Listing"); ?>
<?php $__env->startSection("htmlheader_title", "Users Listing"); ?>

<?php $__env->startSection("headerElems"); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection("main-content"); ?>

<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach($errors->all() as $error): ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<style>
#example1 th {
    background-color: #2a72b7;
    color: white;
    border: 1px solid white;
    border-radius: 5px;
    text-align: center;
}
</style>
<div class="box box-success">
	<!--<div class="box-header"></div>-->
	<div class="box-body">
		<table id="example1" class="table table-bordered">
		<thead>
		<tr class="success">
			<th style="text-align:center"><input id="selectAllCheckbox" style="margin-left:auto;margin-right:auto;" type="checkbox"></th>
			<?php foreach( $listing_cols as $col ): ?>
			<th><?php echo e(isset($module->fields[$col]['label']) ? $module->fields[$col]['label'] : ucfirst($col)); ?></th>
			<?php endforeach; ?>
			<?php if($show_actions): ?>
			<th>Actions</th>
			<?php endif; ?>
		</tr>
		</thead>
		<tbody>
			
		</tbody>
		</table>
		<div>With selected: <input type="button" value="Send Message" id="SendMsgBtn"></div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('la-assets/plugins/datatables/datatables.min.css')); ?>"/>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('la-assets/plugins/datatables/datatables.min.js')); ?>"></script>
<script>
$(function () {
	$("#example1").DataTable({
		processing: true,
        serverSide: true,
        ajax: "<?php echo e(url(config('laraadmin.adminRoute') . '/user_dt_ajax')); ?>",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search"
		},
		<?php if($show_actions): ?>
		columnDefs: [ { orderable: false, targets: [-1,0] }],
		<?php endif; ?>
		columnDefs: [ { orderable: false, targets: [0] }],
		order: [[1, 'desc']],
	});
	$("#user-add-form").validate({
		
	});
});
$("#selectAllCheckbox").click(function(e) {
	var checked = $(this).prop('checked');
	if(checked ) {
		$("#example1 input[type=checkbox]").prop('checked',true);
	} else {
		$("#example1 input[type=checkbox]").prop('checked',false);
	}
})
$(document).on('click', '#example1 input[type=checkbox]', function (e) {
	if($(this).attr('id') == 'selectAllCheckbox'){
		return;
	}
	var checked = $(this).prop('checked');
	if(!checked) {
		$("#selectAllCheckbox").prop('checked',false);
	}
	console.log('checkbox clicked');
})
$("#SendMsgBtn").click(function(e) {
	var id = [];
	$("#example1 input[type=checkbox]").each(function(e) {
		if($(this).attr('id') != 'selectAllCheckbox') {
			var checked = $(this).prop('checked');
			if(checked == true) {
				id.push($(this).parents('tr').children('td:eq(1)')[0].innerText);
			}
		}
	})
	if(id.length == 0) {
		alert('Please select user');
	} else {
		var txt;
		var message = prompt("Please enter message:", "");
		if (message == null || message == "") {
			return;
		} else {
			var csrftoken  ='<?php echo e(csrf_token()); ?>';
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': csrftoken
				},
				type:'POST',
				url:'/admin/send_message_multi',
				data: {
					'ids' : JSON.stringify(id),
					'msg' : message
				},
				success:function(data){
					if(data) {
						location.href = "/admin/users";
					}
				}
			});
		}
	}
	console.log(id);
})
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make("la.layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>