<?php
include("../includes/session.php");
$page = "gebruiker";
include("../includes/header.php")
?>
<main>
    <div class="gebruiker">
        <div class="buttons">
            <a href="../pages/boeken.php"><button>Voeg boeking toe</button></a>
            <a href="../actions/uitloggen.php"><button>Uitloggen</button></a>
        </div>
    </div>
    <div class="panneel">
        <div class="column">
            <div class="boekingen">
                <h2>Uw Boekingen</h2>
                <div class="blok">
                <table>
                    <thead>
                        <tr> 
                            <th>User</th>
                            <th>Cruise</th>
                            <th>Vlucht</th>
                            <th>Hotel</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php  
                        include("../includes/boekingen-gebruiker-uitlezen.php")
                    ?>
                </table>
        </div>
            </div>
            <div class="gegevens">
                <h2>Gegevens</h2>
                <form action="../actions/change-gegevens.php?id=<?php echo $_SESSION['id'];?>" method="post">
                    <label>Username</label>
                    <input value="<?php echo $_SESSION['username'] ?>" type="text" name="username" required=""/>
                    <label>Telefoonnummer</label>
                    <input value="<?php echo $_SESSION['tel'] ?>" type="number" name="tel" required=""/>
                    <label>Email</label>
                    <input value="<?php echo $_SESSION['email'] ?>" type="text" name="email" required=""/>
                    <button class="submit" name="itemSubmit" type="submit">Update gegevens</button>                    </div>
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