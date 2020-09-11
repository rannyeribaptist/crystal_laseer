<?php
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
require("assets/sendgrid-php/sendgrid-php.php");
// If not using Composer, uncomment the above line

$name = $_POST["name"];
$e_mail = $_POST["email"];
$message = $_POST["message"];

$email = new \SendGrid\Mail\Mail();
$email->setFrom("rannyeri@protonmail.com", "Site Crystal Laseer");
$email->setSubject("Contato");
$email->addTo("crystallaseer@gmail.com", "Crystal Laseer");
$email->addContent(
    "text/plain", "Contato - Crystal Laseer"
);
$email->addContent(
    "text/html", "<h1>Contato - Crystal Laseer</h1>" . "<p> Nome: " . $name . "</p>" . "<p>E-mail: " . $e_mail . "</p>" . "</p>" . "<p>Mensagem: " . $message . "</p>"
);
$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    Header("location:https://www.crystallaseer.com.br/obrigado.html");
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>
