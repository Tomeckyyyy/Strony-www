<?php
session_start();
if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true)
{
  header("Location: cms.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" type="text/css" />
    <title>1MDH"BÓR"_admin</title>
</head>

<body>
  <div class="text-center">
    <form action="login.php" method="post">
      Login: <br/><input type="text" name="login" /><br/>
      Hasło: <br/><input type="password" name="password" /><br/>
      <input type="submit" value="Zaloguj się"/>
    </form>
    <?php
      if (isset($_SESSION['mistake']))
      echo $_SESSION['mistake'];
     ?>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
