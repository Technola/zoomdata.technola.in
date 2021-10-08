

<?php $__env->startSection("contentheader_title", "Businesscontacts"); ?>
<?php $__env->startSection("contentheader_description", "Businesscontacts listing"); ?>
<?php $__env->startSection("section", "Businesscontacts"); ?>
<?php $__env->startSection("sub_section", "Listing"); ?>
<?php $__env->startSection("htmlheader_title", "Businesscontacts Listing"); ?>

<?php $__env->startSection("headerElems"); ?>

<link href="<?php echo e(asset('new-assets/css/switch.css')); ?>" rel="stylesheet">
<style>
body {
	overflow-y: hidden;
}
.tab {
  overflow: hidden;
  background-color: #ffffff00;
}
/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  
  margin: 0 5px 5px 0;
	border-radius: 5px;
	background: #fff;
	box-shadow: 0 2px rgba(0,0,0,0.2);
	color: #000;
	opacity: 0.8;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #0f91f7;
    color: #fff3f3;

}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
.tabcontent {
  animation: fadeEffect 1s; /* Fading effect takes 1 second */
}

/* Go from zero to full opacity */
@keyframes  fadeEffect {
  from {opacity: 0;}
  to {opacity: 1;}
}
</style>
<?php if(LAFormMaker::la_access("Businesscontacts", "create")) { ?>
<button class="btn btn-success btn-sm pull-right" style="padding: 4px 5px 5px 5px; border-radius: 0; background-color:#0EB7A7;" data-toggle="modal" data-target="#AddModal">Add Business Contacts</button>





<table style="float:right;">
	<tr>
		<td>
             <button class="btn btn-success btn-sm " style="padding: 4px 5px 5px 5px; border-radius: 0; background-color:#0EB7A7;margin-right: 10px;" data-toggle="modal" data-target="#xlsxModal">Excel upload</button>
		</td>
		<td>
             <button class="btn btn-success btn-sm " style="padding: 4px 5px 5px 5px; border-radius: 0; background-color:#0EB7A7;margin-right: 10px;" data-toggle="modal" data-target="#csvModal">CSV upload</button>
		</td>
		<!-- <td>
			<form action="<?php echo e(url('/importcsv')); ?>" method="post" enctype="multipart/form-data" id="importFrm" style="border:1px solid #ccc;margin: 0px 15px 0 0;float:right;">
				<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
				<input id="importfile" type="file" name="file" style="display:inline !important">
				<input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT" style="background-color:#0eb7a7;border:1px solid #0eb7a7;border-radius: 0;padding:5px 10px 5px 10px !important;">
			</form>
		</td> -->
		<td>
			<a class="btn btn-primary" href="<?php echo e(url('/')); ?><?php echo e(Storage::disk('local')->url('documents/sample-new1.csv')); ?>" style="background-color:#0eb7a7;border:1px solid #0eb7a7;border-radius: 0;float:right;padding: 5px 5px 5px 5px;margin-right: 16px;">Sample CSV File(ZoomFormat)</a>
		</td>
		<td>
			<a class="btn btn-primary" href="<?php echo e(url('/')); ?><?php echo e(Storage::disk('local')->url('documents/sample-format-2.csv')); ?>" style="background-color:#0eb7a7;border:1px solid #0eb7a7;border-radius: 0;float:right;padding: 5px 5px 5px 5px;margin-right: 16px;">Sample CSV File(DataFormat)</a>
		</td>
	</tr>
</table>	
<?php } ?>
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

<div class="tab">
  <button class="tablinks" onclick="openTable(event, 'format1')" id="defaultOpen">ZoomFormat</button>
  <button class="tablinks" onclick="openTable(event, 'format2')">DataFormat</button>
</div>
<div class="box box-success">
	<!--<div class="box-header"></div>-->
	<div id="format1" class="tabcontent">
		<div class="box-body">
			<table id="example1" class="table table-bordered">
				<thead>
					<tr class="success">
						<?php if($show_actions): ?>
							<th>Actions</th>
							<th>Status</th>
						<?php endif; ?>
						<?php foreach( $listing_cols1 as $col ): ?>
						<th><?php echo e(isset($module->fields[$col]['label']) ? $module->fields[$col]['label'] : ucfirst($col)); ?></th> 
						<?php endforeach; ?>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
	</div>
	<div id="format2" class="tabcontent">
		<div class="box-body">
			<table id="example2" class="table table-bordered">
				<thead>
					<tr class="success">
						<?php if($show_actions): ?>
							<th>Actions</th>
							<th>Status</th>
						<?php endif; ?>
						<?php foreach( $listing_cols2 as $col ): ?>
						<th><?php echo e(isset($module->fields[$col]['label']) ? $module->fields[$col]['label'] : ucfirst($col)); ?></th> 
						<?php endforeach; ?>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
	</div>
</div>





<?php if(LAFormMaker::la_access("Businesscontacts", "create")) { ?>
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Bussines Contact</h4>
			</div>
			<?php echo Form::open(['action' => 'LA\BusinessContactController@store', 'id' => 'businesscontact-add-form']); ?>

			<div class="modal-body">
				<div class="box-body">
                    <!-- <?php echo LAFormMaker::form($module); ?>
					
					<?php /*
					<?php echo LAFormMaker::input($module, 'first_name'); ?>
					<?php echo LAFormMaker::input($module, 'last_ name'); ?>
					<?php echo LAFormMaker::input($module, 'job_level'); ?>
					<?php echo LAFormMaker::input($module, 'job_title'); ?>
					<?php echo LAFormMaker::input($module, 'email_address'); ?>
					<?php echo LAFormMaker::input($module, 'linkedIn_profile'); ?>
					<?php echo LAFormMaker::input($module, 'company_name'); ?>
					<?php echo LAFormMaker::input($module, 'company_website'); ?>
					<?php echo LAFormMaker::input($module, 'phone_number'); ?>
					<?php echo LAFormMaker::input($module, 'company_linkedIn'); ?>
					<?php echo LAFormMaker::input($module, 'postal_address'); ?>
					<?php echo LAFormMaker::input($module, 'city'); ?>
					<?php echo LAFormMaker::input($module, 'state'); ?>
					<?php echo LAFormMaker::input($module, 'zipcode'); ?>
					<?php echo LAFormMaker::input($module, 'country'); ?>
					<?php echo LAFormMaker::input($module, 'industries'); ?>
					<?php echo LAFormMaker::input($module, 'emp_min'); ?>
					<?php echo LAFormMaker::input($module, 'emp_max'); ?>
					<?php echo LAFormMaker::input($module, 'Revenue'); ?>
					*/ ?> -->

					<div class="form-group">
						<label for="role">Types :</label>
						<select class="form-control" required="1" data-placeholder="Select Type" id="san_type" rel="select2" name="types" onchange="jsFunction(this.value);">
							<option value="">Select Type..</option>
							<option value="businesscontact">Buisness Contact Format</option>
							<option value="businesshealthcare">Buisness HealthCare</option>
							<option value="realestate">Real Estate Agent</option>
						</select>
					</div>


					<div class="form-group"><label for="first_name">First Name:</label><input class="form-control" placeholder="Enter First Name" data-rule-maxlength="256" name="first_name" type="text" value=""></div>

					<div class="form-group"><label for="last_name">Last Name :</label><input class="form-control" placeholder="Enter Last Name" data-rule-maxlength="256" name="last_name" type="text" value=""></div>

					<div class="form-group"><label for="job_title">Job Title :</label><input class="form-control" placeholder="Enter Job Title" data-rule-maxlength="256" name="job_title" type="text" value=""></div>

					<div class="form-group"><label for="email_address">Email Address :</label><input class="form-control" placeholder="Enter Email Address" data-rule-maxlength="256" data-rule-email="true" name="email_address" type="email" value=""></div>

					<div class="form-group"><label for="company_name">Company Name :</label><input class="form-control" placeholder="Enter Company Name" data-rule-maxlength="256" name="company_name" type="text" value=""></div>

					<div class="form-group"><label for="company_website">Company Website :</label><input class="form-control" placeholder="Enter Company Website" data-rule-maxlength="256" name="company_website" type="text" value=""></div>

					<div class="form-group"><label for="phone_number">Phone Number :</label><input class="form-control" placeholder="Enter Phone Number" data-rule-maxlength="256" name="phone_number" type="text" value=""></div>

					<div class="form-group"><label for="city">City :</label><input class="form-control" placeholder="Enter City" data-rule-maxlength="256" name="city" type="text" value=""></div>

					<!-- <div class="form-group"><label for="state">State :</label><input class="form-control" placeholder="Enter State" data-rule-maxlength="256" name="state" type="text" value=""></div> -->

					<div class="form-group"><label for="states">States :</label>
						<select  size="" class="form-control"  data-placeholder="Select State" id="san_state" rel="select2" name="state">
							<option value="">Select States..</option>
							<?php if(!empty($states)): ?>
							<?php foreach($states as $state): ?>
							<option value="<?php echo e($state->name); ?>"><?php echo e(ucfirst($state->name)); ?></option> 
							
							<?php endforeach; ?>
							<?php endif; ?>
						</select>
					</div>

					<div class="form-group"><label for="zipcode">Zipcode :</label><input class="form-control" placeholder="Enter Zipcode" data-rule-maxlength="256" name="zipcode" type="text" value=""></div>

					<!-- <div class="form-group"><label for="country">Country :</label><input class="form-control" placeholder="Enter Country" data-rule-maxlength="256" name="country" type="text" value=""></div> -->

					<div class="form-group"><label for="states">Country :</label>
						<select  size="" class="form-control"  data-placeholder="Select Country" id="san_country" rel="select2" name="country">
							<option value="">Select States..</option>
							<?php if(!empty($country)): ?>
							<?php foreach($country as $countrys): ?>
							<option value="<?php echo e($countrys->name); ?>"><?php echo e(ucfirst($countrys->name)); ?></option> 
							
							<?php endforeach; ?>
							<?php endif; ?>
						</select>
					</div>




					<!-- <div class="form-group"><label for="industries">Industries :</label><input class="form-control" placeholder="Enter Industries" data-rule-maxlength="256" name="industries" type="text" value=""></div> -->

					<div class="form-group"><label for="industries">Industries :</label>
						<select multiple size="" class="form-control"  data-placeholder="Select industries" id="san_industries" rel="select2" name="industry[]">
							<option value="">Select Industries..</option>
							<?php if(!empty($getallindustry)): ?>
							<?php foreach($getallindustry as $industry): ?>
							<option value="<?php echo e($industry->slug); ?>"><?php echo e(ucfirst($industry->name)); ?></option> 
							
							<?php endforeach; ?>
							<?php endif; ?>
						</select>
					</div>

					<div class="ifbusinesscontact">

						<div class="form-group"><label for="employees" style="display: none;">Employees :</label><input class="form-control" placeholder="Enter Employees" data-rule-maxlength="256" name="employees" type="text" value="" style="display: none;"></div>

						<div class="row">
							<div class="form-group col-sm-6"><label for="emp_min">Min Employee :</label><input class="form-control" placeholder="Enter Min. Employee" data-rule-maxlength="256" name="emp_min" type="text" value="">
							</div>
							<div class="form-group col-sm-6"><label for="emp_max">Max Employee :</label><input class="form-control" placeholder="Enter Max. Employee" data-rule-maxlength="256" name="emp_max" type="text" value="">
							</div>
						</div>

						<div class="form-group" style="display: none;"><label for="revenue">Revenue :</label><input class="form-control" placeholder="Enter Revenue" data-rule-maxlength="256" name="revenue" type="text" value="" style="display: none"></div>

						<div class="row">
							<div class="form-group col-sm-6"><label for="rev_min">Min Revenue :</label><input class="form-control" placeholder="Enter Min. Revenue" data-rule-maxlength="256" name="rev_min" type="text" value="">
							</div>
							<div class="form-group col-sm-6"><label for="rev_max">Max Revenue :</label><input class="form-control" placeholder="Enter Max. Revenue" data-rule-maxlength="256" name="rev_max" type="text" value="">
							</div>
						</div>


						<div class="form-group"><label for="revenue">job level :</label>
							<select multiple size="" class="form-control"  data-placeholder="Select job level" id="san_level" rel="select2" name="job_level[]">
								<option value="">Select level..</option>
								<?php if(!empty($levels)): ?>
								<?php foreach($levels as $level): ?>
								<option value="<?php echo e($level->slug); ?>"><?php echo e(ucfirst($level->name)); ?></option> 
								
								<?php endforeach; ?>
								<?php endif; ?>
							</select>
						</div>
					</div>

					<div class="ifhealthcarecontact" style="display: none;">

						<div class="form-group"><label for="revenue">Healthcare Specialty :</label>
							<select multiple size="" class="form-control"  data-placeholder="Select job level" id="specialty" rel="select2" name="job_level[]">
								<option value="">Select Specialty..</option>
								<?php if(!empty($gethealthprofessionals)): ?>
								<?php foreach($gethealthprofessionals as $level): ?>
								<option value="<?php echo e($level->slug); ?>"><?php echo e(ucfirst($level->name)); ?></option> 
								
								<?php endforeach; ?>
								<?php endif; ?>
							</select>
						</div>

					</div>	




					<div class="form-group"><label for="revenue">job function :</label>
						<select multiple size="" class="form-control" required="" data-placeholder="Select job function" id="job_function" rel="select2" name="job_function[]">
							<option value="">Select job function..</option>
							<?php if(!empty($jobfunctions)): ?>
							<?php foreach($jobfunctions as $jobfunction): ?>
							<option value="<?php echo e($jobfunction->slug); ?>"><?php echo e(ucfirst($jobfunction->name)); ?></option> 
							
							<?php endforeach; ?>
							<?php endif; ?>
						</select>
					</div>

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<?php echo Form::submit( 'Submit', ['class'=>'btn btn-success']); ?>

			</div>
			<?php echo Form::close(); ?>

		</div>
	</div>

</div>

<?php } ?>
<!-- edit modal dialog started -->
<div class="modal fade" id="EditModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Bussines Contact</h4>
			</div>
			<form action="<?php echo e(url('/update_businesscontact')); ?>" method="POST" id="update_businesscontact">
			<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
			<div class="modal-body">
				<div class="box-body">
						<!-- <?php echo LAFormMaker::form($module); ?>
						
						<?php /*
						<?php echo LAFormMaker::input($module, 'first_name'); ?>
						<?php echo LAFormMaker::input($module, 'last_ name'); ?>
						<?php echo LAFormMaker::input($module, 'job_level'); ?>
						<?php echo LAFormMaker::input($module, 'job_title'); ?>
						<?php echo LAFormMaker::input($module, 'email_address'); ?>
						<?php echo LAFormMaker::input($module, 'linkedIn_profile'); ?>
						<?php echo LAFormMaker::input($module, 'company_name'); ?>
						<?php echo LAFormMaker::input($module, 'company_website'); ?>
						<?php echo LAFormMaker::input($module, 'phone_number'); ?>
						<?php echo LAFormMaker::input($module, 'company_linkedIn'); ?>
						<?php echo LAFormMaker::input($module, 'postal_address'); ?>
						<?php echo LAFormMaker::input($module, 'city'); ?>
						<?php echo LAFormMaker::input($module, 'state'); ?>
						<?php echo LAFormMaker::input($module, 'zipcode'); ?>
						<?php echo LAFormMaker::input($module, 'country'); ?>
						<?php echo LAFormMaker::input($module, 'industries'); ?>
						<?php echo LAFormMaker::input($module, 'emp_min'); ?>
						<?php echo LAFormMaker::input($module, 'emp_max'); ?>
						<?php echo LAFormMaker::input($module, 'Revenue'); ?>
						*/ ?> -->
						<div class="form-group" style="display:none"><input class="form-control" type="text" name="id" id="edit_id" data-rule-maxlength="256"></label></div>
						<div class="form-group">
							<label for="role">Type :</label>
							<select class="form-control" required="1" data-placeholder="Select Type" id="edit_types" rel="select2" name="types" readonly>
								<option value="">Select Type..</option>
								<option id="edit_types_businesscontact" value="businesscontact">Buisness Contact</option>
								<option id="edit_types_businesshealthcare" value="businesshealthcare">Buisness HealthCare</option>
								<option id="edit_types_realestate" value="realestate">Real Estate Agent</option>
							</select>
						</div>
						<div class="form-group"><label for="first_name">First Name:</label><input class="form-control" placeholder="Enter First Name" data-rule-maxlength="256" id="edit_first_name" name="first_name" type="text"></div>

						<div class="form-group"><label for="last_name">Last Name :</label><input class="form-control" placeholder="Enter Last Name" data-rule-maxlength="256" name="last_name" type="text" id="edit_last_name"></div>

						<div class="form-group"><label for="job_title">Job Title :</label><input class="form-control" placeholder="Enter Job Title" data-rule-maxlength="256" name="job_title" type="text" id="edit_job_title"></div>

						<div class="form-group"><label for="email_address">Email Address :</label><input class="form-control" placeholder="Enter Email Address" data-rule-maxlength="256" data-rule-email="true" name="email_address" type="email" id="edit_email_address"></div>

						<div class="form-group"><label for="company_name">Company Name :</label><input class="form-control" placeholder="Enter Company Name" data-rule-maxlength="256" name="company_name" type="text" id="edit_company_name"></div>

						<div class="form-group"><label for="company_website">Company Website :</label><input class="form-control" placeholder="Enter Company Website" data-rule-maxlength="256" name="company_website" type="text" id="edit_company_website"></div>

						<div class="form-group"><label for="phone_number">Phone Number :</label><input class="form-control" placeholder="Enter Phone Number" data-rule-maxlength="256" name="phone_number" type="text" id="edit_phone_number"></div>

						<div class="form-group"><label for="city">City :</label><input class="form-control" placeholder="Enter City" data-rule-maxlength="256" name="city" type="text" id="edit_city"></div>

						<div class="form-group"><label for="revenue">States :</label>
								
							<select  size="" class="form-control" required="" data-placeholder="Select State" id="edit_state" rel="select2" name="state">
								<option value="">Select States..</option>
								<?php if(!empty($states)): ?>
								
								<?php foreach($states as $state): ?>
								<option value="<?php echo e($state->name); ?>" id="edit_state_<?php echo e(str_replace(' ', '', $state->name)); ?>"><?php echo e(ucfirst($state->name)); ?></option> 

								<?php endforeach; ?>
								<?php endif; ?>
							</select>

						</div>
						<div class="form-group"><label for="zipcode">Zipcode :</label><input class="form-control" placeholder="Enter Zipcode" data-rule-maxlength="256" name="zipcode" type="text" id="edit_zipcode"></div>

						<div class="form-group"><label for="states">Country :</label>
							<select  size="" class="form-control"  data-placeholder="Select Country" id="edit_country" rel="select2" name="country">
								<option value="">Select States..</option>
								<?php if(!empty($country)): ?>
								<?php foreach($country as $countrys): ?>
								<option value="<?php echo e($countrys->name); ?>" id="edit_country_<?php echo e(str_replace(' ', '', $countrys->name)); ?>"><?php echo e(ucfirst($countrys->name)); ?></option> 

								<?php endforeach; ?>
								<?php endif; ?>
							</select>
						</div>

						<div class="form-group"><label for="revenue">Industries :</label>
							<select multiple size="" class="form-control" required="" data-placeholder="Select industries" id="edit_industry[]" rel="select2" name="industry[]">
								<option value="">Select Industries..</option>
								<?php if(!empty($getallindustry)): ?>
								<?php foreach($getallindustry as $level): ?>
								<option value="<?php echo e($level->slug); ?>" id="edit_industries_<?php echo e(str_replace(' ', '', $level->slug)); ?>"><?php echo e(ucfirst($level->name)); ?></option> 

								<?php endforeach; ?>
								<?php endif; ?>
							</select>

						</div>
						<div class="ifbusinesscontact" id="edit_ifbusinesscontact" style="display:none">

							<div class="form-group"><label for="employees" style="display: none;">Employees :</label><input class="form-control" placeholder="Enter Employees" data-rule-maxlength="256" name="employees" id="edit_employees" type="text" value="" style="display: none;"></div>

							<div class="row">
								<div class="form-group col-sm-6"><label for="emp_min">Min Employee :</label><input class="form-control" placeholder="Enter Min. Employee" data-rule-maxlength="256" name="emp_min" type="text" id="edit_emp_min">
								</div>
								<div class="form-group col-sm-6"><label for="emp_max">Max Employee :</label><input class="form-control" placeholder="Enter Max. Employee" data-rule-maxlength="256" name="emp_max" type="text" id="edit_emp_max">
								</div>
							</div>

							<div class="form-group" style="display: none;"><label for="revenue">Revenue :</label><input style="display: none;"  class="form-control" placeholder="Enter Revenue" data-rule-maxlength="256" name="revenue" type="text" id="edit_revenue"></div>

							<div class="row">
								<div class="form-group col-sm-6"><label for="emp_min">Min Revenue :</label><input class="form-control" placeholder="Enter Min. Employee" data-rule-maxlength="256" name="rev_min" type="text" id="edit_rev_min">
								</div>
								<div class="form-group col-sm-6"><label for="emp_max">Max Revenue :</label><input class="form-control" placeholder="Enter Max. Employee" data-rule-maxlength="256" name="rev_max" type="text" id="edit_rev_max">
								</div>
							</div>

							
						</div>

						<div class="ifhealthcarecontact" id="edit_businesshealthcare" style="display:none">

							<div class="form-group"><label for="revenue">Healthcare Specialty :</label>
								<select multiple size="" class="form-control"  data-placeholder="Select job level" id="edit_specialty[]" rel="select2" name="specialty[]">
									<option value="">Select Specialty..</option>
									<?php if(!empty($gethealthprofessionals)): ?>
									<?php if(!empty($levels)): ?>

									<?php foreach($gethealthprofessionals as $level): ?>
									<option value="<?php echo e($level->slug); ?>" id="edit_specialty_<?php echo e(str_replace(' ', '', $level->slug)); ?>"><?php echo e(ucfirst($level->name)); ?></option> 

									<?php endforeach; ?>
									<?php endif; ?>
									<?php endif; ?>
								</select>
							</div>

						</div>	

						<div class="form-group"><label for="revenue">job level :</label>
								<select multiple size="" class="form-control"  data-placeholder="Select job level" id="edit_job_level" rel="select2" name="job_level[]">
									<option value="">Select level..</option>
									
									<?php if(!empty($levels)): ?>
									<?php foreach($levels as $level): ?>
									<option value="<?php echo e($level->slug); ?>" id="edit_job_level_<?php echo e(str_replace(' ', '', $level->slug)); ?>" selected="selected"><?php echo e(ucfirst($level->name)); ?></option> 

									<?php endforeach; ?>
									<?php endif; ?>
									
								</select>
							</div>
							
						<div class="form-group"><label for="revenue">job function :</label>
							<select multiple size="" class="form-control" required="" data-placeholder="Select job function" id="edit_job_function[]" rel="select2" name="job_function[]">
								<option value="">Select job function..</option>
								<?php if(!empty($jobfunctions)): ?>
								<?php foreach($jobfunctions as $jobfunction): ?>
								<option value="<?php echo e($jobfunction->slug); ?>" id="edit_job_function_<?php echo e(str_replace(' ', '', $jobfunction->slug)); ?>"><?php echo e(ucfirst($jobfunction->slug)); ?></option> 
								
								<?php endforeach; ?>
								<?php endif; ?>
							</select>

						</div>
					</div>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<?php echo Form::submit( 'Update', ['class'=>'btn btn-success']); ?>

				</div>
				</form>
			</div>
		</div>
	</div>

</div>
<!-- edit modal dialog ended-->

<div class="modal fade" id="csvModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Bussines Contact Bulk Upload</h4>
			</div>
			<div class="modal-body">
				<div class="box-body">
					<form action="<?php echo e(url('/importcsv')); ?>" method="post" enctype="multipart/form-data" id="importFrm" >

						    <div class="form-group">
								<label for="role">Types :</label>
								<select class="form-control" required="1" data-placeholder="Select Type" id="san_country" rel="select2" name="types" onchange="jsFunction(this.value);" required="required">
									<option value="">Select Type..</option>
									<option value="businesscontact1">Buisness Contact ZoomFormat</option>
									<option value="businesscontact2">Buisness Contact DataFormat</option>
									<option value="businesshealthcare">Buisness HealthCare</option>
									<option value="realestate">Real Estate Agent</option>
								</select>
							</div>


							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
							<input id="importfile" type="file" name="file" style=" display: inline !important; width: 100%; margin-top: 11px; border: 1px solid #d2d6de; padding: 3px;  border-radius: 5px;">
					
     
				</div>
			</div>        
			<div class="modal-footer">
				<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
				<?php echo Form::submit( 'Submit', ['class'=>'btn btn-success']); ?>

			</div>

			</form>
		
		</div>
	</div>

</div>

<!-- start XLSX Upload Dialog -->
<div class="modal fade" id="xlsxModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Bussines Contact Bulk Upload</h4>
			</div>
			<div class="modal-body">
				<div class="box-body">
					<form action="<?php echo e(url('/importxlsx')); ?>" method="post" enctype="multipart/form-data" id="importFrm_xlsx" >

						    <div class="form-group">
								<label for="role">Types :</label>
								<select class="form-control" required="1" data-placeholder="Select Type" id="san_country" rel="select2" name="types" onchange="jsFunction(this.value);" required="required">
									<option value="">Select Type..</option>
									<option value="businesscontact">Buisness Contact</option>
									<option value="businesshealthcare">Buisness HealthCare</option>
									<option value="realestate">Real Estate Agent</option>
								</select>
							</div>


							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
							<input id="importexcel" type="file" name="file" style=" display: inline !important; width: 100%; margin-top: 11px; border: 1px solid #d2d6de; padding: 3px;  border-radius: 5px;">

							<!-- <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT" style="background-color:#0eb7a7;border:1px solid #0eb7a7;border-radius: 0;padding:5px 10px 5px 10px !important;"> -->
			         
				</div>
                    
			<div class="modal-footer">
				<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
				<?php echo Form::submit( 'Submit', ['class'=>'btn btn-success']); ?>

			</div>

			</form>
		
		</div>
	</div>

</div>
<!-- end XLSX Upload Dialog -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('la-assets/plugins/datatables/datatables.min.css')); ?>"/>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('la-assets/plugins/datatables/datatables.min.js')); ?>"></script>
<script src="<?php echo e(asset('la-assets/plugins/datatables/ColReorderWithResize.js')); ?>"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<style>
.active {
	padding-left : 10px;
}

</style>
<script>

	$(function () {
	document.getElementById("defaultOpen").click();
	var dt1 = $("#example1").DataTable({
		processing: true,
        serverSide: true,
        ajax: "<?php echo e(url(config('laraadmin.adminRoute') . '/businesscontacts_dt_ajax1')); ?>",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search",
		},
		dom: '<"top1"l<"active1">f>rtip',
		'colReorder': {
            'allowReorder': false
        },
        fnInitComplete: function(){
			$("#example1").css("display","inline-block");
			$("#example1").css("overflow","auto");
			$("#example1").css("width","100%");
			$("#example1").css("height","550px");
			$('div.top1').css("display","flex");
			$('div.active1').html('<select class="form-control input-sm" name="filter_active" id="filter_active1"><option id="filter_active_all">All</option><option>Active</option><option>Inactive</option></select>');
			dt1.column(2).visible(false);
			new $.fn.dataTable.ColReorder(dt1);
			/*
			$('#example1 th').resizable({
				handles: 'e',
				minWidth: 18,
				stop: function(e, ui) {
					$(this).width(ui.size.width);
				}
			});
			*/
		},
		<?php if($show_actions): ?>
		columnDefs: [ { orderable: false, targets: [0,1] }],
		<?php endif; ?>
	});
	$("#frontpage-add-form").validate({
		
	});
	$(document).on("change", "#filter_active1", function(){
		if($("#filter_active1").val() == "Active"){
			dt1.column(2).search('1').draw();
		}
		if($("#filter_active1").val() == "Inactive"){
			dt1.column(2).search('0').draw();
		}
		if($("#filter_active1").val() == "All"){
			dt1.column(2).search('').draw();
		}
		//dt.column(2).search('1').draw();
	});
	var dt2 = $("#example2").DataTable({
		processing: true,
        serverSide: true,
        ajax: "<?php echo e(url(config('laraadmin.adminRoute') . '/businesscontacts_dt_ajax2')); ?>",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search",
		},
		dom: '<"top2"l<"active2">f>rtip',
        fnInitComplete: function(){
			$("#example2").css("display","inline-block");
			$("#example2").css("overflow","auto");
			$("#example2").css("width","100%");
			$("#example2").css("height","550px");
			$('div.top2').css("display","flex");
			$('div.active2').html('<select class="form-control input-sm" name="filter_active" id="filter_active2"><option id="filter_active_all">All</option><option>Active</option><option>Inactive</option></select>');
			dt2.column(2).visible(false);
			/*
			$('#example1 th').resizable({
				handles: 'e',
				minWidth: 18,
				stop: function(e, ui) {
					$(this).width(ui.size.width);
				}
			});
			*/
		},
		<?php if($show_actions): ?>
		columnDefs: [ { orderable: false, targets: [0,1] }],
		<?php endif; ?>
	});
	$(document).on("change", "#filter_active2", function(){
		if($("#filter_active2").val() == "Active"){
			dt2.column(2).search('1').draw();
		}
		if($("#filter_active2").val() == "Inactive"){
			dt2.column(2).search('0').draw();
		}
		if($("#filter_active2").val() == "All"){
			dt2.column(2).search('').draw();
		}
		//dt.column(2).search('1').draw();
	});
});




	function jsFunction(value)
	{
		var selectValue = value;

		if(selectValue == 'businesshealthcare'){

			$('.ifhealthcarecontact').css('display','block');
			$('.ifbusinesscontact').css('display','none');

		}else{

			$('.ifhealthcarecontact').css('display','none');
			$('.ifbusinesscontact').css('display','block');

		}
	}
	
    $(document).on("click", ".btn-edig-dlg", function(e){
        console.log($(this));
        var id = $(this).closest('tr').children('td:eq(2)').text();
		console.log(id);
		$.ajax({
				headers: {
				    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
				},
			type:'POST',
			url:'/admin/businesscontacts_edit/' + id,
			success:function(data) {
				console.log(data);
				var businessContact = data;
				console.log(businessContact.types);
				$("#edit_id").val(businessContact.id);
				$("#edit_first_name").val(businessContact.first_name);
				$("#edit_last_name").val(businessContact.last_name);
				$("#edit_job_title").val(businessContact.job_title);
				$("#edit_email_address").val(businessContact.email_address);
				$("#edit_company_name").val(businessContact.company_name);
				$("#edit_company_website").val(businessContact.company_website);
				$("#edit_phone_number").val(businessContact.phone_number);
				$("#edit_city").val(businessContact.city);
				$("#edit_state_"+businessContact.state.replace(/ /g, "")).closest('select').children('option').attr("selected",false);
				$("#edit_state_"+businessContact.state.replace(/ /g, "")).attr("selected",true);
				$("#select2-edit_state-container").val(businessContact.state);
				$("#edit_zipcode").val(businessContact.zipcode);
				$("#edit_country_"+businessContact.country.replace(/ /g, "")).closest('select').children('option').attr("selected",false);
				$("#edit_country_"+businessContact.country.replace(/ /g, "")).attr("selected",true);
				$("#select2-edit_country-container").val(businessContact.country);
				var industry = businessContact.industries.replace(/ /g, "").split(',');
				$("#edit_industries_"+industry[0]).closest('select').children('option').attr("selected",false);
				for(i = 0 ;i < industry.length; i++) {
					$("#edit_industries_" + industry[i]).attr('selected',true);
				}
				
				$("#edit_types_businesscontact").closest('select').children('option').attr("selected",false);
				if(businessContact.types == 'businesscontact')
				{
					$("#edit_ifbusinesscontact").css("display","block");
					$("#edit_types_businesscontact").attr("selected",true);
					$("#edit_emp_min").val(businessContact.emp_min);
					$("#edit_emp_max").val(businessContact.emp_max);
					$("#edit_revenue").val(businessContact.revenue);
					$("#edit_rev_min").val(businessContact.rev_min);
					$("#edit_rev_max").val(businessContact.rev_max);
				}
				if(businessContact.types == 'businesshealthcare')
				{					
					$("#edit_types_businesshealthcare").attr("selected",true);
					$("#edit_ifbusinesshealthcare").css("display","block");
					var specialty = businessContact.job_level.split(',');
					for(i = 0 ;i < specialty.length; i++) {
						$("#edit_specialty" + specialty[i].replace(/ /g, "")).attr('selected',true);
					}
				}
				var job_level = businessContact.job_level.split(',');
				for(i = 0 ;i < job_level.length; i++) {
					$("#edit_job_level" + job_level[i].replace(/ /g, "")).attr('selected',true);
				}
				var job_function = businessContact.job_function.split(',');
				for(i = 0 ;i < job_function.length; i++) {
					$("#edit_job_function" + job_function[i].replace(/ /g, "")).attr('selected',true);
				}
			}
        });
	});
    $(document).on("click", ".onoffswitch-checkbox", function(e){
        console.log($(this));
		$(this).removeClass('onoffswitch-checkbox').addClass('onoffswitch-checkbox-checked');
		var id = $(this).closest('tr').children('td:eq(2)').text();
		console.log($(this).closest('tr'));
		console.log(id);
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
			},
			type:'POST',
			url:'/admin/businesscontacts_active/' + id,
			success:function(data) {
				console.log(data);
			}
        });
    });
    $(document).on("click", ".onoffswitch-checkbox-checked", function(e){
        console.log($(this));
		$(this).removeClass('onoffswitch-checkbox-checked').addClass('onoffswitch-checkbox');
		var id = $(this).closest('tr').children('td:eq(2)').text();	
		console.log($(this).closest('tr'));
		console.log(id);
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
			},
			type:'POST',
			url:'/admin/businesscontacts_inactive/' + id,
			success:function(data) {
				console.log(data);
			}
        });
	});
	$(function () {
		$("#businesscontact-edit-form").validate({

		});
	});
	$(document).ready(function(){
		$('label[for="employees"]').hide();
		$("input[name='employees']").hide();
	});
	function openTable(evt, tableName) {
		// Declare all variables
		var i, tabcontent, tablinks;

		// Get all elements with class="tabcontent" and hide them
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}

		// Get all elements with class="tablinks" and remove the class "active"
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}

		// Show the current tab, and add an "active" class to the button that opened the tab
		document.getElementById(tableName).style.display = "block";
		evt.currentTarget.className += " active";
	}
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make("la.layouts.app", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>