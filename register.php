<?php 
declare(strict_types=1);
$bFormSubmitted = isset($_POST['username']) && strlen($_POST['username']) > 0;
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
  <link rel="stylesheet" href="style.css">
  <title>Register</title>
</head>

<body>
  <?php 
  
  $debug = true;

function validateForm():string{
  
  global $debug;
  $errorMsg = '';
  $userName = 'Jane Doe';
  $age = 200;
  $email1 = 'foo@foo.com';
  $email2 = 'foo@foo.com';
  $pwd1 = 'foofoofoo';
  $pwd2 = 'foofoofoo';
  
  // username
  if (isset($_POST['username']) && strlen($_POST['username']) > 4)
    $userName = trim($_POST['username']);
  else
    $errorMsg .= 'Please enter a username that is at least 4 characters long';  
  
  // age
  if (is_numeric($_POST['age']))
    $age = trim($_POST['age']);
  else 
    $errorMsg .= 'Please enter a valid age';
    
  // email
  if ( (FALSE===strpos($_POST['email1'],'.') > 0) || ( FALSE===strpos($_POST['email1'],'@') > 0 ) || (strrpos($_POST['email1'],"@") > strrpos($_POST['email1'],'.')) )
    $errorMsg .= 'Please enter a valid email';
  else 
    $email1 = trim($_POST['email1']);

  
  if($_POST['email1'] == $_POST['email2'])
    $email2 = trim($_POST['email2']);
  else 
    $errorMsg .= 'Emails must match';
    
  // pwd
  if (strlen($_POST['password1']) < 6 || !($_POST['password1'] == $_POST['password2']) || stristr($_POST['password1'], $_POST['username']))
    $errorMsg .= 'Passwords must be at least 6 characters long, match and cannot contain the username in it';
  elseif((preg_match('/[a-z]/',$_POST['password1']))==0)
    $errorMsg .= 'Passwords must contain a lower case letter';
  elseif ( (preg_match('/[A-Z]/',$_POST['password1']))==0) 
    $errorMsg .= 'Passwords must contain a upper case letter';
  elseif ((preg_match('/[1-9]/',$_POST['password1'])==0)) 
    $errorMsg .= 'Passwords must contain a number';
  elseif( (preg_match('/[@ - _ %  # $ ! ~]/',$_POST['password1'])) > 0) {
    $pwd1 = trim($_POST['password1']);
    $pwd2 = trim($_POST['password2']); 
  }
  else
    $errorMsg .= 'Please enter a valid password';
  
  
  if ($debug) {
  echo '<br /> Your Username is '.$userName.'<br />';
  echo '<br /> Your Age is '.$age.'<br />';
  echo '<br /> Your Email1 is '.$email1.'<br />';
  echo '<br /> Your Email2 is '.$email2.'<br />';
  echo '<br /> Your Pwd1 is '.$pwd1.'<br />';
  echo '<br /> Your Pwd2 is '.$pwd2.'<br />'; 
}
  
  


  
  
  return $errorMsg;
  
}

  
   ?>
  <div class="container">

    <div class="wrapper-alert1">
      <div class="alert alert-danger" id="error" role="alert">
      </div>
    </div>


    <div class="wrapper-alert2">
      <div class="alert alert-success" id="success" role="alert">
        <h6>Proceeding ...</h6>
      </div>
    </div>


    <div class="logo">
      <img src="mobilleM.jpeg" class="img-fluid mt-2" alt="Marvin Logo">
    </div>

    <div class="row">
      <div class="col-12 col-lg-6 order-last order-md-first">
        <?php 
        if($bFormSubmitted){
          $msg = validateForm();
          if(strlen($msg) > 0)
            echo "<p class='text-danger'> $msg </p>";
          else
            echo "<p class='text-success'>Your Registration has been successful ...</p>";
        }
         ?>

<form action="register.php" method="post">
  
          <div class="order-2 order-md-1 mt-3 mt-md-0">
          <div class=" input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
            </div>
            <input type="text" name="username" id="username" class="form-control" />
          </div>

          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Age</span>
            </div>
            <input type="number" name="age" id="age" class="form-control" />
          </div>

          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
            </div>
            <input type="password" name="password1" id="pword1" class="form-control" />
          </div>

          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Confirm Password</span>
            </div>
            <input type="password" name="password2" id="pword2" class="form-control" />
          </div>

          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
            </div>
            <input type="text" name="email1" id="email1" class="form-control" />
          </div>

          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">Confirm Email</span>
            </div>
            <input type="text" name="email2" id="email2" class="form-control" />
          </div>
        </div>

        <div class="option">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline1" name="gender" value="male" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Male</label>
          </div>

          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline2" name="gender" value="female" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline2">Female</label>
          </div>

          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="customRadioInline3" name="gender" value="other" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline3">Other</label>
          </div>
        </div>

        <div class="flex">
          <input type="submit" class="btn btn-danger mt-3" id="submitbttn"/>
        </div>
      </form>

      </div>
      <div class="col-12 col-lg-5 mt-3 mt-lg-0">
        <h2>About Registering</h2>
        <p class="register-info">Registration is completely free though we can't promise that we won't sell all your data to Google and other companies that pay us for you information !</p>
        <p class="register-info">Most of our apps are free. However, if you want to calculate your approximate age you will have to pay.</p>
      </div>


    </div>

    <br />



    <span>Testing</span>
    <select class="form-go" id="regtester">
      <option value="unchosen">Chose an option</option>
      <option value="correct">All correct</option>
      <option value="uname_short">Uname too short</option>
      <option value="pword_mismatch">Pword Mismatch</option>
      <!-- <option value="pword_short">Pword too short</option> -->
      <option value="pword_schar">Pword no special charac.</option>
      <option value="pword_num">Pword no number</option>
      <option value="pword_up">Pword no UPPER</option>
      <option value="pword_low">Pword no lower</option>
      <option value="pword_uname">Pword w/ UNAME</option>
      <option value="not_at">Email no @</option>
      <option value="not_dot">Email no dot</option>
      <option value="email_mismatch">Email mismatch</option>
      <!-- <option value="too_young">Too young</option>
      <option value="too_old">Too old</option> -->
      <!-- <option value="no_gend">Unchosen gender</option> -->
    </select>

  </div>


  </div>
</body>
<script src="scriptRegister.js">

</script>

</html>