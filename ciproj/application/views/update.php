<?php include('header.php'); ?>

<div class="container"></div>

<?php echo form_open("Customer/update/{$record->id}",['class'=>'form-horizontal']); ?>

<fieldset>
<div class="container"></div>
<legend>Update customer</legend>

	<div class="row">
	  <div class="col-md-9">
		<div class="form-group">
	      <label for="inputEmail" class="col-lg-4 control-label">Customer name</label>
	        <div class="col-lg-8">

	        	<?php echo form_input(['name'=>'name','class'=>'form-control', 'placeholder'=>'Customer Name','value'=>set_value('name',$record->name)]); ?>
	        </div>
		  </div>
		</div>
		<div class="col-lg-9"></div>
		<?php echo form_error('name'); ?>
	</div>
		
	<div class="row">
	  <div class="col-lg-9">
		<div class="form-group">
	      <label for="inputEmail" class="col-lg-4 control-label">Date of birth</label>
	        <div class="col-lg-8">

	          
	        	<?php echo form_input(['name'=>'dob','class'=>'form-control', 'placeholder'=>'Date of Birth','value'=>set_value('dob',$record->dob)]); ?>
	        </div>
		  </div>
		</div>
		<div class="col-lg-9"></div>
		<?php echo form_error('dob'); ?>
	</div>

	<div class="row">
	  <div class="col-lg-9">
		<div class="form-group">
	      <label for="inputEmail" class="col-lg-4 control-label">Mobile</label>
	        <div class="col-lg-8">

	         
	        	<?php echo form_input(['name'=>'mobile','class'=>'form-control', 'placeholder'=>'Mobile','value'=>set_value('mobile',$record->mobile)]); ?>
	        </div>
		  </div>
		</div>
		<div class="col-lg-9"></div>
		<?php echo form_error('mobile'); ?>
	</div>

			
	<div class="row">
	  <div class="col-lg-9">
		<div class="form-group">
	      <label for="inputEmail" class="col-lg-4 control-label">Email</label>
	        <div class="col-lg-8">

	        	<?php echo form_input(['name'=>'email','class'=>'form-control', 'placeholder'=>'Email','value'=>set_value('email',$record->email)]); ?>
	        </div>
		  </div>
		</div>
		<div class="col-lg-9"></div>
		<?php echo form_error('email'); ?>
	</div>		

	<div class="row">
	  <div class="col-lg-9">
		<div class="form-group">
	      <label for="inputEmail" class="col-lg-4 control-label">Avail</label>
	        <div class="col-lg-8">

	        	<?php echo form_input(['name'=>'avail','class'=>'form-control', 'placeholder'=>'Avail','value'=>set_value('avail',$record->avail)]); ?>
	        </div>
		  </div>
		</div>
		<div class="col-lg-9"></div>
		<?php echo form_error('avail'); ?>
	</div>		


	
	<div class="row">
	  <div class="col-lg-9">
		<div class="form-group">
	      <label for="inputEmail" class="col-lg-4 control-label">Register Date</label>
	        <div class="col-lg-8">

	        	<?php echo form_input(['name'=>'register date','class'=>'form-control', 'placeholder'=>'Register Date','value'=>set_value('register date',$record->register_date)]); ?>
	        </div>
		  </div>
		</div>
		<div class="col-lg-9"></div>
		<?php echo form_error('register date'); ?>
	</div>		

	
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        
        <?php echo form_submit(['value'=>'Submit', 'class'=>'btn btn-primary'])?>
        <?php echo form_reset(['value'=>'Reset', 'class'=>'btn btn-default'])?>
       
      </div>
    </div>
  </fieldset>
<?php echo form_close() ?>

<?php include('footer.php'); ?>