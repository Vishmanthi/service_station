 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    
  <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  
</head>

<body>
  <div class="w3-container" style="margin-left:10%">
    <?php $attributes=array('id'=>'cus_reg_form')?>
    <?php echo form_open('users/register',$attributes); ?>
    <?php if($this->session->flashdata('errors')):?>
    <?php echo $this->session->flashdata('errors');?>
    <?php endif;?>
  <div class="w3-container w3-teal">
      <h2>Owner Registration Form</h2>
  </div>
  <br><br> 

 
  <div class="w3-text-teal">
     <?php
       echo form_label('Title');?>
    <div class="w3-dropdown-hover">
       <?php
      $data=array(
        'class'=>'w3-button w3-blue-grey',
        'name'=>'select'
        
      );
      $options = array(
        ''              => 'select',
        'small'         => 'Mr',
        'med'           => 'Miss',
        'large'         => 'Mrs'
);
echo form_dropdown('shirts', $options, 'large',$data);


      ?>
    
    </div>
   
  </div><br>
   <div class="w3-text-teal">
      <?php
       echo form_label('First name');
      $data=array(
        'class'=>'w3-input w3-border w3-light-grey',
        'name'=>'first_name',
        'placeholder'=>'Enter First Name'
      );
      echo form_input($data);
    ?>
  </div><br>
   <div class="w3-text-teal">
    <?php
       echo form_label('Last Name');
      $data=array(
        'class'=>'w3-input w3-border w3-light-grey',
        'name'=>'last_name',
        'placeholder'=>'Enter Last Name'
      );
      echo form_input($data);
    ?>
  </div><br>
   <div class="w3-text-teal">
    <?php
       echo form_label('ID Number');
      $data=array(
        'class'=>'w3-input w3-border w3-light-grey',
        'name'=>'nic',
        'placeholder'=>'Enter NIC number'
      );
      echo form_input($data);
    ?>
  </div><br>

  <div class="w3-text-teal">
    <?php
       echo form_label('Phone Number');
      $data=array(
        'class'=>'w3-input w3-border w3-light-grey',
        'name'=>'phone',
        'placeholder'=>'Enter Username'
      );
      echo form_input($data);
    ?>
  </div><br>
<div class="w3-text-teal">
    <?php
       echo form_label('E-mail');
      $data=array(
        'class'=>'w3-input w3-border w3-light-grey',
        'name'=>'email',
        'placeholder'=>'Enter Phone Number'
      );
      echo form_input($data);
    ?>
  </div>
  <br>
  <div class="w3-text-teal">
    <?php
       echo form_label('Address');
      $data=array(
        'class'=>'w3-input w3-border w3-light-grey',
        'name'=>'address',
        'placeholder'=>'Enter City'
      );
      echo form_input($data);
    ?>
  </div>
  <br>
   <div class="w3-text-teal">
    <?php
       echo form_label('Username');
      $data=array(
        'class'=>'w3-input w3-border w3-light-grey',
        'name'=>'username',
        'placeholder'=>'Enter Username'
      );
      echo form_input($data);
    ?>
  </div><br>
   <div class="w3-text-teal">
    <?php
       echo form_label('Password');
      $data=array(
        'class'=>'w3-input w3-border w3-light-grey',
        'name'=>'password',
        'placeholder'=>'Enter Password'
      );
      echo form_password($data);
    ?>
  </div><br>
   <div class="w3-text-teal">
    <?php
       echo form_label('Confirm Password');
      $data=array(
        'class'=>'w3-input w3-border w3-light-grey',
        'name'=>'con_pass',
        'placeholder'=>'Enter Password again'
      );
      echo form_password($data);
    ?>
  </div><br>
<div class="">
   <?php
      
      $data=array(
        'class'=>'w3-btn w3-blue-grey',
        'name'=>'submit',
        'value'=>'Register'
      );
      echo form_submit($data);
    ?>
</div>
 
  

  <?php echo form_close();?></div>
 
  </body>
  </html>