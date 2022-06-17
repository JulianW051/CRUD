<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        if ($page === "home") {
            echo "<link rel='stylesheet' href='css/styles.css'>";
        } else {
            echo "<link rel='stylesheet' href='../css/styles.css'>";
        }
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>CRUD</title>
</head>
<body>  
    <header>
        <nav id="nav">
            <div class="navbar">
                <button onclick="toggleMenu()" class="togglemenu">
                    <i class="fa fa-bars"></i>
                </button>
                <img id="logoImg" src="<?php if($page === "home"){echo "images/";} else {echo "../images/";} ?>logo.png" alt="Logo">
                <div class="header-buttons">
                    <?php
                        // Home
                        if ($page === "home") {
                            echo "<a href='index.php'><button class='buttons'>Home</button></a>";
                            echo "<a href='pages/over-ons.php'><button class='buttons'>over ons</button></a>";
                            echo "<a href='pages/Boeken.php'><button class='buttons'>Boeken</button></a>";
                            echo "<a href='pages/contact.php'><button class='buttons'>contact</button></a>";
                            echo "<a href='pages/mijn-account.php'><button class='buttons'>Mijn Account</button></a>";

                        // gebruiker pagina
                        } else if ($page == "gebruiker") {
                            echo "<a href='../index.php'><button class='buttons'>Home</button></a>";
                            echo "<a href='../pages/over-ons.php'><button class='buttons'>over ons</button></a>";
                            echo "<a href='../pages/Boeken.php'><button class='buttons'>Boeken</button></a>";
                            echo "<a href='../pages/contact.php'><button class='buttons'>contact</button></a>";
                            echo "<a href='../pages/mijn-account.php'><button class='buttons'>Mijn Account</button></a>";

                            // Overige pagina's
                        } else {
                            echo "<a href='../index.php'><button class='buttons'>Home</button></a>";
                            echo "<a href='over-ons.php'><button class='buttons'>over ons</button></a>";
                            echo "<a href='Boeken.php'><button class='buttons'>Boeken</button></a>";
                            echo "<a href='contact.php'><button class='buttons'>contact</button></a>";
                            echo "<a href='mijn-account.php'><button class='buttons'>Mijn Account</button></a>";

                        // Boeken 
                        }
                    ?>
                </div>
                <div class="socials">
                    <i class="fa fa-instagram"></i>
                    <i class="fa fa-facebook-square"></i>
                </div>
            </div>
        </nav>
        <?php
            if ($page === "home") {
                echo "<div class='tekstInFotoHome'>";
                echo    "<div><h2>Boek nu snel je onvergetelijke vakantie bij SunCruise!!</h2></div>";
                echo "</div>";
                echo "<div class='slideshow-container'>";

                echo    "<div class='mySlides slide1'></div>";
                echo    "<div class='mySlides slide2'></div>";
                echo    "<div class='mySlides slide3'></div>";

                echo "</div>";
            } else if ($page === "boeken") {
                echo "<div class='headerPicture boeken'>";
                echo    "<div class='fade'></div>";
                echo    "<div class='tekstInFoto'><h2>Boeken</h2></div>";
                echo "</div>";
            } else if ($page === "overOns") {
                echo "<div class='headerPicture overOns'>";
                echo    "<div class='fade'></div>";
                echo    "<div class='tekstInFoto'><h2>Over ons</h2></div>";
                echo "</div>";
            } else if ($page === "contact") {
                echo "<div class='headerPicture contact'>";
                echo    "<div class='fade'></div>";
                echo    "<div class='tekstInFoto'><h2>Contact</h2></div>";
                echo "</div>";
            } else if ($page === "mijnAccount") {
                echo "<div class='headerPicture mijnAccount'>";
                echo    "<div class='fade'></div>";
                echo    "<div class='tekstInFoto'><h2>Mijn account</h2></div>";
                echo "</div>";
            } else if ($page === "gebruiker") {
                echo "<div class='headerPicture mijnAccount'>";
                echo    "<div class='fade'></div>";
                echo    "<div class='tekstInFoto'><h2>Mijn account</h2></div>";
                echo "</div>";
            }
        ?>
    </header>
