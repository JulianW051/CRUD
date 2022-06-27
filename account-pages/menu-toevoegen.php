<?php
include("../includes/session.php");
$page = "gebruiker";
include("../includes/header.php");
?>
<main>
    <div class="menu-toevoegen">
        <form action="../actions/toevoegen.menuItem.php<?php if(isset($_GET['id'])){echo "?id=" . $_GET['id'];} ?>" id="target" method="post">
                <label>Naam</label>
                <input value="<?php if(isset($_GET['naam'])){echo $_GET['naam'];} ?>" type="text" name="naam" required=""/>
                <label>Prijs</label>
                <input value="<?php if(isset($_GET['prijs'])){echo $_GET['prijs'];} ?>" type="prijs" name="prijs" required=""/>
                <label>Beschrijving</label>
                <input value="<?php if(isset($_GET['beschrijving'])){echo $_GET['beschrijving'];} ?>" type="text" name="beschrijving" required=""/>
                <label>Locatie</label>
                <input value="<?php if(isset($_GET['locatie'])){echo $_GET['locatie'];} ?>" type="text" name="locatie" required=""/>
                <label>Start periode</label>
                <input value="<?php if(isset($_GET['eerstePeriode'])){echo $_GET['eerstePeriode'];} ?>" type="text" name="eerstePeriode" required=""/>
                <label>Eind periode</label>
                <input value="<?php if(isset($_GET['eindPeriode'])){echo $_GET['eindPeriode'];} ?>" type="text" name="eindPeriode" required=""/>
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