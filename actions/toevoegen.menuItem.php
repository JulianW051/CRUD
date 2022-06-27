<?php
if(isset($_POST['itemSubmit'])) {
    require_once("../includes/connector.php");

    $_POST['prijs'] = str_replace(",",".", $_POST['prijs']);

    if(isset($_GET['id'])) {
        // Update
        $sql = "UPDATE cruises SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs, locatie = :locatie, eerstePeriode = :eerstePeriode, eindPeriode = :eindPeriode WHERE  id = :id";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->bindParam(':naam', $_POST['naam']);
        $stmt->bindParam(':beschrijving', $_POST['beschrijving']);
        $stmt->bindParam(':prijs', $_POST['prijs']);
        $stmt->bindParam(':locatie', $_POST['locatie']);
        $stmt->bindParam(':eerstePeriode', $_POST['eerstePeriode']);
        $stmt->bindParam(':eindPeriode', $_POST['eindPeriode']);
        $stmt->execute();

        header ("Location: ../account-pages/personeel.php");
    } else {
        // Create
        $sql = "INSERT INTO $dataTable(gerecht, beschrijving, prijs, categorie) VALUES(:gerechtNaam, :gerechtBeschrijving, :gerechtPrijs, :category)";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':gerechtNaam', $_POST['gerecht']);
        $stmt->bindParam(':gerechtBeschrijving', $_POST['beschrijving']);
        $stmt->bindParam(':gerechtPrijs', $_POST['prijs']);
        $stmt->bindParam(':category', $_POST['categorie']);
        $stmt->execute();

        header ("Location: ../admin/admin.php");
    }
} else {
    header ("Location: ../menu-toevoegen.php");
}