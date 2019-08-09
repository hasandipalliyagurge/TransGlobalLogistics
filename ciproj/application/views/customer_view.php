<?php include('header.php'); ?>

<div class="container">
	<?php if($error=$this->session->flashdata('response')) ?>

		<div class="alert alert-dismissible alert-success">
		<?php echo $error; ?>	
	    </div>
	

	
<table class="table table-striped table-hover ">
	  <thead>
	  	
	    <tr>
	      <th>name</th>
	      <th>dob</th>
	      <th>mobile</th>
	      <th>email</th>
	      <th>avail</th>
	      <th>register_date</th>
	      <th>user_id</th>
	     
	      <th>operation</th>
	    </tr>
	
	  </thead>
	  <tbody>
	  	<?php if( count($records) ): ?>
		  	<?php foreach ($records as $record): ?>
			    <tr>
			      <td><?php echo $record->name; ?></td>
			      <td><?php echo $record->dob; ?></td>
			      <td><?php echo $record->mobile; ?></td>
			      <td><?php echo $record->email; ?></td>
			      <td><?php echo $record->avail; ?></td>
			      <td><?php echo $record->register_date; ?></td>
				  <td><?php echo $record->user_id; ?></td>		     
		<td><?php echo anchor("Customer/edit/{$record->id}", 'Update', ['class'=>'btn btn-success']);?></td>
		<td><?php echo anchor("Customer/delete/{$record->id}", 'Delete', ['class'=>'btn btn-danger']); ?></td>
			    </tr>
		    <?php endforeach; ?>
		    <?php else: ?>
		   <tr>No records found!</tr>
		
	<?php endif; ?>
	  </tbody> 
</table> 
</div>

<?php include('footer.php'); ?>