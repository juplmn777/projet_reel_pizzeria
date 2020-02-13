<?php
    session_start();

    require 'src/connection.php';



    if(!empty($_POST['confirm']))
    {
        if(isset($_POST['address']) && isset($_POST['postal']) && isset($_POST['city']))
        {
            $address = $_POST['address'];
            $postalCode = $_POST['postal'];
            $city = $_POST['city'];
            $id = $_POST['id'];

            $response = $bdd->prepare("UPDATE tournee  SET adresse = :adresse, postal = :postal, ville = :ville WHERE id = :id");
            $response->execute(array(
                'id' => $id,
                'adresse' => $address,
                'postal' => $postalCode,
                'ville' => $city
            ));
            $response->fetch();
            $response->closeCursor();
            header("Location: tour.php");
        }
        else
        {
            $message = "Veuillez remplir tous les champs";
        }
    }


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>changer la tournée</title>
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
  <h2>modifier la tournée du jour : <? echo $day ; ?></h2>
</div>

<div id="tour_table">
  <form action="changeTour.php" method="post">
    <table id="tour_table_content">
    <tr>
        <td><input type="hidden" value="<?=$_GET['id'] ?>" name="id"/></td></tr>
    </tr>
    <tr>
        <td>
            <label for="address">Entrez la nouvelle adresse :</label>
        </td>
        <td>
            <input type="text" name="address" placeholder="adresse" class="tourInput">
        </td>
    </tr>
    <tr>
        <td>
            <label for="postal">Entrez le code postal : </label>
        </td>
        <td>
            <input type="text" name="postal" placeholder="code postal" class="tourInput">
        </td>
    </tr>
    <tr>
        <td>
            <label for="city">Entrez le nom de la ville : </label>
        </td>
        <td>
            <input type="text" name="city" placeholder="ville" class="tourInput">
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="confirm" value="valider" class="validate">
        </td>
    </tr>
    <?php
        if(isset($message))
        {
            echo "<tr>";
                echo "<td colspan='2'>";
                    echo "<p class='alert'>".$message."</p>";
                echo "</td>";
            echo "</tr>";
        }
    ?>
</table>
</form>
</div>
</main>

</body>
</html>
