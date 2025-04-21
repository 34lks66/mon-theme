<?php
echo "Test : script exécuté";
exit;
?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST["nom"]));
    $prenom = htmlspecialchars(trim($_POST["prenom"]));
    $email = htmlspecialchars(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $numero = htmlspecialchars(trim($_POST["numero"]));
    $commune = htmlspecialchars(trim($_POST["commune"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $sujet = "Urgent : Prise de rendez-vous sur site Internet";

    $contenu = "
    <html>
    <head><title>$sujet</title></head>
    <body>
        <h2>Nouvelle prise de rendez-vous :</h2>
        <p><strong>Nom :</strong>{$nom}</p>
        <p><strong>Prénom :</strong>{$prenom}</p>
        <p><strong>Email :</strong>{$email}</p>
        <p><strong>Téléphone :</strong>{$numero}</p>
        <p><strong>Commune :</strong>{$commune}</p>
        <p><strong>Message :</strong><br>" . nl2br($message) . "</p>
    </body>
    </html>
    ";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: {$prenom} {$nom} <{$email}>". "\r\n";

    $destinataire = "kukuli6699@hotmail.com";

    if(mail($destinataire, $sujet, $contenu, $headers)) {
        echo "<p class='success-message'>Votre message a bien été envoyé.</p>";
    } else {
        echo "<p class='error-message'>Une erreur est survenue. Veuillez réessayer plus tard.</p>";
    }
} else {
    header("Location: index.php");
    exit;
}

?>