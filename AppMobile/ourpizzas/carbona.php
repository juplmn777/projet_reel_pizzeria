<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Carbona</title>
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
  integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
  <!-- navigation -->
<nav>
  <div class="nav-left">
    <ul>
      <li><a href="../ourpizzas.php"><i class="fas fa-angle-left"></i></a></li>
    </ul>
  </div>
  <div class="nav-middle">
    <ul>
      <li><img src="../img/logo.png"></li>
    </ul>
  </div>
  <div class="nav-right">
    <ul>
      <li><a href="tel:+33618407576"><i class="fas fa-phone fa-flip-horizontal"></i></a></li>
      <li><a href="../basket.php"><i class="fas fa-shopping-basket"></i></a></li>
    </ul>
  </div>
</nav>

<main>
<!-- content -->
<div class="pizza_title">
  <h2>Carbona</h2>
</div>

<div class="pizza_container">
<div class="pizza_picture">
  <img src="../img/pizzas/carbona.jpg">
</div>
<div class="pizza_title">
  <div class="pizza_composition">
    <p>Sauce Tomate Ail, Tagliatelles, Lardons, Crème Fraîche, Mozzarella</p>
  </div>
  <div class="pizza_price">
    <p>11€</p>
  </div>
</div>
</div>

<div id="order_pizza">
  <form action="carbona.php" method="post">
    <div class="pizza_amount">
    <label for="amount">Quantité :</label>
    <button type="button" id="btn_min" name="button">-</button>
    <input type="text" id="pizza_amount" name="amount" value="1">
    <button type="button" id="btn_plus" name="button">+</button>
  </div>
  <div class="supplement">
  <label for="supplement">Supplément : </label>
  <select id="select-style" name="supplement">
    <option value="vegetables">Aucun</option>
    <option value="vegetables">Légumes (0,50 €)</option>
    <option value="egg">Oeuf (0,50 €)</option>
    <option value="meat">Viande (1,50 €)</option>
    <option value="cheese">Fromage (1,50 €)</option>
  </select>
</div>
  <div align="center">
  <input type="submit" class="red" value="Ajouter au panier">
</div>
</form>
</div>

<!-- footer -->
<footer>

</footer>
</body>
</html>
