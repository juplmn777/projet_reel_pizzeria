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

    if(!empty($_GET['id']))
    {
        $id = checkInput($_GET['id']);
    }

    if(!empty($_POST['confirm']))
    {
        $id = checkInput($_POST['id']);
        $response = $bdd->prepare("DELETE FROM produits WHERE id = ?");
        $response->execute(array($id));
        $response->closeCursor();
        header("Location: carte.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>supprimer un produit</title>
    <link rel="stylesheet" href="css/insertItem.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Ajouter un produit</h1>
    </header>
    <form action="removeItem.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="name">Ëtes-vous sûr de vouloir supprimer ?</label>
                </td>
                <td>
                <input type="hidden" name="id" value="<?php echo $id;?>"/>
                </td>
            </tr>
                <td colspan="2">
                    <div>
                        <input type="submit" class="confirm" name="confirm" value="oui">
                        <input type="reset" class="reset" name="reset" value="non">
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