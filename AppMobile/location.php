<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Emplacements</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
  integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
  <!-- navigation -->
<nav>
  <div class="nav-left">
    <ul>
      <li><a href="index.php"><i class="fas fa-angle-left"></i></a></li>
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
<div id="places">
  <h2>Tournées</h2>
</div>

<!--The div element for the map -->
    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2525.0012559690344!2d2.2430748157418425!3d50.73846557951618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dcff5503e46b6d%3A0x711f43c864f2f83e!2sPlace+de+l&#39;H%C3%B4tel-de-ville%2C+62219+Longuenesse!5e0!3m2!1sfr!2sfr!4v1545997895374" height="400" frameborder="0" style="border:0"></iframe>
    </div>
    <div id="today">
          <p>Nous sommes aujourd'hui à :</p>
    </div>
    <div id="current_info">
    <div id="address">
    <p id="city">Longuenesse</p>
    <p id="city_address">Place de l'Hotel de Ville<br>62219 Longuenesse</p>
    </div>
    <div id="currently">
      <p class="current">Actuellement</p>
      <p id="current_status"></p>
      </div>
    </div>
  </div>
</main>

<!-- footer -->
<footer>

</footer>

<!-- JavaScript -->
<script src="js/location.js"></script>
</body>
</html>
