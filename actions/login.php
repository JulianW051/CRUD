<?php
session_start();
require_once("../Includes/connector.php");

$sql = "SELECT id, password, username FROM users WHERE email = :email";

$stmt = $connect->prepare($sql);
$stmt->bindParam(':email', $_POST['email']);
$stmt->execute();
$result = $stmt->fetchAll();

if ($stmt->rowCount() > 0) {
    foreach ($result as $result) {
        if (password_verify($_POST['wachtwoord'], $result['password'])) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['email'] = $_POST['email'];
            header("Location: ../account-pages/gebruiker.php");
            exit();
        } else {
            // Incorrect password
            header("Location: ../pages/mijn-account.php?error=Wachtwoord is incorrect");
            exit();
        }
    }
} else {
    // Incorrect email
    header("Location: ../pages/mijn-account.php?error= Email is incorrect");
    exit();
}