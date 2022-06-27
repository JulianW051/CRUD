<?php
require_once("../Includes/connector.php");

$sql = "SELECT * FROM cruises WHERE locatie = :vaarGebied";
$stmt = $connect->prepare($sql);
$stmt->bindParam(':vaarGebied', $_POST['vaarGebied']);
$stmt->execute();
$result = $stmt->fetchAll();

$wanneer = str_replace("-", "",$_POST['wanneer']);

$beginWanneer = substr($wanneer, 0, 8);
$eindWanneer = substr($wanneer, 10, 16);

$ietsGevonden = true;
if ($stmt->rowCount() == 0) {
    $ietsGevonden = false;
}

foreach ($result as $result){
    $beginWanneerDB = str_replace("-", "",$result['start-periode']);
    $eindWanneerDB = str_replace("-", "",$result['eind-periode']);

    if ($beginWanneer >= $beginWanneerDB && $eindWanneer <= $eindWanneerDB) {
        $ietsGevonden = true;

        echo    "<div class='vakantie'>";
        echo        "<div class='img'>";
        echo            "<img src='" . $result['img'] . "' alt='Vakantie foto'>";
        echo        "</div>";
        echo        "<div class='info'>";
        echo            "<div class='titelRij'>";
        echo                "<div>";
        echo                    "<h2>" . $result['naam'] . "</h2>";
        echo                "</div>";
        echo                "<div>";
        echo                    "<h3>€20.00 p.p</h3>";
        echo                    "<button>Boeken</button>";
        echo                "</div>";   
        echo            "</div>";
        echo            "<p>" . $result['beschrijving'] . "</p>";
        echo            "<div class='reviews'>";
        echo                "<div class='reviewInfo'>";
        echo                    "<h3>Reviews</h3>";
        echo                    "<button>Schrijf een review</button>";
        echo                    "<i class='fa fa-angle-down'></i>";
        echo                "</div>";
        echo                "<div class='review'>";
        echo                    "<h4>Pieter Jansen</h4>";
        echo                    "<p>Ja wat eeen totale kanker vakantie ik kom hier nooit meer terug mijn kinderen zijn verbrand.</p>";
        echo                "</div>";
        echo            "</div>";
        echo        "</div>";
        echo    "</div>";

    } else {
        $ietsGevonden = false;
    }
}

if ($ietsGevonden == false) {
    echo "<h2 class='niksGevonden'>We hebben helaas niks kunnen vinden met deze filters</h2>";
}

if (isset($_POST['vakantieType'])){ 
    if($_POST['vakantieType'] == "C") {
        echo "selected='selected'";
    } 
} 