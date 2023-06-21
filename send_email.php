<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $anrede = $_POST["anrede"];
    $vorname = $_POST["vorname"];
    $nachname = $_POST["nachname"];
    $email = $_POST["email"];
    $notiz = $_POST["notiz"];

    $to = "levin.fankhauser@bbzbl-it.ch"; // Hier deine E-Mail-Adresse eintragen
    $subject = "Kontaktformular - Neue Nachricht";
    $message = "Anrede: $anrede\n";
    $message .= "Vorname: $vorname\n";
    $message .= "Nachname: $nachname\n";
    $message .= "E-Mail: $email\n";
    $message .= "Bemerkung/Anliegen: $notiz\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Vielen Dank für Ihre Nachricht! Wir werden uns bald bei Ihnen melden.";
    } else {
        echo "Es gab ein Problem beim Senden Ihrer Nachricht. Bitte versuchen Sie es später erneut.";
    }
}
?>
