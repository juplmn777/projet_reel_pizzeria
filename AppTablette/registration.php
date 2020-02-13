<?php
    require 'src/connection.php';
?>
<?php
    if(!empty($_POST['confirm']))
    {
        if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['passwordConfirm']))
        {
            $name = htmlspecialchars($_POST['name']);
            $password = $_POST['password'];
            $passwordConfirm = $_POST['passwordConfirm'];

                if($password === $passwordConfirm)
                {
                    $passwordHash = password_hash($password,PASSWORD_DEFAULT);
                    $response = $bdd->prepare("INSERT INTO USERS(name, password) VALUES(:name,:password)");
                    $response->execute(array(
                            'name'     => $name,
                            'password' => $passwordHash
                        ));
                    $response->closeCursor();
                    header('location: connexion.php');
                }
                else
                {
                    $message = 'Vos mots de passe ne correspondent pas !!!';
                }
        }
        else
        {
            $message = 'Tous les champs doivent être remplis !!!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>inscription</title>
    <link rel="stylesheet" href="css/registration.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Inscription</h1>
    </header>
        <h2>Veuillez vous inscrire pour accéder à l'application</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="name">Nom d'utilisateur :</label>
                </td>
                <td>
                    <input type="text" name="name" placeholder="Ex: Pseudo" class="input">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Mot de passe :</label>
                </td>
                <td>
                    <input type="password" name="password" class="input" placeholder="Ex: ******">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="passwordConfirm">Confirmez votre mot de passe :</label>
                </td>
                <td>
                    <input type="password" name="passwordConfirm" class="input" placeholder="Ex: ******">
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
                    <a href="index.php"><i class="fas fa-angle-left"></i></a>
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