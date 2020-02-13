<?php
    session_start();
?>
<?php
    require 'src/connection.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>horaires</title>
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
<div id="tour">
  <h2>Tournée</h2>
</div>

<div id="tour_table">
    <table id="tour_table_content">
  <thead>
    <tr>
      <th>Jour</th>
      <th>Adresse</th>
      <th>Code postal</th>
      <th>Ville</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    require 'src/connection.php';

    $response = $bdd->query("SELECT * FROM tournee");
    while($tour = $response->fetch())
    {
        echo '<tr>';
            echo '<td>'.ucfirst($tour['jour']).'</td>';
            echo '<td>'.ucfirst($tour['adresse']).'</td>';
            echo '<td>'.$tour['postal'].'</td>';
            echo '<td>'.ucfirst($tour['ville']).'</td>';
            ?>
            <td><a href="changeTour.php?id=<?= $tour['id']; ?>">Modifier</a></td>
            <?php
        echo '</tr>';
    }

    ?>
  </tbody>
</table>
    </div>
  </div>
</div>

</main>

</body>
</html>
