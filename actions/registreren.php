<?php

include("../includes/connector.php");
//variabel opslaan
$name = $_REQUEST['naam'];
$tel = $_REQUEST['tel'];
$email = $_REQUEST['email'];
$pass = $_REQUEST['wachtwoord'];
$pass = password_hash($pass, PASSWORD_DEFAULT);

// versturen
$sql = "INSERT INTO users (username, tel, email, password) VALUES (?,?,?,?)";
$stmt = $connect->prepare($sql);
$stmt->execute([$name, $tel, $email, $pass]);

header('Location: ../pages/mijn-account.php');
?>