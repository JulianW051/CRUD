<?php
$page = "boeken";
include("../includes/header.php")
?>
<main>
    <div class="boeken">
        <div class="column">
            <div class="boekingFilter">
                <h2>Boek nu je droomvakantie!</h2>
                <form action="">
                    <h4>VakantieType</h4>
                    <select id="vakantieType">
                        <option value="C">Cruise</option>
                        <option value="CH">Cruise + Hotel</option>
                        <option value="CV">Cruise + vlucht</option>
                        <option value="CVH" selected>Cruise + vlucht + hotel</option>
                    </select>
                    <h4>Vaargebied</h4>
                    <select id="vaargebied">
                        <option value="NE">Noord Europa</option>
                        <option value="OE">Oost Europa</option>
                        <option value="WE">West Europa</option>
                        <option value="MZ" selected>Middelandse zee</option>
                    </select>
                    <h4>Wanneer?</h4>
                    <input class="wanneer" readonly="readonly" name="wanneer" type="text" class="form-input" placeholder="Geen voorkeur" value="<?php if(isset($_POST['wanneerSubmit'])) {echo $_POST['vertrek'] . " - " . $_POST['terugkomst'];} else {echo "";} ?>">
                    <h4>Met hoeveel?</h4>
                    <input name="hoeveel" type="number" class="form-input" placeholder="Aantal personen">
                    <input type="submit" class="submit" value="Zoeken">
                </form>
                <div class='innerForm'>
                    <form action="boeken.php" method="post">
                        <div>
                            <h4>Vertrek</h4>
                            <h4>Terugkomst</h4>
                        </div>
                        <div>
                            <input name="vertrek" type="date">
                            <input name="terugkomst" type="date">
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