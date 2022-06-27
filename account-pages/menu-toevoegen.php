<?php
include("../includes/session.php");
$page = "gebruiker";
include("../includes/header.php");
?>
<main>
    <div class="menu-toevoegen">
        <form action="../actions/toevoegen.menuItem.php?dataTable=<?php echo $_GET['dataTable'];?><?php if(isset($_GET['id'])){echo "&id=" . $_GET['id'];} ?>" id="target" method="post">
                <label>Naam</label>
                <input value="<?php if(isset($_GET['naam'])){echo $_GET['naam'];} ?>" type="text" name="naam" required=""/>
                <label>Prijs</label>
                <input value="<?php if(isset($_GET['prijs'])){echo $_GET['prijs'];} ?>" type="number" name="prijs" required=""/>
                <label>Beschrijving</label>
                <input value="<?php if(isset($_GET['beschrijving'])){echo $_GET['beschrijving'];} ?>" type="text" name="beschrijving" required=""/>
                
                <?php
                    if ($_GET['dataTable'] == "cruises" or $_GET['dataTable'] == "hotels") {
                        echo    "<label>Locatie</label>";
                        echo    "<select name='locatie'>";
                        echo        "<option value='NE'"; if (isset($_GET['locatie'])){if ($_GET['locatie'] == "NE"){echo "selected";}} echo ">Noord Europa</option>";
                        echo        "<option value='OE'"; if (isset($_GET['locatie'])){if ($_GET['locatie'] == "OE"){echo "selected";}} echo ">Oost Europa</option>";
                        echo        "<option value='WE'"; if (isset($_GET['locatie'])){if ($_GET['locatie'] == "WE"){echo "selected";}} echo ">West Europa</option>";
                        echo        "<option value='MZ'"; if (isset($_GET['locatie'])){if ($_GET['locatie'] == "MZ"){echo "selected";}} echo ">Middelandse zee</option>";
                        echo    "</select>";
                    }

                    if ($_GET['dataTable'] == "cruises") {
                        echo    "<label>Start periode</label>";
                        echo    "<input value='"; if (isset($_GET['eerstePeriode'])){echo $_GET['eerstePeriode'];} echo "' type='date' name='eerstePeriode' required=''/>";
                        echo    "<label>Eind periode</label>";
                        echo    "<input value='"; if (isset($_GET['eindPeriode'])){echo $_GET['eindPeriode'];} echo "' type='date' name='eindPeriode' required=''/>";
                    }

                ?>
                
                <button class="submit" name="itemSubmit" type="submit">Voeg item toe</button>
        </form>
    </div>
</main> 
<?php
include("../includes/footer.php")
?>
<script src="../js/main.js"></script>
</body>
</html>