<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse email où envoyer le formulaire
    $to = "cezergryff@gmail.com";

    // Sujet de l'email
    $subject = "Nouveau message de contact depuis votre site web";

    // Contenu de l'email
    $email_content = "Nom: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // En-têtes de l'email
    $headers = "From: $name <$email>";


    if (mail($to, $subject, $email_content, $headers)) {

        header("Location: thank_you.html");
        exit;
    } else {
        echo "Error with sending mail. Please tryagain.";
    }
} else {
    echo "Error: The form must to be submited.";
}
?>
