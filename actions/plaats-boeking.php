<?php
if (isset($_GET['vakantieType'])) {
    require_once('../includes/connector.php');
    session_start();

    if ($_GET['vakantieType'] == "CVH") {
    
        $sql = "INSERT INTO boekingen(userID, cruiseID, vluchtID, hotelID) VALUES(:userID, :cruiseID, :vluchtID, :hotelID)";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':userID', $_SESSION['id']);
        $stmt->bindParam(':cruiseID', $_GET['cruiseID']);
        $stmt->bindParam(':vluchtID', $_GET['vluchtID']);
        $stmt->bindParam(':hotelID', $_GET['hotelID']);

        $stmt->execute();

    } else if ($_GET['vakantieType'] == "CV") {
        
        $sql = "INSERT INTO boekingen(userID, cruiseID, vluchtID) VALUES(:userID, :cruiseID, :vluchtID)";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':userID', $_SESSION['id']);
        $stmt->bindParam(':cruiseID', $_GET['cruiseID']);
        $stmt->bindParam(':vluchtID', $_GET['vluchtID']);

        $stmt->execute();

    } else if ($_GET['vakantieType'] == "CH") {

        $sql = "INSERT INTO boekingen(userID, cruiseID, hotelID) VALUES(:userID, :cruiseID, :hotelID)";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':userID', $_SESSION['id']);
        $stmt->bindParam(':cruiseID', $_GET['cruiseID']);
        $stmt->bindParam(':hotelID', $_GET['hotelID']);

        $stmt->execute();

    } else if ($_GET['vakantieType'] == "C") {

        $sql = "INSERT INTO boekingen(userID, cruiseID) VALUES(:userID, :cruiseID)";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':userID', $_SESSION['id']);
        $stmt->bindParam(':cruiseID', $_GET['cruiseID']);

        $stmt->execute();

    } else {
        header('Location: ../pages/boeken.php');
    }

    header('Location: ../pages/bedankt.php');

} else {
    header('Location: ../pages/boeken.php');
}