 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
  <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/css/custom.css"></script> 
</head>

<body>
 <?php echo form_open('users/service_adviser/customer_reg'); ?>
 
  <div class="form-group">
  	<?php
       echo form_label('Username');
      $data=array(
        'class'=>'form-control',
        'name'=>'username',
        'placeholder'=>'Enter Username'
      );
      echo form_input($data);
  	?>
  </div>
<div class="form-group">
	 <?php
       echo form_label('Password');
      $data=array(
        'class'=>'form-control',
        'name'=>'password', 
        'placeholder'=>'Enter Password'
      );
      echo form_password($data);
  	?>
</div>
<div class="">
	 <?php
      
      $data=array(
        'class'=>'btn btn-default',
        'name'=>'submit',
        'value'=>'Register'
      );
      echo form_submit($data);
  	?>
</div>
 
  </div>

  <?php echo form_close();?>
  </body>
  </html>