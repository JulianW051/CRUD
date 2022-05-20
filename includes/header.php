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
    <div class="header-buttons">
        <?php
            if ($page === "home") {
                echo "<a href='index.php'><button>Home</button></a>";
                echo "<a href='pages/over-ons.php'><button>over ons</button></a>";
                echo "<a href='pages/contact.php'><button>contact</button></a>";
            } else if ($page === "overOns") {
                echo "<a href='../index.php'><button>Home</button></a>";
                echo "<a href='over-ons.php'><button>over ons</button></a>";
                echo "<a href='contact.php'><button>contact</button></a>";
            } else if ($page === "contact") {
                echo "<a href='../index.php'><button>Home</button></a>";
                echo "<a href='over-ons.php'><button>over ons</button></a>";
                echo "<a href='contact.php'><button>contact</button></a>";
            }
        ?>
    </div>
</header>