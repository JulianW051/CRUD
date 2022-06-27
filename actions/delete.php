<?php
require_once("../Includes/connector.php");

$dataTable = $_GET['dataTable'];

$sql = "DELETE FROM $dataTable WHERE id =:id";

$stmt = $connect->prepare($sql);
$stmt->bindParam(":id", $_GET['id']);
$stmt->execute();

header ("Location: ../account-pages/personeel.php");