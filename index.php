<?php 
declare(strict_types=1) ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Web Page</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1>Welcome to my Web Page</h1>
    
  <?php
  
  $pwd = 'isaquemartins';
  $userName = 'isaque';
  echo stristr($pwd,$userName);
  
    


  
  ?> 
  
  <div class="container">

    <div class="row">

      <div class="col-12">



    </div>


  </div>
  
    
    
    
  </body>
  
  <script type="text/javascript">
    $(document).ready(function(){
      console.log('foo');
    });
  </script>
  
</html>






