<?php 
include '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Prime Factoring</title>
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="icon.png" href="/icon.png">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
  </script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Gudea" rel="stylesheet">
</head>

<body>
  <?php 
   include '../includes/nav.html';
   ?>
  <div class="wrapper">
    <div class="title">
      <h1>Prime Factorization</h1>
      <h6><a href="https://github.com/Isaque-mb">by Isaque Brandão</a></h6>
    </div>


    <div class="inputs">
      <input type="number" id="number" placeholder="Enter a number" />
      <input type="button" id="bttn" name="calculate" value="Calculate">

      <div class="dropdown">
        <select id="options">
          <option value="option">Options</option>
          <option value="pfctSqr">Perfect Square</option>
          <option value="nPfct">Non-Perfect</option>
          <option value="nOne">Number 1</option>
          <option value="negative">Negative</option>
          <option value="decimal">Decimals</option>
        </select>
      </div>
    </div>

    <div class="answer">
      <div id="factors"></div>
      <p id="error"></p>
      <img id="evil" src="evil.png" />
    </div>
  </div>




</body>

<script src="script.js">
</script>

</html>