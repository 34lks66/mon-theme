<?php

header('Content-type: text/html; charset=UTF-8'); 

$votre_adresse_mail = 'kukuli6699@hotmail.com';
$nom_du_site = "Bus Dentaire Gersois";

if (isset($_POST['envoyer'])) {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8');
    $prenom = htmlspecialchars($_POST['prenom'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $numero = htmlspecialchars($_POST['numero'], ENT_QUOTES, 'UTF-8');
    $message = nl2br(htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8'));

    $sujet = "Nouveau message de $nom $prenom";

    $message_html = "
    <html>
    <head>
        <title>$sujet</title>
        <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { color: #1fb3bf; border-bottom: 1px solid #eee; padding-bottom: 10px; }
        .info { margin: 15px 0; }
        .message { background: #f9f9f9; padding: 15px; border-radius: 5px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                 <h2>Nouveau message de $nom $prenom</h2>
            </div>
            <div class='info'>
                 <p><strong>Email :</strong> $email</p>
                 <p><strong>Téléphone :</strong> $numero</p>
            </div>
            <div class='message'>
                <h3>Message :</h3>
                <p>$message</p>
            </div>
        </div>
    </body>
    </html>
    ";

    $headers = [
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: ' . $nom_du_site . ' <' . $email . '>',
        'Reply-To: ' . $prenom . ' ' . $nom . ' <' . $email . '>',
        'X-Mailer: PHP/' . phpversion()
    ]; 

    if (mail($votre_adresse_mail, $sujet, $message_html, implode("\r\n", $headers))) {
        // Optionnel : rediriger ou afficher un message de succès
        echo "Message envoyé avec succès.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>