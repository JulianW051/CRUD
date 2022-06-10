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
                    <input name="vakantieType" type="text" class="form-input" placeholder="Naam">
                    <h4>Bestemming</h4>
                    <input name="bestemming" type="email" class="form-input" placeholder="Email">
                    <h4>Wanneer?</h4>
                    <input name="wanneer" type="date" class="form-input" placeholder="Telefoon nummer">
                    <h4>Wie?</h4>
                    <input name="wie" type="number" class="form-input" placeholder=" ">
                    <input type="submit" class="submit" value="Verzenden">
                </form>
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