<?php
$page = "boeken";
include("../includes/header.php")
?>
<main>
    <div class="boekenResultaat">
        <div class="column">
            <div class="zoekFilter">
                <div class="boekingFilter boekingFilterResultaat">
                    <h2>Zoeken</h2>
                    <form action="boeken-resultaat.php" method="post">
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
                        <h4 class="hoeveelTekst">Met hoeveel?</h4>
                        <input name="hoeveel" type="number" class="form-input hoeveel" placeholder="Aantal personen">
                        <input type="submit" class="boekenSubmit" value="Zoeken">
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
            </div>
            <div class="vakanties">
                <div class="vakantie">
                    <div class="img">
                        <img src="../Images/test1.png" alt="">
                    </div>
                    <div class="info">
                        <div class="titelRij">
                            <h2>Vakantie 1</h2>
                            <button>Boeken</button>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus eum illo reprehenderit, debitis ad omnis architecto temporibus voluptate sit repudiandae doloribus non. Eum a consequuntur nam consequatur laudantium, illum cupiditate?</p>
                        <div class="reviews">
                            <div class="reviewInfo">
                                <h3>Reviews</h3>
                                <i class="fa fa-angle-down"></i>
                            </div>
                            <div class="review">
                                <h4>Pieter Jansen</h4>
                                <p>Ja wat eeen totale kanker vakantie ik kom hier nooit meer terug mijn kinderen zijn verbrand.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vakantie">
                    <div class="img"></div>
                    <div class="info"></div>
                </div>
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