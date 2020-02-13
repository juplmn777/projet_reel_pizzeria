<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Commandes</title>
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
<div id="bookings">
  <h2>Réservations</h2>
</div>

<div id="order">
    <table id="order_summary">
  <thead>
    <tr>
      <th>Pizza</th>
      <th>Quantité</th>
      <th>Prix</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Margarita</td>
      <td>3</td>
      <td>21€</td>
    </tr>
    <tr>
      <td>Biquette</td>
      <td>2</td>
      <td>19€</td>
    </tr>
  </tbody>
</table>
<div id="sum">
  <div class="total_amount">
    <div class="total">Total :</div>
    <div class="amount">49€</div>
  </div>
  <div class="order_msg">
    <p>Pas de fromage, j'y suis allergique. Merci!</p>
  </div>
  <div id="order_buttons">
    <a href=""><button type="button" class="order_btn green" name="btn_backmenu">Prête</button></a>
    <a href=""><button type="button" class="order_btn red" name="btn_backmenu">Supprimer</button></a>
</div>
</div>

</main>

</body>
</html>
