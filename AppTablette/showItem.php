<?php
    session_start();
    require 'src/connection.php';

    if(!empty($_GET['id']))
    {
        $id = checkInput($_GET['id']);
    }

    $response = $bdd->prepare("SELECT produits.id, produits.nomProduit, produits.ingredients, produits.prix, produits.images, categories.nomCategorie AS category FROM produits LEFT JOIN categories ON produits.id_categorie = categories.id WHERE produits.id = ?");
    $response->execute(array($id));
    $produit = $response->fetch();

    function checkInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>voir un produit</title>
    <link rel="stylesheet" href="css/showItem.css">
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
<h1><strong>Voir un Produit</strong></h1>
    <table  id="tour_table_content">
        <tr>
            <td>
            <label><h4>Nom : </h4></label><?php echo $produit['nomProduit'];?>
            </td>
        </tr>
        <tr>
            <td>
            <label><h4>Ingrédients : </h4></label><?php echo $produit['ingredients'];?>
            </td>
        </tr>
        <tr>
            <td>
            <label><h4>Prix : </h4><i class="ion-ios-paperplane"></i></label><?php echo number_format((float)$produit['prix'], 2, '.', ''). ' €';?>
            </td>
        </tr>
        <tr>
            <td>
            <label><h4>Catégorie : </h4></label><?php echo $produit['category'];?>
            </td>
        </tr>
        <tr>
            <td>
                <img src="<?php echo 'img/'.$produit['images'];?>" alt="...">
            </td>
        </tr>
    </table>
</main>

</body>
</html>
