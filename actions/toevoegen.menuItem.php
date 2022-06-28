<?php
if(isset($_POST['itemSubmit'])) {
    require_once("../includes/connector.php");

    $_POST['prijs'] = str_replace(",",".", $_POST['prijs']);
    $dataTable = $_GET['dataTable'];

    if(isset($_GET['id'])) {
        // Update

        if ($dataTable == "cruises") {
            $sql = "UPDATE $dataTable SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs, locatie = :locatie, eerstePeriode = :eerstePeriode, eindPeriode = :eindPeriode, img = :img WHERE  id = :id";

            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->bindParam(':naam', $_POST['naam']);
            $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
            $stmt->bindParam(':prijs', $_POST['prijs']);
            $stmt->bindParam(':locatie', $_POST['locatie']);
            $stmt->bindParam(':eerstePeriode', $_POST['eerstePeriode']);
            $stmt->bindParam(':eindPeriode', $_POST['eindPeriode']);
            $stmt->bindParam(':img', $_POST['img']);
            $stmt->execute();
        
        } else if ($dataTable == "hotels") {
            $sql = "UPDATE $dataTable SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs, locatie = :locatie, img = :img WHERE  id = :id";

            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->bindParam(':naam', $_POST['naam']);
            $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
            $stmt->bindParam(':prijs', $_POST['prijs']);
            $stmt->bindParam(':locatie', $_POST['locatie']);
            $stmt->bindParam(':img', $_POST['img']);
            $stmt->execute();
        
        } else {
            $sql = "UPDATE $dataTable SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs, img = :img WHERE  id = :id";

            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->bindParam(':naam', $_POST['naam']);
            $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
            $stmt->bindParam(':prijs', $_POST['prijs']);
            $stmt->bindParam(':img', $_POST['img']);
            $stmt->execute();
        }


        header ("Location: ../account-pages/personeel.php");
    } else {
        // Create

        if ($dataTable == "cruises") {
            $sql = "INSERT INTO $dataTable(naam, beschrijving, prijs, locatie, eerstePeriode, eindPeriode, img) VALUES(:naam, :beschrijving, :prijs, :locatie, :eerstePeriode, :eindPeriode, :img)";

            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':naam', $_POST['naam']);
            $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
            $stmt->bindParam(':prijs', $_POST['prijs']);
            $stmt->bindParam(':locatie', $_POST['locatie']);
            $stmt->bindParam(':eerstePeriode', $_POST['eerstePeriode']);
            $stmt->bindParam(':eindPeriode', $_POST['eindPeriode']);
            $stmt->bindParam(':img', $_POST['img']);
            $stmt->execute();
        
        } else if ($dataTable == "hotels") {
            $sql = "INSERT INTO $dataTable(naam, beschrijving, prijs, locatie, img) VALUES(:naam, :beschrijving, :prijs, :locatie, :img)";
 
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':naam', $_POST['naam']);
            $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
            $stmt->bindParam(':prijs', $_POST['prijs']);
            $stmt->bindParam(':locatie', $_POST['locatie']);
            $stmt->bindParam(':img', $_POST['img']);
            $stmt->execute();
        
        } else {
            echo $dataTable;
            $sql = "INSERT INTO $dataTable(naam, beschrijving, prijs, img) VALUES(:naam, :beschrijving, :prijs, :img)";

            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':naam', $_POST['naam']);
            $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
            $stmt->bindParam(':prijs', $_POST['prijs']);
            $stmt->bindParam(':img', $_POST['img']);
            $stmt->execute();

        }

        header ("Location: ../account-pages/personeel.php");
    }
} else {
    header ("Location: ../menu-toevoegen.php");
}