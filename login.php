<?php 
include 'includes/config.php';
include 'includes/db.php';
$bFormSubmitted = isset($_POST['email']);

$num1 = rand(1,10);
$num2 = rand(1,10);
$antiBotAnswer = $num1 + $num2;
 ?>
 

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/main.css">
  <title>Login</title>
</head>

<body>
  <?php 
  
  $debug = true;
  

function validateForm():string{
  
  global $debug, $userName, $num1, $num2, $mysqli;
  $errorMsg = '';
  $email = 'OOOOOF';
  $pwd = 'foofoofoo';
  
  if ((int) $_POST['antibotq'] !== $_SESSION['robosolution']) {
    $errorMsg .= 'You seem to be a robot';
  }

  if (isset($_POST['email']) && strlen($_POST['email']) > 4)
    $email = trim($_POST['email']);
  else
    $errorMsg .= 'Please enter a valid email';  
  
  if (strlen($_POST['password']) > 5 )
  $pwd = trim($_POST['password']);
  else
    $errorMsg .= 'Please enter a valid password';
  
  
  if ($debug) {
  echo '<br /> Your Email is '.$email.'<br />';
  echo '<br /> Your Pwd is '.$pwd.'<br />';
}
  
  if (strlen($errorMsg) === 0) {
    
    $pwd = mobileMavenHash($pwd);
    $sql = "SELECT `userId` FROM `mvn_users` WHERE `email` = '$email' and `password` = '$pwd' LIMIT 1";
    print_r($sql);
    $result = mysqli_query($mysqli, $sql);
    print('<br /> Num rows '.mysqli_num_rows($result));
    $row = mysqli_fetch_array($result);
    // var_dump($row)
    $id = $row['userId'];
    // echo('id'. $id);
    
    
    if ($result) {
      if (mysqli_num_rows($result) === 1) {
        loginUser($id);
        header('Location: dashboard.php');
      }
      else {
        $errorMsg .= 'Unable to login with the credentials you provided';
      }
    }
    else {
      die("Error: ".$query."<br/>". mysqli_error($mysqli));
    }
    
    
  }


  return $errorMsg;
  
}

  
   ?>
   
   <?php 
    include 'includes/nav.php';
    ?>
   
  <div class="container">

    <!-- <div class="wrapper-alert1">
      <div class="alert alert-danger" id="error" role="alert">
      </div>
    </div>


    <div class="wrapper-alert2">
      <div class="alert alert-success" id="success" role="alert">
        <h6>Proceeding ...</h6>
      </div>
    </div> -->


    <div class="logo">
      <img src="images/mobilleM.jpeg" class="img-fluid mt-2" alt="Marvin Logo">
    </div>

    <div class="row">
      <div class="col-12 col-lg-6 order-last order-md-first">
        <?php 
        
        if($bFormSubmitted){
          $msg = validateForm();
          if(strlen($msg) > 0)
            echo "<p class='text-danger'> $msg </p>";
          else
            echo "<p class='text-success'>Welcome to Mobile Mavin , $userName </p>";
        }
         ?>

<form action="login.php" method="post">
  <?php 
  $_SESSION['robosolution'] = $num1 + $num2;
   ?>
  
          <div class="order-2 order-md-1 mt-3 mt-md-0">
          <div class=" input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
            </div>
            <input type="text" name="email" id="email" class="form-control" />
          </div>

          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
            </div>
            <input type="password" name="password" id="pword" class="form-control" />
          </div>
          
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">What is <?=$num1;?>  + <?=$num2;?> ?</span>
            </div>
            <input type="number" name="antibotq" id="antibotq" class="form-control" />
          </div>
    

          <input type="submit" class="btn btn-danger mt-3" id="submitbttn"/>
      </form>
    </div>
    </div>
    
      <div class="col-12 col-lg-5 mt-3 mt-lg-0">
        <h3>Access Premium Content</h3>
        <p class="register-info">Subscribers Can log in and access members only content</p>
    </div>
    
</div>
  
    

    <br />

    <!-- <span>Testing</span>
    <select class="form-go" id="regtester">
      <option value="unchosen">Chose an option</option>
      <option value="correct">All correct</option>
      <option value="uname_short">Uname too short</option>
      <option value="pword_mismatch">Pword Mismatch</option>
      <option value="pword_short">Pword too short</option>
      <option value="pword_schar">Pword no special charac.</option>
      <option value="pword_num">Pword no number</option>
      <option value="pword_up">Pword no UPPER</option>
      <option value="pword_low">Pword no lower</option>
      <option value="pword_uname">Pword w/ UNAME</option>
      <option value="not_at">Email no @</option>
      <option value="not_dot">Email no dot</option>
      <option value="email_mismatch">Email mismatch</option>
      <option value="too_young">Too young</option>
      <option value="too_old">Too old</option>
      <option value="no_gend">Unchosen gender</option>
    </select> -->

  </div>


  </div>
</body>
<script src="scriptRegister.js">

</script>

</html>