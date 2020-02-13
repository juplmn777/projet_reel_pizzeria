<?php
    require 'src/connection.php';
?>
<?php
    if(isset($_POST['confirm']))
    {
        if(isset($_POST['name']) && isset($_POST['password']))
        {
            $nameConfirm = htmlspecialchars($_POST['name']);
            $passwordConfirm = $_POST['password'];

            $response = $bdd->prepare("SELECT name,password FROM USERS WHERE name = :name");
            $response->execute(array(
                'name'=> $nameConfirm
            ));
            $datas = $response->fetch();
            $count = $response->rowCount();

            if($count != 0)
            {
                $passwordCheck = password_verify($passwordConfirm, $datas['password']);

                if($passwordCheck)
                {
                    session_start();

                    $_SESSION['name'] = $datas['name'];
                    header('location: dashboard.php');
                }
                else
                {
                    $message = "Vos identifiants sont incorrects, veuillez vous identifier correctement.";
                    header('location: connexion.php');
                }
            }
            else
            {
                $message = "Ce compte n'existe pas!!! Veuillez vous inscrire : <a href='registration.php'>Inscription</a>";
            }
        }
        else
        {
            $message = "Veuillez renseigner tous les champs.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>connexion</title>
    <link rel="stylesheet" href="css/connexion.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<header>
<h1>Connexion</h1>
</header>
        <h2>Connectez-vous à votre compte administrateur</h2>

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
                        <input type="submit" class="reset" name="reset" value="effacer">
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