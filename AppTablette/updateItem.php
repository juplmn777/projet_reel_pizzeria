<?php
    session_start();
    require 'src/connection.php';


    function checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(!empty($_POST['confirm']))
    {
        $name           = checkInput($_POST['name']);
        $ingredients    = checkInput($_POST['ingredients']);
        $price          = checkInput($_POST['prix']);
        $category       = checkInput($_POST['categorie']);
        $image          = checkInput($_POST['image']);
        $id             = checkInput($_POST['id']);

        if(!isset($name) && !isset($ingredients) && !isset($price) && !isset($category) && !isset($image))
        {
            $message = "Tous les champs doivent être renseignés !";
        }
        else
        {
            $response = $bdd->prepare("UPDATE produits SET nomProduit=:nomProduit,ingredients=:ingredients,prix=:prix,images=:images WHERE id=:id");
            $response -> execute(array(
                'id'            => $id,
                'nomProduit'    => $name,
                'ingredients'   => $ingredients,
                'prix'          => $price,
                'images'        => $image
            ));
            $response->closeCursor();
            header('Location: carte.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modifier produit</title>
    <link rel="stylesheet" href="css/updateItem.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
        <li><a href="carte.php"><i class="fas fa-angle-left"></i></a></li>
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
<h1><strong>Modifier le Produit :</strong></h1>
<form action="updateItem.php" method="POST">
    <table  id="tour_table_content">
        <tr>
            <td>
                <input type="hidden" name="id" value="<?=$_GET['id'] ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label><h4>Modifier le nom du produit : </h4></label>
                <input type="text" name="name" class="updateItem">
            </td>
        </tr>
        <tr>
            <td>
                <label><h4>Modifier les ingrédients du produit: </h4>
                <input type="text" name="ingredients" class="updateItem">
            </td>
        </tr>
        <tr>
            <td>
                <label><h4>Modifier le prix du produit :</h4><i class="ion-ios-paperplane" class="updateItem"></i></label>
                <input type="text" name="prix" class="updateItem">
            </td>
        </tr>
        <tr>
            <td>
                <label><h4>Modifier l'mage du produit :</h4></label>
                <input type="text" name="image" class="updateItem">
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
        <tr>
            <td colspan="2">
                <div>
                    <input type="submit" class="confirm" name="confirm" value="valider">
                    <input type="reset" class="reset" name="reset" value="effacer">
                </div>
            </td>
        </tr>
    </table>
</form>
</main>

</body>
</html>
