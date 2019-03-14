<?php 
include '../includes/config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff"><!-- favicon -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><!-- bootstrap -->
  <link rel="stylesheet" href="style.css"><!-- stylesheet -->
  <meta charset="utf-8">
  <title>Temp Converter</title>
</head>

<body>
  <?php 
   include '../includes/nav.html';
   ?>
  <div class="wrapper">

    <img id="thermometer" class="img-fluid mt-5" src="thermometer.png" alt="thermometer">
    <div class="title text-center mt-2">
      <h1>Temperature Converter</h1>
    </div>




    <div class="row">

      <div class="input mx-auto col-8 col-md-5 col-lg-6 mt-2 mt-md-4">
        <input type="number" class="text-center form-control" placeholder="Temperature #" id="value1">
      </div>


      <div class="select1 mx-auto col-8 col-md-5 col-lg-6 mt-md-4">
        <select class="custom-select" id="unit2">
          <option selected disabled value="unit">Covert to&hellip;</option>
          <option value="f">Fahrenheit [°F]</option>
          <option value="c">Celcius [°C]</option>
          <option value="k">Kelvin [K]</option>
        </select>
      </div>


      <div class="select1 mx-auto col-8 col-md-5 col-lg-6 ">
        <select class="custom-select" id="unit1">
          <option selected disabled value="1">Units</option>
          <option value="f">Fahrenheit [°F]</option>
          <option value="c">Celcius [°C]</option>
          <option value="k">Kelvin [K]</option>
        </select>
      </div>

      <div class=" input mx-auto col-8 col-md-5 col-lg-6 ">
        <input type="number" class="text-center form-control" id="decimal" placeholder="# Decimal">
      </div>



      <!-- <select class="form-control">
        <option selected disabled value="">Testing</option>
        <option value="correctC">Correct Cold</option>
        <option value="correctH">Correct Hot</option>
        <option value="correctN">Correct Neutral</option>
        <option value="no-unit">No units</option>
        <option value="no-convert">No Convert</option>
        <option value="two-dots">Two-Dots</option>
      </select> -->

      <div class="text-center col-12 my-2 my-md-5">
        <button type="button" class="btn btn-outline-dark col-4" id="bttn" name="button">Calculate</button>
      </div>

    </div>





    <div class="feedback">
      <p id="conversion"></p>
      <p id="error"></p>
    </div>

  </div>

</body>
<script src="script.js">

</script>

</html>