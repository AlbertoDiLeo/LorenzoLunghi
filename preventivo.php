<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//require 'vendor/autoload.php';
require __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = strip_tags($_POST['nome']);
    $oggetto = strip_tags($_POST['oggetto']);
    $email = strip_tags($_POST['email']);
    $telefono = strip_tags($_POST['telefono']);
    $messaggio = strip_tags($_POST['messaggio']);

    $_SESSION['nome'] = $nome;
    $_SESSION['oggetto'] = $oggetto;
    $_SESSION['email'] = $email;
    $_SESSION['telefono'] = $telefono;
    $_SESSION['messaggio'] = $messaggio;

    $mail = new PHPMailer(true); 

    try {
        // Configurazione del server SMTP
        $mail->isSMTP(); // Questo metodo indica a PHPMailer di utilizzare il protocollo SMTP per inviare email.
        $mail->Host = 'mail.albertodileo.it'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@albertodileo.it'; 
        $mail->Password = 'Gu#=)@TS_g0='; // password di noreply@albertodileo.it 
        $mail->SMTPSecure = "ssl";
        $mail->Port = 465;

        // Destinatari
        $mail->setFrom('noreply@albertodileo.it', $nome); // Questo metodo imposta l'indirizzo email del mittente. Deve essere l'indirizzo email dell'account che invia l'email. Il secondo parametro è il nome del mittente.
        $mail->addAddress('alberto.dileo2@gmail.com'); // destinatario della email info.geomlunghi@gmail.com
        $mail->addReplyTo($email, $nome); // Questo metodo imposta l'indirizzo email a cui rispondere.

        // Contenuto
        $mail->isHTML(true);
        $mail->Subject = "Nuovo messaggio da $nome";
        $mail->Body = "Hai ricevuto un nuovo messaggio dal modulo di contatto del tuo sito web.<br><br>";
        $mail->Body .= "Dettagli del messaggio:<br>";
        $mail->Body .= "Nome: $nome<br>";
        $mail->Body .= "Email: $email<br>";
        $mail->Body .= "Telefono: $telefono<br>";
        $mail->Body .= "Oggetto: $oggetto<br>";
        $mail->Body .= "Messaggio:<br>$messaggio<br>";

        $mail->send();
       
    } catch (Exception $e) {
        $_SESSION['error_message'] = "Errore durante l'invio del messaggio: {$mail->ErrorInfo}";
        echo "Errore durante l'invio del messaggio: {$mail->ErrorInfo}<br>";
        //header("Location: errore_preventivo.php"); // Redirect a una pagina di errore
        exit();
    }
    header("Location: conferma_preventivo.php"); // Redirect a una pagina di conferma
    exit();
} else {
    $_SESSION['error_message'] = "Richiesta non valida.";
    echo "Richiesta non valida.<br>";
    header("Location: errore_preventivo.php"); // Redirect a una pagina di errore
    exit();
}
?>