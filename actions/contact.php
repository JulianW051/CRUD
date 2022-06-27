<?php

include("../includes/connector.php");
//variabel opslaan
$name = $_REQUEST['naam'];
$tel = $_REQUEST['tel'];
$email = $_REQUEST['email'];
$bericht = $_REQUEST['bericht'];

// versturen
$sql = "INSERT INTO contact (naam, tel, email, bericht) VALUES (?,?,?,?)";
$stmt = $connect->prepare($sql);
$stmt->execute([$name, $tel, $email, $bericht]);

    header('Location: ../pages/contact.php');
?>