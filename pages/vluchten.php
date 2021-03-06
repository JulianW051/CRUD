<?php
$page = "boeken";
include("../includes/header.php");

if (!isset($_GET['vakantieType'])) {
    header("Location: boeken.php");
}
?>
<main>
    <div class="hotels">
        <div class="column">
            <div class="vakanties">
                <?php
                    require_once("../Includes/connector.php");

                    $sql = "SELECT * FROM vluchten";
                    $stmt = $connect->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->fetchAll();

                    $ietsGevonden = true;
                    if ($stmt->rowCount() == 0) {
                        $ietsGevonden = false;
                    }

                    foreach ($result as $result){

                        if($_GET['vakantieType'] ==  "CV") {
                            $vakantieType = "../actions/plaats-boeking.php?vakantieType=CV&cruiseID=" . $_GET['cruiseID'] . "&vluchtID=" . $result['id'] . "";
                        } else if ($_GET['vakantieType'] ==  "CVH") {
                            $vakantieType = "../actions/plaats-boeking.php?vakantieType=CVH&cruiseID=" . $_GET['cruiseID'] . "&hotelID=" . $_GET['hotelID'] . "&vluchtID=" . $result['id'] . "";
                        }

                        $roundendPrice = sprintf('%0.2f', $result['prijs']);

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
                        echo        "</div>";
                        echo    "</div>";

                    
                    }

                    if ($ietsGevonden == false) {
                        echo "<h2 class='niksGevonden'>We hebben helaas niks kunnen vinden met deze filters</h2>";
                    }
                ?>
            </div>
        </div>
    </div>
</main>
<?php
include("../includes/footer.php")
?>
<script src="../js/main.js"></script>
</body>
</html>