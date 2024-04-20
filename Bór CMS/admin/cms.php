<?php
session_start();

if ($_SESSION['zalogowany'] == false) {
  header("Location: index.php");
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
   <?php
   var_dump($_REQUEST);
   if (isset($_REQUEST['postImg']))
   {
      $target_dir = "img/";
      $filename = $_FILES['postImg']['name'];
      move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], '../'.$filename);
      $description = $_REQUEST['postDescription'];
      $sql = "INSERT INTO posts (`id`, `img`, `description`, `timestamp`) VALUES(NULL, '$filename', '$description', current_timestamp())";
      $db = new mysqli('localhost', 'root', '', 'cms');
      $db->query($sql);
      echo '<div class="alert alert-primary" role="alert"> Pomyślnie dodano. </div>';
   }
    ?>
   <main class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
     <a href="logout.php">Wyloguj się!</a>
     <form action="#" method="POST" enctype="multipart/form-data">
       <div class="mb-3">
         <label for="postImg" class="form-label">Zdjęcie</label>
         <input type="file" class="form-control" id="postImg" name="postImg">
         <div id="imgHelp" class="form-text">Dodaj zdjęcie.</div>
       </div>
       <div class="mb-3">
         <label for="postDescription" class="form-label">Opis</label>
         <input type="text" class="form-control" id="postDescription" name="postDescription">
         <div id="descriptionHelp" class="form-text">Napisz opis.</div>
       </div>
       <button type="submit" class="btn btn-primary">Dodaj</button>
     </form>
   </main>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>
 </html>
