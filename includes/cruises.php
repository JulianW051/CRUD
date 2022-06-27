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
    $beginWanneerDB = str_replace("-", "",$result['eerstePeriode']);
    $eindWanneerDB = str_replace("-", "",$result['eindPeriode']);

    if($_POST['vakantieType'] ==  "C") {
        $vakantieType = "../actions/plaats-boeking.php?vakantieType=C&cruiseID=" . $result['id'] . "";
    } else if ($_POST['vakantieType'] ==  "CH") {
        $vakantieType = "hotels.php?vakantieType=CH&cruiseID=" . $result['id'] . "&vaarGebied=" . $_POST['vaarGebied'] . "";
    } else if ($_POST['vakantieType'] ==  "CV") {
        $vakantieType = "vluchten.php?vakantieType=CV&cruiseID=" . $result['id'] . "";
    } else if ($_POST['vakantieType'] ==  "CVH") {
        $vakantieType = "hotels.php?vakantieType=CVH&cruiseID=" . $result['id'] . "&vaarGebied=" . $_POST['vaarGebied'] . "";
    }

    $roundendPrice = sprintf('%0.2f', $result['prijs']);

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
        echo                    "<h3>€" . $roundendPrice . " p.p</h3>";
        echo                    "<a href='" . $vakantieType . "'><button>Boeken</button></a>";
        echo                "</div>";   
        echo            "</div>";
        echo            "<p>" . $result['beschrijving'] . "</p>";
        echo            "<div class='reviews'>";
        echo                "<div class='reviewInfo'>";
        echo                    "<h3>Reviews</h3>";
        echo                    "<a href='review-schrijven.php?cruiseID=" . $result['id'] . "&user=" . $_SESSION['username'] . "'><button>Schrijf een review</button></a>";
        echo                    "<i class='fa fa-angle-down'></i>";
        echo                "</div>";
        
        $sql = "SELECT * FROM reviews WHERE cruiseID = :cruiseID";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':cruiseID', $result['id']);
        $stmt->execute();
        $resultReview = $stmt->fetchAll();

        foreach ($resultReview as $resultReview){
        
            echo                "<div class='review'>";
            echo                    "<h4>" . $resultReview['user'] . "</h4>";
            echo                    "<p>" . $resultReview['review'] . "</p>";
            echo                "</div>";

        }

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