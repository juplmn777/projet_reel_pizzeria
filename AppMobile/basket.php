<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Panier</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
  integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
  <!-- navigation -->
<nav>
  <div class="nav-left">
    <ul>
      <li><a href="#" onclick="history.go(-1)"><i class="fas fa-angle-left"></i></a></li>
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
      <li></li>
    </ul>
  </div>
</nav>

<main>
<!-- content -->
<div id="contact_text">
  <h2>Votre panier</h2>
</div>

<div id="basket_form">
  <form action="basket.php" method="post">
    <table id="order_summary">
  <thead>
    <tr>
      <th>Produit</th>
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
  <div class="paiement">
    <p>Paiement sur place</p>
  </div>
</div>

    </div>
    <div class="inline">
    <div class="check"><input type="checkbox" id="checkbox" name="cold" value="coldorder"></div>
    <div class="check_text">Je souhaite une commande froide à cuire soi-même</div>
  </div>
    <hr>
    <p align="center">Pour toute demande particulière, veuillez laisser un message</p>
    <textarea placeholder="Message" name="message" cols="50" rows="4"></textarea>
    <div align="center">
    <input type="submit" class="red" value="Continuer">
  </div>
  </form>
</div>
</main>

<!-- footer -->
<footer>

</footer>
</body>
</html>
