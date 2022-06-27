<?php
require_once("../includes/connector.php");

$sql = "INSERT INTO reviews(cruiseID, user, review) VALUES(:cruiseID, :user, :review)";

$stmt = $connect->prepare($sql);
$stmt->bindParam(':cruiseID', $_GET['cruiseID']);
$stmt->bindParam(':user', $_GET['user']);
$stmt->bindParam(':review', $_POST['review']);
$stmt->execute();

header ("Location: ../pages/boeken.php");