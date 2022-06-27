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
    </div>
</main> 
<?php
include("../includes/footer.php")
?>
<script src="../js/main.js"></script>
</body>
</html>