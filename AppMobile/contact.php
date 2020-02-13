<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;//Load Composer's autoloader
    require 'vendor/autoload.php';


    $mail = new PHPmailer();

if(isset($_POST['sendMail']))
{
	$mail->IsSMTP(); // activation des fonctions SMTP
    $mail->SMTPAuth = true; // on l’informe que ce SMTP nécessite une autentification
    $mail->SMTPSecure = 'tls'; // protocole utilisé pour sécuriser les mails 'ssl' ou 'tls'
    $mail->Host = "smtp.gmail.com"; // définition de l’adresse du serveur SMTP : 25 en local, 465 pour ssl et 587 pour tls
    $mail->Port = 587; // définition du port du serveur SMTP
    $mail->Username = 'julien.plumyoen@gmail.com'; // le nom d’utilisateur SMTP
    $mail->Password = '3manc1pator1981'; // son mot de passe SMTP
    $mail->SMTPDebug = 4;

    // Paramètres du mail
    $mail->AddAddress('jplumyoen@popschool.eu.com'); // ajout du destinataire
    $mail->From = $_POST['email']; // adresse mail de l’expéditeur
    $mail->FromName = $_POST['name']; // nom de l’expéditeur
    //$mail->AddReplyTo(); // adresse mail et nom du contact de retour
    $mail->IsHTML(); // envoi du mail au format HTML
    $mail->Subject = $_POST['subject']; // sujet du mail
    $mail->Body = "<div style='border-style: 2px solid red>".$_POST['message']."</div>"; // le corps de texte du mail en HTML
    $mail->AltBody = $_POST['message']; // le corps de texte du mail en texte brut si le HTML n'est pas supporté

    // envoi du mail ou pas
    if(!$mail->Send())
    {
        echo "Mailer Error: " . $mail->ErrorInfo; // affichage des erreurs, s’il y en a
    }
    else
    {
        echo  "Le message a été envoyé avec succès !";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Contact</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
			integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>
	<body>
		<!-- navigation -->
		<nav>
			<div class="nav-left">
			<ul>
				<li><a href="index.php"><i class="fas fa-angle-left"></i></a></li>
			</ul>
			</div>
			<div class="nav-middle">
			<ul>
				<li><img src="img/logo.png"></li>
			</ul>
			</div>
			<div class="nav-right">
			<ul>
				<li><a href="tel:+33618407576"><i class="fas fa-phone fa-flip-horizontal"></i></a></li>
				<li><a href="basket.php"><i class="fas fa-shopping-basket"></i></a></li>
			</ul>
			</div>
		</nav>
		<main>
			<!-- content -->
			<div id="contact_text">
			<h2>Contactez-nous</h2>
			<p>Particuliers, entreprises, associations, vous souhaitez organiser un événement ou avez une demande particulière ?
			N'hésitez pas à utiliser le formulaire de contact ci-dessous afin de prendre contact avec nous. À la réception de votre message, nous prendrons contact avec vous sous les plus brefs délais.<br>
			À bientôt,
			LiliPizz
			</p>
			</div>
			<hr>
			<div id="contact_form">
			<form action="contact.php" method="POST">
				<label for="name">Nom :</label>
				<input name="name" class="form-control" type="text" value="">
				<label for="email">Email :</label>
				<input name="email"  class="form-control" type="text" value="">
        <label for="subject">Sujet :</label>
				<input name="subject" class="form-control" type="text" value="">
        <label for="message">Votre message :</label>
				<textarea name="message"  class="form-control" cols="50" rows="10" ></textarea>
        <div class="inline">
        <div class="check"><input type="checkbox" id="checkbox" name="datas" value="datas_submit"></div>
        <div class="check_text_legal">En soumettant ce formulaire, j'accepte que les informations saisies
          soient utilisées pour me recontacter. Voir la <a href="legaldisclaimer.php" id="link_datas">politique de confidentialité</a></div>
      </div>
				<div align="center">
					<input type="submit" class="green" name="sendMail" value="Envoyer">
				</div>
			</form>
			</div>
	</main>
	<!-- footer -->
	<footer>
	</footer>
</body>
</html>
