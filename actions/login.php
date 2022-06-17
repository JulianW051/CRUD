<?php
session_start();
require_once("../Includes/connector.php");

$sql = "SELECT ID, wachtwoord, personeel FROM users WHERE email = :email";

$stmt = $connect->prepare($sql);
$stmt->bindParam(':email', $_POST['email']);
$stmt->execute();
$result = $stmt->fetchAll();

if ($stmt->rowCount() > 0) {
    foreach ($result as $result) {
        if (password_verify($_POST['password'], $result['wachtwoord'])) {
            $_SESSION['id'] = $result['ID'];
            $_SESSION['email'] = $_POST['email'];
            if ($result['personeel'] == 0) {
                header("Location: ../index.php");
                exit();
            } else {
                header("Location: ../admin/admin.php");
                exit();
            }
            exit();
        } else {
            // Incorrect password
            header("Location: ../pages/registreren.php?error=Wachtwoord of is incorrect");
            exit();
        }
    }
} else {
    // Incorrect email
    header("Location: ../pages/registreren.php?error= of Naam is incorrect");
    exit();
}