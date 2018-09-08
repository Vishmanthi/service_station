 <div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url();?>assets/images/login.jpg');">
			<div class="wrap-login100">
				<span class="login100-form-title">
					Account Login
				</span>
				</div>
	<div class="wrap-login100">
	<div class="login-errors">	
  <?php $attributes=array('id' =>'login_view','class'=>'' ); ?>
  <?php if($this->session->flashdata('errors')):?>
  	<?php echo $this->session->flashdata('errors');?>
  <?php endif;?>

  <?php echo form_open('users/login',$attributes); ?>
 </div>
  <div class="form-group wrap-input100">
  	<?php
      // echo form_label('Username');
      $data=array(
        'class'=>'form-control input100',
        'name'=>'username',
        'placeholder'=>'Enter Username'
      );
      echo form_input($data);
  	?>
  </div>
<div class="form-group wrap-input100">
	 <?php
      // echo form_label('Password');
      $data=array(
        'class'=>'form-control input100',
        'name'=>'password', 
        'placeholder'=>'Enter Password'
      );
      echo form_password($data);
  	?>
</div>
<div class="container-login100-form-btn">
	 <?php
      
      $data=array(
        'class'=>'login100-form-btn',
        'name'=>'submit',
        'value'=>'Login'
      );
      echo form_submit($data);
  	?>
</div>
 
  </div>

  <?php echo form_close();?>
</div>
    </div>
  </div>