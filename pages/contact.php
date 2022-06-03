<?php
$page = "contact";
include("../includes/header.php")
?>
<main>
    <div class="contact">
        <div class="container">
            <div class="contact-info">
                <h3>Suncrouse</h3>
                <div class="contact-detail">
                    <i class="fas fa-phone"></i>
                    <a href="tel:+385 95 9032 127">+385 95 9032 127</a>
                </div>
                <div class="contact-detail">
                    <i class="far fa-envelope"></i>
                    <a href="mailto:info@ivptravel.com">info@ivptravel.com</a>
                </div>
                <div class="contact-detail">
                    <i class="fas fa-home"></i>
                    <span>dr. Franje Tuđmana 913, 21217 Kaštel Štafilić, Croatia</span>
                </div>
            </div>
            <div class="contact-form">
                <form action="">
                    <input name="naam" type="text" class="form-input" placeholder="Naam">
                    <input name="email" type="email" class="form-input" placeholder="Email">
                    <input name="tel" type="tel" class="form-input" placeholder="Telefoon nummer">
                    <textarea name="bericht" placeholder="Jouw bericht" id="" cols="30" rows="10"></textarea>
                    <input type="submit" class="submit" value="Verzenden">
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