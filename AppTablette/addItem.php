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
        $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);

        if(!isset($name) && !isset($ingredients) && !isset($price) && !isset($category) && !isset($image))
        {
            $message = "Tous les champs doivent être renseignés !";
        }
        else
        {
            if($imageExtension != "jpg" && $imageExtension != "png" && $imageExtension != "jpeg")
            {
                $message = "Les formats d'images acceptés sont : .jpg, .png, .jpeg !";
            }

        }

            $response = $bdd->prepare("INSERT INTO produits (nomProduit,ingredients,prix,id_categorie,images) VALUES(:nomProduit,:ingredients,:prix,:id_categorie,:images)");
            $response->execute(array(
                'nomProduit'     => $name,
                'ingredients'    => $ingredients,
                'prix'           => $price,
                'id_categorie'   => $category,
                'images'         => $image
            ));
            $response->closeCursor();
            header('Location: carte.php');
        }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ajouter produit</title>
        <link rel="stylesheet" href="css/insertItem.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
<body>
    <header>
        <h1>Ajouter un produit</h1>
    </header>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="name">Nom du produit :</label>
                </td>
                <td>
                    <input type="text" name="name" placeholder="nom du produit" class="input">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ingredients">Ingrédients : </label>
                </td>
                <td>
                    <input type="text" name="ingredients" class="input" placeholder="ingrédients">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="prix">Prix(en €) :</label>
                </td>
                <td>
                    <input type="text" name="prix" class="input" placeholder="prix">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="categorie">Catégorie</label>
                </td>
                <td>
                    <select class="optionCategorie" id="category" name="categorie">
                        <?php
                            foreach($bdd->query('SELECT * FROM categories') as $row)
                            {
                                echo '<option value="'. $row['id'] .'">'. $row['nomCategorie'] . '</option>';
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="image">Nom de l'image :</label>
                </td>
                <td>
                    <input type="text" name="image" id="image">
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
            <tr>
                <td colspan="2">
                    <a href="carte.php"><i class="fas fa-angle-left"></i></a>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <img src="img/logo.png" alt="logo lilipizz">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>