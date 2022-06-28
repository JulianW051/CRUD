<?php
if(isset($_POST['itemSubmit'])) {
    require_once("../includes/connector.php");

    $sql = "UPDATE users SET username = :username, tel = :tel, email = :email WHERE  id = :id";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':tel', $_POST['tel']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->execute();

    header ("Location: uitloggen.php");
}  else {
    header ("Location: ../account-pages/gebruiker.php");
}
