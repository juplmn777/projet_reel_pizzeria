<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>fin de service</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
  integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>

<!-- header -->
  <header>
  <p><a href='index.php'>Lilipizz Tablette</a></p>
  </header>

<!-- navigation -->
<nav>
  <div class="nav-left">
    <ul>
      <li><a href="dashboard.php"><i class="fas fa-angle-left"></i></a></li>
    </ul>
  </div>
  <div class="nav-middle">
    <ul>
      <li><img src="img/logo.png"></li>
    </ul>
  </div>
  <div class="nav-right">
    <ul>
      <li></i></li>
    </ul>
  </div>
</nav>

<main>
<!-- content -->
<div id="service">
  <h2>Fin de service</h2>
</div>

<div id="service_redirection">
  <p>Rediriger les clients vers le distributeur ?</p>
  <a href=""><button type="button" class="service_btn red" name="btn_backmenu">Valider</button></a>
</div>

</main>

</body>
</html>
