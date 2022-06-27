<?php
require_once("../Includes/connector.php");

$sql = "UPDATE users SET Personeel = 1 WHERE id =:id";

$stmt = $connect->prepare($sql);
$stmt->bindParam(":id", $_GET['id']);
$stmt->execute();

header ("Location: ../account-pages/personeel.php");