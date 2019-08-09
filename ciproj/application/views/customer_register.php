<!DOCTYPE html> 
<html>
<head>
	<title>Customer</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url("resources/css/bootstrap.min.css"); ?>">
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     
      <a class="navbar-brand" href="#">Register customer</a>
    </div>

   
  </div>
</nav>

<div class="container"></div>

<?php echo form_open('RegisterC/save',['class'=>'form-horizontal']); ?>

<fieldset>
<div class="container"></div>
<!-- <legend>Register customer</legend>
 -->	<div class="row">
	  <div class="col-md-9">
		<div class="form-group">
	      <label for="inputEmail" class="col-lg-4 control-label">Customer name</label>
	        <div class="col-lg-8">

	        	<?php echo form_input(['name'=>'name','class'=>'form-control', 'placeholder'=>'Customer Name','value'=>set_value('name')]); ?>
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

	          
	        	<?php echo form_input(['name'=>'dob','class'=>'form-control', 'placeholder'=>'Date of Birth','value'=>set_value('dob')]); ?>
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

	         
	        	<?php echo form_input(['name'=>'mobile','class'=>'form-control', 'placeholder'=>'Mobile','value'=>set_value('mobile')]); ?>
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

	        	<?php echo form_input(['name'=>'email','class'=>'form-control', 'placeholder'=>'Email','value'=>set_value('email')]); ?>
	        </div>
		  </div>
		</div>
		<div class="col-lg-9"></div>
		<?php echo form_error('email'); ?>
	</div>		


	<div class="row">
	  <div class="col-lg-9">
		<div class="form-group">
	      <label for="inputEmail" class="col-lg-4 control-label">User Name</label>
	        <div class="col-lg-8">

	        	<?php echo form_input(['name'=>'username','class'=>'form-control', 'placeholder'=>'User Name','value'=>set_value('username')]); ?>
	        </div>
		  </div>
		</div>
		<div class="col-lg-9"></div>
		<?php echo form_error('username'); ?>
	</div>		

	<div class="row">
	  <div class="col-lg-9">
		<div class="form-group">
	      <label for="inputEmail"  class="col-lg-4 control-label">Password</label>
	        <div class="col-lg-8">

	        	<?php echo form_input(['name'=>'password','class'=>'form-control', 'type'=>"password", 'placeholder'=>'Password','value'=>set_value('password')]); ?>
	        </div>
		  </div>
		</div>
		<div class="col-lg-9"></div>
		<?php echo form_error('password'); ?>
	</div>		
    
	<div class="row">
	  <div class="col-lg-9">
		<div class="form-group">
	      <label for="inputEmail" class="col-lg-4 control-label">Register Date</label>
	        <div class="col-lg-8">

	        	<?php echo form_input(['name'=>'register date','class'=>'form-control', 'placeholder'=>'Register Date','value'=>set_value('register date')]); ?>
	        </div>
		  </div>
		</div>
		<div class="col-lg-9"></div>
		<?php echo form_error('register date'); ?>
	</div>		

	<div class="row">
	  <div class="col-lg-9">
		<div class="form-group">
	      <label for="inputEmail" class="col-lg-4 control-label">Avail</label>
	        <div class="col-lg-8">

	        	<?php echo form_input(['name'=>'avail','class'=>'form-control', 'placeholder'=>'Avail','value'=>set_value('avail')]); ?>
	        </div>
		  </div>
		</div>
		<div class="col-lg-9"></div>
		<?php echo form_error('avail'); ?>
	</div>		

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        
        <?php echo form_submit(['value'=>'Submit', 'class'=>'btn btn-primary'])?>
        <?php echo form_reset(['value'=>'Reset', 'class'=>'btn btn-default'])?>
       
      </div>
    </div>
    <script type="text/javascript">
	$("#password").password('toggle');
</script>
  </fieldset>
<?php echo form_close() ?>

<script type="text/js" src="<?php echo base_url("resources/js/bootstrap.js"); ?>"></script>
<script type="text/js" src="<?php echo base_url("resources/js/bootstrap.min.js"); ?>"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	

</body>
</html>