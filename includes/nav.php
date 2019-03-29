<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
        <?php 
          if(bIsLoggedIn() === false)
            echo '<a class="nav-link" href="../login.php" >Log In</a>';
          else
            echo '<a class="nav-link" href="?lgout=1">Log Out</a>';
         ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Member Content
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
          if(bIsLoggedIn() === true){
           ?>
          <a class="dropdown-item" href="/paywalled/prime-fac/primeFac.php">Prime Factoring</a>
          <a class="dropdown-item" href="/paywalled/temp-convert/tempConvert.php">Temp Converter</a>
          <a class="dropdown-item" href="/paywalled/tip-calc/tipCalc.php">Tip Calculator</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="register.php">Account</a>
          <?php 
        }
        else{  
           ?>
           <a class="dropdown-item" href="../registration.php">Register to Access</a>
           <?php 
         }
            ?>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php var_dump($_SESSION) ?>