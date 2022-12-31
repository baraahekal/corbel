<?php

require("connect.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--CSS bootstrap library link-->
    <!---->   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <?php


  if($username_error != null){
   echo '<style> .username-error { display: block;} </style>';
  //  echo ($username_error);

  }
  if($password_error!=null){
     echo '<style> .password-error { display: block; } </style>';
    // echo ($password_errors);
  }
  if($success!=null){
     echo '<style> .success { display: block; } </style>';
    // echo ($success);
  }
  
  
  ?>


    <!--JS bootstrap library link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>
    <script src="script.js"></script>
    <script defer="defer" src="bundle.b3b9376a3046cbd5.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Sign up</title>
    <style>
       
    </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>$(document).ready(function() {
        var panelOne = $('.form-panel.two').height(),
          panelTwo = $('.form-panel.two')[0].scrollHeight;
      
        $('.form-panel.two').not('.form-panel.two.active').on('click', function(e) {
          e.preventDefault();
      
          $('.form-toggle').addClass('visible');
          $('.form-panel.one').addClass('hidden');
          $('.form-panel.two').addClass('active');
          $('.form').animate({
            'height': panelTwo
          }, 200);
        });
      
        $('.form-toggle').on('click', function(e) {
          e.preventDefault();
          $(this).removeClass('visible');
          $('.form-panel.one').removeClass('hidden');
          $('.form-panel.two').removeClass('active');
          $('.form').animate({
            'height': panelOne
          }, 200);
        });
      });</script>
    <style>
      ul{
           list-style:none;
           padding: 0px;
           overflow:hidden;
         
           margin-bottom: 2px;
       }
       ul li{
           float: left;
          
       }
       li a :hover{
           background-color: rgb(255, 255, 255);
       } 
       ul li a{
         
           display: inline-block;
           text-decoration: none;
           padding: 14px 10px;
          
       }
   </style>
</head>

<body>
   
  <canvas  class="webgl"> </canvas>
  <section class="section">
     <!-- Form-->
     <div class="form">
  
        <div class="form-panel one">
          <div class="form-header">
            <h1>Create New Account</h1>
          </div>
          <div class="form-content">
            <form action="" method="post">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required="required" value="<?php echo $username ?>" />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required="required" value="<?php echo $password ?>"/>
              </div>
              <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" id="cpassword" name="cpassword" required="required" 
                value="<?php echo $cpassword ?>"
               />
              </div>
              <center>   <p class="user-error" style="color:'red'; background:'red'">
             <?php 
             echo "<p class='erroeuser'>$password_error</p>";
              ?>
          </p>
          </center>
              <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required="required" value="<?php echo $email ?>"/>
              </div>
              <center>   <p class="user-error" style="color:'red'; background:'red'">
             <?php 
             echo "<p class='erroeuser'>$username_error</p>";
              ?>
          </p>
          </center>
              <div class="form-group">
                <label class="form-remember">
                  <input type="checkbox"/>Remember Me
                </label><a class="form-recovery" href="../login/Form.php">Already have account?</a>
              </div>
              <div class="form-group">
                <input class="btn" type="submit" name="sign-up" value="Register Now" >
              </div>
              <center>   <p class="user-error" style="color:'green'; background:'green'">
             <?php 
             echo "<p class='erroe'>$success</p>";
              ?>
          </p>
          </center>
              
            
          </p>
            </form>
          </div>
        </div>
      </div>

</section>

   
</body>
</html>

