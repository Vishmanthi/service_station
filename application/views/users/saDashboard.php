<!DOCTYPE html>
<html>
<head>
<title>Service Advisor dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include 'C:\xampp\htdocs\service_station\application\views\layouts\header.php';?>
<?php include 'C:\xampp\htdocs\service_station\application\views\layouts\sidebar.php';?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/w3.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<style type="text/css">
  body {font-family: "Lato", sans-serif}
</style>
</head>
<body>
<div class="w3-content" style="max-width:2000px;margin-top:49px;">
  <div class="sidebar">
    <a class="links" id="defaultOpen"><img src="<?php echo base_url(); ?>assets/images/user.png"><i class="fa fa-circle" style="color: green;font-size: 0.8em;padding-right: 5px"></i>Online</a>
      <a class="links" onclick="openService(event, 'customer')"><i class="fa fa-plus-circle" style="padding-right: 10px"></i>Add Customer</a>
      <a class="links" onclick="openService(event, 'vehicle')"><i class="fa fa-car" style="padding-right: 10px"></i>Add Vehicle</a>
      <a class="links" onclick="openService(event, 'jobcard')"><i class="fa fa-file-text" style="padding-right: 10px"></i>Generate Job card</a>
      <a class="links" onclick="openService(event, 'ser_his')"><i class="fa fa-history" style="padding-right: 10px"></i>View Service history</a>
  </div>
    
  <div id="user" class="content">
    <h2>User</h2>
    <p class="w3-panel w3-red w3-round">
    <?php if($this->session->flashdata('errors')):?>
    <?php echo $this->session->flashdata('errors');?>
    <?php endif;?>
  </p>
  </div>

  <div id="customer" class="content">
    <?php $this->load->view('users/service_adviser/customer_reg.php');?>
  
     <!--  <h2>Add Customer</h2>
      <p></p>
      <p></p>
      <h3></h3> -->
  </div>
  <div id="vehicle" class="content">
    <?php $this->load->view('users/service_adviser/vehicle_reg.php');?>
      
  </div>
  <div id="jobcard" class="content">
    <h2 style="padding: 20px 20px 7px;">Generate Job Card</h2>
    <hr/>
    <div class="w3-container " style="padding: 15px 20px 15px 10px;border: 1px solid lightgrey;border-radius: 3px;background-color: #f0f0f0;width:50%">
      <form>
        <div class="w3-row">
          <div class="w3-col m6">
            <label for="cardno">Job card No</label>
                  <input class="dinput" type="text" id="cardno" name="jobcardno" placeholder="">
                  <label for="vno">Vehicle Registration No</label>
                  <input class="dinput" type="text" id="vno" name="vehicleno" placeholder="">
                  <label for="make">Vehicle Make</label>
                  <input class="dinput" type="text" id="make" name="make" placeholder="">
                  <label for="model">Vehicle Model</label>
                  <input class="dinput" type="text" id="model" name="model" placeholder="">


          </div>
          <div class="w3-col m6">
            <label for="cname">Customer Name</label>
                  <input class="dinput" type="text" id="" name="cname" placeholder="">
            <label for="date">Date</label>
                  <input class="dinput" type="text" id="date" name="date" placeholder="">
                  <label for="timein">Time In</label>
                  <input class="dinput" type="text" id="timein" name="timein" placeholder="">
                  <label for="">Odometer read </label>
                  <input class="dinput" type="text" id="" name="" placeholder="">


            
          </div>
          <table>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Points</th>
            </tr>
            <tr>
              <td>Jill</td>
              <td>Smith</td>
              <td>50</td>
            </tr>
            <tr>
              <td>Eve</td>
              <td>Jackson</td>
              <td>94</td>
            </tr>
            <tr>
              <td>Adam</td>
              <td>Johnson</td>
              <td>67</td>
            </tr>
          </table>
          
        </div>
        
      

      </form>

      
    </div>
  
  </div>
  <div id="ser_his" class="content">
      
  
  </div>

  <script>
    function openService(evt, serviceName) {
        var i, content, tablinks;
        content = document.getElementsByClassName("content");
        for (i = 0; i < content.length; i++) {
            content[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("links");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(serviceName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
  </script>
</div>
</body>
</html>