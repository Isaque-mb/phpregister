<?php 
declare(strict_types=1);
session_start();

if (isset($_GET['lgout']) && $_GET['lgout'] == '1') {
  deleteLogin();
}

function mobileMavenHash($str):string{
  $salt = "K.asjkhrisjbc5373869bnskjdnk!s@4%_134hdbcs";
  $str .= $salt;
  return hash("sha512",$str);
}

function loginUser(int $userId){
  $_SESSION['userId'] = $userId;
}

function deleteLogin(){
  global $mysqli;
  unset($_SESSION['userId']);
}

function bIsLoggedIn():bool{
  return isset($_SESSION['userId']);
}



 ?>