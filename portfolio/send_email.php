<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Adresse e-mail de réception
    $to = "cezergryff@gmail.com"; // Remplacez par votre adresse e-mail
    
    // Sujet de l'e-mail
    $subject = "Nouveau message de contact de $name";
    
    // Corps de l'e-mail
    $body = "Nom: $name\nEmail: $email\nMessage:\n$message";
    
    // En-têtes pour l'e-mail
    $headers = "From: $email";
    
    // Envoi de l'e-mail
    if (mail($to, $subject, $body, $headers)) {
        // Si l'e-mail est envoyé avec succès, redirigez l'utilisateur vers une page de confirmation
        header("Location: confirmation.html"); // Remplacez confirmation.html par le chemin de votre page de confirmation
        exit;
    } else {
        // En cas d'erreur lors de l'envoi de l'e-mail, affichez un message d'erreur
        echo "Error to send message. Please try again later.";
    }
}
?>