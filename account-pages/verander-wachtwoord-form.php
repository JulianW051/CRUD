<?php
include("../includes/session.php");
$page = "gebruiker";
include("../includes/header.php");
?>
<main>
    <div class="menu-toevoegen">
        <form action="../actions/verander-wachtwoord.php?id=<?php echo $_GET['id'] ?>" id="target" method="post">
                <label>Nieuw wachtwoord</label>
                <input type="password" name="password" required=""/>
                <button class="submit" name="passwordSubmit" type="submit">Sla nieuwe wachtwoord op</button>
        </form>
    </div>
</main> 
<?php
include("../includes/footer.php")
?>
<script src="../js/main.js"></script>
</body>
</html>