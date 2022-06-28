<?php
session_start();
$page = "boeken";
include("../includes/header.php");

if (!isset($_POST['vakantieType'])) {
    header("Location: boeken.php");
}
?>
<main>
    <div class="boekenResultaat">
        <div class="column">
            <div class="zoekFilter">
                <div class="boekingFilter boekingFilterResultaat">
                    <h2>Zoeken</h2>
                    <form class="formulier" action="boeken-resultaat.php" method="post">
                        <h4>VakantieType</h4>
                        <select name="vakantieType" id="vakantieType">
                            <option <?php if(isset($_POST['vakantieType'])){ if($_POST['vakantieType'] == "C") {echo "selected='selected'";}} ?> value="C">Cruise</option>
                            <option <?php if(isset($_POST['vakantieType'])){ if($_POST['vakantieType'] == "CH") {echo "selected='selected'";}} ?> value="CH">Cruise + Hotel</option>
                            <option <?php if(isset($_POST['vakantieType'])){ if($_POST['vakantieType'] == "CV") {echo "selected='selected'";}} ?> value="CV">Cruise + vlucht</option>
                            <option <?php if(isset($_POST['vakantieType'])){ if($_POST['vakantieType'] == "CVH") {echo "selected='selected'";}} ?> value="CVH">Cruise + vlucht + hotel</option>
                        </select>
                        <h4>Vaargebied</h4>
                        <select name="vaarGebied" id="vaargebied">
                            <option <?php if(isset($_POST['vaarGebied'])){ if($_POST['vaarGebied'] == "NE") {echo "selected='selected'";}} ?> value="NE">Noord Europa</option>
                            <option <?php if(isset($_POST['vaarGebied'])){ if($_POST['vaarGebied'] == "OE") {echo "selected='selected'";}} ?>  value="OE">Oost Europa</option>
                            <option <?php if(isset($_POST['vaarGebied'])){ if($_POST['vaarGebied'] == "WE") {echo "selected='selected'";}} ?> value="WE">West Europa</option>
                            <option <?php if(isset($_POST['vaarGebied'])){ if($_POST['vaarGebied'] == "MZ") {echo "selected='selected'";}} ?> value="MZ">Middelandse zee</option>
                        </select>
                        <h4>Wanneer?</h4>
                        <input class="wanneer inputForm" readonly="readonly" name="wanneer" type="text" class="form-input" placeholder="Geen voorkeur" value="<?php if(isset($_POST['wanneerSubmit'])) {echo $_POST['vertrek'] . " - " . $_POST['terugkomst'];} elseif(isset($_POST['wanneer'])) {echo $_POST['wanneer'];} else {echo "";} ?>">
                        <h4 class="hoeveelTekst">Met hoeveel?</h4>
                        <input <?php if(isset($_POST['hoeveel'])){echo "value='" . $_POST['hoeveel'] . "'";} ?> name="hoeveel" type="number" class="form-input hoeveel inputForm" placeholder="Aantal personen">
                        <input type="submit" class="boekenSubmit" value="Zoeken">
                    </form>
                    <div class='innerForm'>
                        <form class="formulier2" action="boeken-resultaat.php" method="post">
                            <div>
                                <h4>Vertrek</h4>
                                <h4>Terugkomst</h4>
                            </div>
                            <div>
                                <input class="inputForm" name="vertrek" type="date">
                                <input class="inputForm" name="terugkomst" type="date">
                            </div>
                            <div class="sumbitDiv">
                                <input name="wanneerSubmit" type="submit" class="submit" value="Opslaan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="vakanties">
                <?php include("../includes/cruises.php"); ?>
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