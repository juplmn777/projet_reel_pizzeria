<?php
    session_start();//démarrage de la session
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour</title>
    <link rel="stylesheet" href="css/carte.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    <!-- header -->
    <header>
    <p><a href='index.php' class="mainMenu">Lilipizz Tablette</a></p>
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
<h1><strong>Gérez vos produits : </strong><a href="addItem.php" class="add"><i class="fas fa-plus"></i>Ajouter</a></h1>
<table id="tour_table_content"><!--construction du tableau en html-->
    <thead>
        <th>Nom du produit</th>
        <th>Ingrédients</th>
        <th>Prix</th>
        <th>Catégorie</th>
        <th>Action</th>
    </thead>
    <tbody>
<?php
    require 'src/connection.php';//connexion à la base de donnée

    $response = $bdd->query('SELECT produits.id, produits.nomProduit, produits.ingredients, produits.prix,
                            categories.nomCategorie AS category
                            FROM produits  LEFT JOIN categories
                            ON produits.id_categorie = categories.id ORDER BY produits.id DESC');
                            //interroge la base de données sous forme de requête pour récupérer les produits.

    while($produit = $response->fetch())//tant qu'il y a des résultats dans la base de données,
    {
        echo '<tr>';
            echo '<td>'.$produit['nomProduit'].'</td>';
            echo '<td>'.$produit['ingredients'].'</td>';
            echo '<td>'.number_format($produit['prix'], 2, '.', '').' '.'€'.'</td>';
            echo '<td>'.$produit['category'].'</td>';
            echo '<td class="icons">';
            echo '<a href="showItem.php?id='.$produit['id'].'" class="show"><i class="far fa-eye"></i></a>';
            echo '<a href="removeItem.php?id='.$produit['id'].'" class="remove"><i class="fas fa-trash-alt"></i></a>';
            echo '<a href="updateItem.php?id='.$produit['id'].'" class="update"><i class="fas fa-edit"></i></a>';
            echo '</td>';
        echo '</tr>';//création des lignes de tableau selon le nombre de résultats retournés.
    }
?>
    </tbody>
</table>
</main>

</body>
</html>
