<?php
if(isset($_POST['itemSubmit'])) {
    require_once("../includes/connector.php");

    $_POST['prijs'] = str_replace(",",".", $_POST['prijs']);
    $dataTable = $_GET['dataTable'];

    if(isset($_GET['id'])) {
        // Update

        if ($dataTable == "cruises") {
            $sql = "UPDATE $dataTable SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs, locatie = :locatie, eerstePeriode = :eerstePeriode, eindPeriode = :eindPeriode WHERE  id = :id";

            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->bindParam(':naam', $_POST['naam']);
            $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
            $stmt->bindParam(':prijs', $_POST['prijs']);
            $stmt->bindParam(':locatie', $_POST['locatie']);
            $stmt->bindParam(':eerstePeriode', $_POST['eerstePeriode']);
            $stmt->bindParam(':eindPeriode', $_POST['eindPeriode']);
            $stmt->execute();
        
        } else if ($dataTable == "hotels") {
            $sql = "UPDATE $dataTable SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs, locatie = :locatie WHERE  id = :id";

            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->bindParam(':naam', $_POST['naam']);
            $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
            $stmt->bindParam(':prijs', $_POST['prijs']);
            $stmt->bindParam(':locatie', $_POST['locatie']);
            $stmt->execute();
        
        } else {
            $sql = "UPDATE $dataTable SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs WHERE  id = :id";

            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->bindParam(':naam', $_POST['naam']);
            $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
            $stmt->bindParam(':prijs', $_POST['prijs']);
            $stmt->execute();
        }


        header ("Location: ../account-pages/personeel.php");
    } else {
        // Create

        if ($dataTable == "cruises") {
            $sql = "INSERT INTO $dataTable(naam, beschrijving, prijs, locatie, eerstePeriode, eindPeriode) VALUES(:naam, :beschrijving, :prijs, :locatie, :eerstePeriode, :eindPeriode)";

            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':naam', $_POST['naam']);
            $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
            $stmt->bindParam(':prijs', $_POST['prijs']);
            $stmt->bindParam(':locatie', $_POST['locatie']);
            $stmt->bindParam(':eerstePeriode', $_POST['eerstePeriode']);
            $stmt->bindParam(':eindPeriode', $_POST['eindPeriode']);
            $stmt->execute();
        
        } else if ($dataTable == "hotels") {
            $sql = "INSERT INTO $dataTable(naam, beschrijving, prijs, locatie) VALUES(:naam, :beschrijving, :prijs, :locatie)";
 
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':naam', $_POST['naam']);
            $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
            $stmt->bindParam(':prijs', $_POST['prijs']);
            $stmt->bindParam(':locatie', $_POST['locatie']);
            $stmt->execute();
        
        } else {
            echo $dataTable;
            $sql = "INSERT INTO $dataTable(naam, beschrijving, prijs) VALUES(:naam, :beschrijving, :prijs)";

            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':naam', $_POST['naam']);
            $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
            $stmt->bindParam(':prijs', $_POST['prijs']);
            $stmt->execute();

        }

        header ("Location: ../account-pages/personeel.php");
    }
} else {
    header ("Location: ../menu-toevoegen.php");
}