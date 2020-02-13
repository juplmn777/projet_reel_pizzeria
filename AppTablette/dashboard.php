<?php
    require 'src/connection.php';
?>
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menu principal - Tablette</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
  integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>

<!-- header -->
  <header>
        <p><a href='index.php'>Lilipizz Tablette</a></p>
        <?php echo "connecté en tant que : ".$_SESSION['name']; ?>
  </header>

<main>
<!-- content -->
<div id="menu_list">

  <div class="section_container">
  <div class="section_picture">
    <a href="booking.php"><img src="img/pizza.jpg"></a>
  </div>
  <div class="section_title">
    <h3>Réservations</h3>
  </div>
</div>

<div class="section_container">
<div class="section_picture">
  <a href="carte.php"><img src="img/pizza.jpg"></a>
</div>
<div class="section_title">
  <h3>Gérer carte</h3>
</div>
</div>

<div class="section_container">
<div class="section_picture">
  <a href="tour.php"><img src="img/truck.jpg"></a>
</div>
<div class="section_title">
  <h3>Changer tournée</h3>
</div>
</div>

<div class="section_container">
<div class="section_picture">
  <a href="endofservice.php"><img src="img/truck.jpg"></a>
</div>
<div class="section_title">
  <h3>Fin de service</h3>
</div>
</div>

</main>

<!-- footer -->
<footer>
  <div id="logo">
    <img src="img/logo.png">
    </ul>
  </div>
</footer>
</body>
</html>
