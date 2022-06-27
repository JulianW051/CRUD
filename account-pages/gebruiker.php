<?php
include("../includes/session.php");
$page = "gebruiker";
include("../includes/header.php")
?>
<main>
    <div class="gebruiker">
        <div class="buttons">
            <a href=""><button>Persoonlijke gegevens</button></a>
            <a href="../pages/boeken.php"><button>Voeg boeking toe</button></a>
            <a href="../actions/uitloggen.php"><button>Uitloggen</button></a>
        </div>
    </div>
</main> 
<?php
include("../includes/footer.php")
?>
<script src="../js/main.js"></script>
</body>
</html>