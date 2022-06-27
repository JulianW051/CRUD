<?php
$dataTable = "hotels";
require_once("../includes/connector.php");
$sql = "SELECT * FROM $dataTable";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
                echo        "<tr>";
                echo            "<td>" . $result['naam'] . "</td>";
                echo            "<td>" . $result['beschrijving'] . "</td>";
                echo            "<td>" . "€" . $result['prijs'] . "</td>";
                echo            "<td>" . $result['locatie'] . "</td>";
                echo            "<td><a href='menu-toevoegen.php?id=" . $result['id'] . "&naam=" . $result['naam'] . "&dataTable=" . $dataTable . "&beschrijving=" . $result['beschrijving'] . "&prijs=" . $result['prijs'] . "&locatie=" . $result['locatie'] . "'><button class='update'>Update</button></a></td>";
                echo            "<td><a href='../actions/delete.php?id=" . $result['id'] . "&dataTable=" . $dataTable . "'><button class='delete'>Delete</button></a></td>";
                echo        "</tr>";   
    }