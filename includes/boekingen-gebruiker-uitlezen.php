<?php
$dataTable = "boekingen";
require_once("../includes/connector.php");
$sql = "SELECT * FROM boekingen where userID = :id";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':id', $_SESSION['id']);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        // Cruise
        $sql = "SELECT naam FROM cruises where id =:id";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id', $result['cruiseID']);
        $stmt->execute();
        $cruiseResult = $stmt->fetchAll();

        foreach ($cruiseResult as $cruiseResult) {
            $cruise = $cruiseResult['naam'];
        }

        // Vlucht
        $sql = "SELECT naam FROM vluchten where id =:id";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id', $result['vluchtID']);
        $stmt->execute();
        $vluchtResult = $stmt->fetchAll();

        foreach ($vluchtResult as $vluchtResult) {
            $vlucht = $vluchtResult['naam'];
        }

        if ($result['vluchtID'] == "0") {
            $vlucht = "none";
        }

        // Hotel
        $sql = "SELECT naam FROM hotels where id =:id";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id', $result['hotelID']);
        $stmt->execute();
        $hotelResult = $stmt->fetchAll();

        foreach ($hotelResult as $hotelResult) {
            $hotel = $hotelResult['naam'];
        }

        if ($result['hotelID'] == "0") {
            $hotel = "none";
        }
        
        echo        "<tr>";
        echo            "<td>" . $_SESSION['username'] . "</td>";
        echo            "<td>" . $cruise . "</td>";
        echo            "<td>" . $vlucht . "</td>";
        echo            "<td>" . $hotel . "</td>";
        echo            "<td><a href='../actions/delete.php?id=" . $result['id'] . "&dataTable=" . $dataTable . "'><button class='delete'>Delete</button></a></td>";
        echo        "</tr>";   
    }