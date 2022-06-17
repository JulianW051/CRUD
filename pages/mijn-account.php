<?php
$page = "mijnAccount";
include("../includes/header.php")
?>
<main>
    <div class="mijn-account">
        <div class="registreer-blok">
            <h3>Registreren</h3>
            <div class="registreer-login-form">
                <form action="../actions/registreren.php" method="post">
                    <input name="naam" type="text" class="form-input" placeholder="Naam">
                    <input name="email" type="email" class="form-input" placeholder="Email">
                    <input name="tel" type="tel" class="form-input" placeholder="Telefoon nummer">
                    <input name="wachtwoord" type="password" class="form-input" placeholder="Wachtwoord">
                    <input type="submit" class="submit" value="Registreren">
                </form>
            </div>
        </div>
        <div class="login-blok">
            <h3>Inloggen</h3>
            <div class="registreer-login-form">
                <form action="">
                    <input name="email" type="email" class="form-input" placeholder="Email">
                    <input name="wachtwoord" type="password" class="form-input" placeholder="Wachtwoord">
                    <input type="submit" class="submit" value="Inloggen">
                </form>
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