<?php
     include 'includes/config.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Mobile Maven Home Page</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <?php
        include 'includes/nav.php';
    ?>

<div class="container">
    
    <div class='text-center'>
        <img src="images/mobilleM.jpeg" class="img-fluid mt-2" alt="Marvin Logo"> 
    </div>
    <div class="row">
      
      <div class="col-12 col-md-6">
        
        <form  method="post">
          
          <!-- input field NPWD -->
          <div class=" input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">New Password</span>
            </div>
            <input type="text" name="npass" id="npass" class="form-control" />
          </div>
          <!-- input field CNPWD -->
          <div class=" input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Confirm New Password</span>
            </div>
            <input type="text" name="cnpass" id="cnpass" class="form-control" />
          </div>
          <!-- BUTTON -->
          <input type="submit" class="btn btn-danger mt-3" id="submitbttn" value = "Update Password"/>
        </form>
      </div>
        
        
      <div class="col-12 col-md-6">
        <form method="post">
        <div class=" input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">New Email</span>
          </div>
          <input type="text" name="nemail" id="nemail" class="form-control" />
        </div>
        <div class=" input-group input-group-sm mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">Confirm New Email</span>
          </div>
          <input type="text" name="cnemail" id="cnemail" class="form-control" />
        </div>
        
          <input type="submit" class="btn btn-danger mt-3" id="submitbttn" value = "Update Email"/>

        </form>
        
      </div>
      
      
    </div>
</div>
      
  </body>
</html>