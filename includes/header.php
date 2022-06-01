<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        if ($page === "home") {
            echo "<link rel='stylesheet' href='css/styles.css'>";
        } else if ($page === "overOns") {
            echo "<link rel='stylesheet' href='../css/styles.css'>";
        } else if ($page === "contact") {   
            echo "<link rel='stylesheet' href='../css/styles.css'>";
        }
    ?>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>CRUD</title>
</head>
<body>  
    <header>
        <nav>
            <div class="header-buttons">
                <?php
                    // Home
                    if ($page === "home") {
                        echo "<a href='index.php'><button>Home</button></a>";
                        echo "<a href='pages/over-ons.php'><button>over ons</button></a>";
                        echo "<a href='pages/Boeken.php'><button>Boeken</button></a>";
                        echo "<a href='pages/contact.php'><button>contact</button></a>";
                        echo "<a href='pages/mijn-account.php'><button>Mijn Account</button></a>";

                    // Over ons
                    } else if ($page === "overOns") {
                        echo "<a href='../index.php'><button>Home</button></a>";
                        echo "<a href='over-ons.php'><button>over ons</button></a>";
                        echo "<a href='pages/Boeken.php'><button>Boeken</button></a>";
                        echo "<a href='pages/contact.php'><button>contact</button></a>";
                        echo "<a href='pages/mijn-account.php'><button>Mijn Account</button></a>";

                    // Boeken 
                    } else if ($page === "Boeken") {
                        echo "<a href='../index.php'><button>Home</button></a>";
                        echo "<a href='over-ons.php'><button>over ons</button></a>";
                        echo "<a href='boeken.php'><button>Boeken</button></a>";
                        echo "<a href='pages/contact.php'><button>contact</button></a>";
                        echo "<a href='pages/mijn-account.php'><button>Mijn Account</button></a>";

                    // Contact
                    } else if ($page === "contact") {
                        echo "<a href='../index.php'><button>Home</button></a>";
                        echo "<a href='over-ons.php'><button>over ons</button></a>";
                        echo "<a href='pages/boeken.php'><button>Boeken</button></a>";
                        echo "<a href='contact.php'><button>contact</button></a>";
                        echo "<a href='pages/mijn-account.php'><button>Mijn Account</button></a>";

                    // Mijn Account 
                    } else if ($page === "mijnAccount") {
                        echo "<a href='../index.php'><button>Home</button></a>";
                        echo "<a href='over-ons.php'><button>over ons</button></a>";
                        echo "<a href='pages/boeken.php'><button>Boeken</button></a>";
                        echo "<a href='pages/contact.php'><button>contact</button></a>";
                        echo "<a href='pages/mijn-account.php'><button>Mijn Account</button></a>";
                    }
                ?>
            </div>
        </nav>
        
        <div class="slideshow-container">

            <div class="mySlides slide1"></div>

            <div class="mySlides slide2"></div>

            <div class="mySlides slide3"></div>
        </div>

    </header>
