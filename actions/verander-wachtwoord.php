<?php
if(isset($_POST['passwordSubmit'])) {
    require_once("../includes/connector.php");

    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "UPDATE users SET password = :password WHERE  id = :id";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->bindParam(':password', $pass);
    $stmt->execute();

    header ("Location: uitloggen.php");
} else {
    header ("Location: ../account-pages/gebruiker.php");
}