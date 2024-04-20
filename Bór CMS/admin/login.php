<?php
session_start();

$login = $_POST['login'];
$password = $_POST['password'];
$log = 123;
$pass = 123;

if ($password == $pass && $login == $log)
  {
    $_SESSION['zalogowany'] = true;
    header("Location: cms.php");
    unset($_SESSION['mistake']);
  }
  else
  {
    $_SESSION['mistake'] = "błędne dane logowania";
    $_SESSION['zalogowany'] = false;
    header("Location: index.php");
  }
?>
