<?php
$page = "boeken";
include("../includes/header.php");
include("../includes/session.php");
?>
<main>
    <div class="boeken">
        <div class="column">
            <div class="boekingFilter">
                <h2>Boek nu je droomvakantie!</h2>
                <form class="formulier" action="boeken-resultaat.php" method="post">
                    <h4>VakantieType</h4>
                    <select name="vakantieType" id="vakantieType">
                        <option value="C">Cruise</option>
                        <option value="CH">Cruise + Hotel</option>
                        <option value="CV">Cruise + vlucht</option>
                        <option value="CVH">Cruise + vlucht + hotel</option>
                    </select>
                    <h4>Vaargebied</h4>
                    <select name="vaarGebied" id="vaargebied">
                        <option value="NE">Noord Europa</option>
                        <option value="OE">Oost Europa</option>
                        <option value="WE">West Europa</option>
                        <option value="MZ">Middelandse zee</option>
                    </select>
                    <h4>Wanneer?</h4>
                    <input class="wanneer inputForm" readonly="readonly" name="wanneer" type="text" class="form-input" placeholder="Geen voorkeur" value="<?php if(isset($_POST['wanneerSubmit'])) {echo $_POST['vertrek'] . " - " . $_POST['terugkomst'];} else {echo "";} ?>">
                    <h4 class="hoeveelTekst">Met hoeveel?</h4>
                    <input name="hoeveel" type="number" class="form-input hoeveel inputForm" placeholder="Aantal personen">
                    <input type="submit" name="boekenSubmit" class="boekenSubmit" value="Zoeken">
                </form>
                <div class='innerForm'>
                    <form class="formulier2" action="boeken.php" method="post">
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
            <div class="boekingFilterImg">
                <img src="../images/speed-boat.jpg" alt="Speed boot">
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