<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Accueil</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
  integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
  <!-- navigation -->
<nav>
  <div class="nav-left">
    <ul>
      <li></li>
    </ul>
  </div>
  <div class="nav-middle">
    <ul>
      <li><img src="img/logo.png"></li>
    </ul>
  </div>
  <div class="nav-right">
    <ul>
      <li><a href="tel:+33618407576"><i class="fas fa-phone fa-flip-horizontal"></i></a></li>
      <li><a href="basket.php"><i class="fas fa-shopping-basket"></i></a></li>
    </ul>
  </div>
</nav>

<main>
<!-- content -->
<div id="highlight_container">
  <div id="icons">
    <i class="fas fa-truck fa-flip-horizontal"></i><i class="fas fa-map-marker-alt"></i>
  </div>
  <div id="find_us">
    <p>Retrouvez-nous ce soir dès 18h30</p>
    <p id="today_address">1 allée du Parc 62500 Saint-Omer
  </div>
  <div id="pizza_month">
     <img src="img/pizzaofthemonth/detox.jpg">
     <div class="text-block">
        <a href="ourpizzaofthemonth/pizzaofthemonth.php"><h2>Pizza du mois</h2></a>
  </div>
   </div>
 </div>

<div id="menu_buttons">
  <a href="menu.php"><button type="button" class="menu_btn red" name="carte">Menu</button></a>
  <a href="location.php"><button type="button" class="menu_btn red" name="location">Tournées</button></a>
  <a href="about.php"><button type="button" class="menu_btn green" name="about">À propos</button></a>
  <a href="contact.php"><button type="button" class="menu_btn green" name="contact">Contact</button></a>
</div>
</main>

<!-- footer -->
<footer>
  <div id="socials">
    <ul>
      <li><a href="https://www.facebook.com/lilipizz/"><i class="fab fa-facebook-square"></i></a></li>
      <li><a href="https://www.tripadvisor.fr/Restaurant_Review-g1172369-d5808842-Reviews-Lilipizz-Arques_Aveyron_Occitanie.php"><i class="fab fa-tripadvisor"></i></a></li>
      <li><i class="fab fa-instagram"></i></li>
    </ul>
  </div>
</footer>

<!-- JavaScript -->
<script src="js/find_us.js"></script>
</body>
</html>
