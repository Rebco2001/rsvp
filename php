<?php

$lastName = $_POST['prenom'];
$nombre = $_POST['nombre'];
$message = $_POST['message'];
$lastName = $_POST['nom'];


$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

$total_contenu =  "<html>Nom : $firstName <br> Prénom : $lastName <br> Nombre : $nombre <br> Mesage : $message </html>" ;


mail("rebecca.illouz13@gmail.com", $objet, $total_contenu, implode("\r\n", $headers));



?>