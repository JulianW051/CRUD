<?php
include("../includes/session.php");
$page = "gebruiker";
include("../includes/header.php");
include("../includes/connector.php");
$sql = "SELECT Personeel FROM users where id =:id";

$stmt = $connect->prepare($sql);
$stmt->bindParam(':id', $_SESSION['id']);
$stmt->execute();
$result = $stmt->fetchAll();

foreach ($result as $result) {
    if (!$result['Personeel'] ==  "1") {
       header("location: gebruiker.php");
    }
}
?>
<main>
    <div class="personeel">
        <div class="contact-admin blok">
            <h2>Contact</h2>
            <table>
                <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Email</th>
                        <th>Nummer</th>
                        <th>Bericht</th>
                        <th></th>
                    </tr>
                </thead>
                <?php  
                    include("../includes/contact-uitlezen.php")
                ?>
            </table>
        </div>
        <div class="account-admin blok">
            <h2>Accounts</h2>
            <table>
                <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>Email</th>
                        <th>Nummer</th>
                        <th>Personeel</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <?php  
                    include("../includes/account-uitlezen.php")
                ?>
            </table>
        </div>
        <div class="account-admin blok">
            <h2>Boekingen</h2>
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
                    include("../includes/boekingen-uitlezen.php")
                ?>
            </table>
        </div>
        <div class="cruises-admin blok">
            <h2>Cruises</h2>
            <a href="menu-toevoegen.php?dataTable=cruises"><button class="maak-vakantie">Cruise Toevoegen</button></a>
            <table>
                <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>beschrijving</th>
                        <th>prijs</th>
                        <th>locatie</th>
                        <th>start periode</th>
                        <th>eind periode</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <?php  
                    include("../includes/cruises-uitlezen.php")
                ?>
            </table>
        </div>
        <div class="cruises-admin blok">
            <h2>Hotels</h2>
            <a href="menu-toevoegen.php?dataTable=hotels"><button class="maak-vakantie">Hotels Toevoegen</button></a>
            <table>
                <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>beschrijving</th>
                        <th>prijs</th>
                        <th>locatie</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <?php  
                    include("../includes/hotels-uitlezen.php")
                ?>
            </table>
        </div>
        <div class="cruises-admin blok">
            <h2>Vluchten</h2>
            <a href="menu-toevoegen.php?dataTable=vluchten"><button class="maak-vakantie">Vluchten Toevoegen</button></a>
            <table>
                <thead>
                    <tr> 
                        <th>Naam</th>
                        <th>beschrijving</th>
                        <th>prijs</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <?php  
                    include("../includes/vluchten-uitlezen.php")
                ?>
            </table>
        </div>
    </div>
</main> 
<?php
include("../includes/footer.php")
?>
<script src="../js/main.js"></script>
</body>
</html>