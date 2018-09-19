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
 <!--  <script>
function autoComplete() {
    document.getElementById("retrieve").value = "block";
}

</script>
  -->
</head>

<body>
  <div class="w3-container" style="margin-left:10%"><?php echo form_open('vehicle/register'); ?>
  <div class="w3-container w3-teal">
      <h2>Vehicle Registration Form</h2>
  </div>
  <br><br> 
   <div id="cus_details">
  <div class="w3-container w3-grey w3-padding-16" >
  <div class="w3-row">
    <div class="w3-col m10 w3-center w3-margin-left">
      <?php
      $data=array(
        'class'=>'w3-input w3-border',
        'name'=>'username',
        'placeholder'=>'Enter NIC number',

      );
      echo form_input($data);
     ?>
       
     </div>
    <div class="w3-margin-left" id="search" >
   <?php
      
      $data=array(
        'class'=>'w3-btn w3-blue-grey',
        'name'=>'submit',
        'value'=>'Search',
        // 'onclick'=>'click(autoComplete());'
       
      );
      echo form_submit($data);
    ?>
</div>
    
    </div></div>
    
  
  <br>
   
   <div class="w3-text-teal" >
    <?php
       echo form_label('First name');
      $data=array(
        'class'=>'w3-input w3-border w3-light-grey',
        'name'=>'first_name',
        'value'=>$this->users->get_customer()->row(2)->first_name,
        'id'=>'retrieve'
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
        'placeholder'=>'',
        'id'=>'retrieve'
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
        'placeholder'=>''
      );
      echo form_input($data);
    ?>
  </div><br>
</div>
  <div class="w3-text-teal">
    <?php
       echo form_label('Vehicle registration Number');
      $data=array(
        'class'=>'w3-input w3-border w3-light-grey',
        'name'=>'reg_no',
        'placeholder'=>'Enter Vehicle Registration Number'
      );
      echo form_input($data);
    ?>
  </div><br>

<div class="w3-text-teal">
     <?php
       echo form_label('Type');?>
    <div class="w3-dropdown-hover">
       <?php
      $data=array(
        'class'=>'w3-button w3-blue-grey',
        'name'=>'type'
        
      );
      $options = array(
        ''              => 'select',
        'small'         => 'Mr',
        'med'           => 'Miss',
        'large'         => 'Mrs'
);
echo form_dropdown('shirts', $options,'large',$data);?>
</div></div><br><br>
<div class="w3-text-teal">
     <?php
       echo form_label('Make');?>
    <div class="w3-dropdown-hover">
       <?php
      $data=array(
        'class'=>'w3-button w3-blue-grey',
        'name'=>'make'
        
      );
      $options = array(
        ''              => 'select',
        'small'         => 'Mr',
        'med'           => 'Miss',
        'large'         => 'Mrs'
);
echo form_dropdown('shirts', $options, 'large',$data);
?>
</div></div><br><br>
<div class="w3-text-teal">
    <?php
       echo form_label('Model');
      $data=array(
        'class'=>'w3-input w3-border w3-light-grey',
        'name'=>'model',
        'placeholder'=>'Enter Vehicle Model'
      );
      echo form_input($data);
    ?>
  </div>
  <br>
  <div class="w3-text-teal">
    <?php
       echo form_label('Additional Information');
      $data=array(
        'class'=>'w3-input w3-border w3-light-grey',
        'name'=>'addi_info',
        'placeholder'=>''
      );
      echo form_input($data);
    ?>
  </div>
  <br>
<div class="">
   <?php
      
      $data=array(
        'class'=>'w3-btn w3-blue-grey',
        'name'=>'add',
        'value'=>'Add Vehicle'
      );
      echo form_submit($data);
    ?>
</div>
 
  

  <?php echo form_close();?></div>
 
  </body>
  </html>