<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	  <meta name="descriptions" content="" />
    <meta name="keywords" content="BÓR, Międzyrzec, ZHR, Harcerstwo, Podlaski, drużyna "/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css" type="text/css" />
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&family=Lato&display=swap" rel="stylesheet" />
      <title>1 Międzyrzecka Drużyna Harcerzy "BÓR" im. rtm. Witolda Pileckiego</title>
</head>

<body>
<div class="container-fluid">
      <header class="text-center">
	       <div class="col-10 offset-1 col-sm-8 offset-sm-2">
           <img src="img/logo.png" class="img-fluid" alt="">
         </div>

           <nav class="navbar navbar-dark navbar-expand-md">
               <a class="navbar-brand me-4" href="index.php"><img src="img/logo-boru.png" height="30" width="35" class="d-inline-block ms-2 me-2 align-bottom" alt="">1MDH"BÓR"</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                 <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="mainmenu">
		             <ul class="navbar-nav">
                   <li class="nav-item"><a class="nav-link" href="index.php">Start</a></li>
                   <li class="nav-item"><a class="nav-link" href="aktualnosci.php">Aktualności</a></li>
                   <li class="nav-item"><a class="nav-link" href="historia.php">Historia</a></li>
                   <li class="nav-item"><a class="nav-link" href="kadra.php">Kadra</a></li>
                   <li class="nav-item"><a class="nav-link" href="zastepy.php">Zastępy</a></li>
                   <li class="nav-item"><a class="nav-link" href="patron.php">Patron</a></li>
                   <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/1-Mi%C4%99dzyrzecka-Dru%C5%BCyna-Harcerzy-B%C3%B3r-190476754324554" target="blank" >"BÓR" na FB</a></li>
		              </ul>
                </div>
	          </nav>


       </header>
          <div class="article-title">Aktualności</div>
    <main class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
      <?php
      $db = new mysqli('localhost', 'root', '', 'cms');
      $sql = "SELECT * FROM posts ORDER BY timestamp DESC LIMIT 10";
      $result = $db->query($sql);
      while ($row = $result->fetch_assoc())
      {
        $img = $row['img'];
        $description = $row['description'];
        $timestamp = $row['timestamp'];
        echo '
        <div class="text-center mb-5">
           <img src="'.$img.'" alt=""/>
           <article> '.$description.' </article>
           <footer class="text-end">'.$timestamp.'</footer>
        </div>
        ';
      }
      $db->close();
      ?>






    </main>

  <div id="footer">
    Stronę wykonał Tomasz Jeleszuk &copy; <img src="img/logo-zhr.png">
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
