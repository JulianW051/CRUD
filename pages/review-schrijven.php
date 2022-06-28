<?php
$page = "boeken";
include("../includes/header.php");

if (!isset($_GET['cruiseID'])) {
    header("Location: boeken.php");
}
?>
<main>
    <div class="hotels">
        <div class="menu-toevoegen">
            <form class="formulier" action="../actions/add-review.php?cruiseID=<?php echo $_GET['cruiseID'] ?>&user=<?php echo $_GET['user'] ?>" method="post">
                <h4>Review?</h4>
                <input class="inputForm" name="review" type="text" class="form-input" placeholder="Schrijf hier je review" value="">
                <input type="submit" name="reviewsubmit" class="boekenSubmit" value="Verzend">
            </form>
        </div>
    </div>
</main>
<?php
include("../includes/footer.php")
?>
<script src="../js/main.js"></script>
</body>
</html>