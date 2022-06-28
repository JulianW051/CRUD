<?php
require_once("../includes/connector.php");
$sql = "SELECT * FROM users";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
                echo    "<tbody>";
                echo        "<tr>";
                echo            "<td>" . $result['username'] . "</td>";
                echo            "<td>" . $result['email'] . "</td>";
                echo            "<td>" . $result['tel'] . "</td>";
                echo            "<td>" . $result['Personeel'] . "</td>";
                echo            "<td><a href='../actions/add-personeel.php?id=" . $result['id'] . "'><button class='maak-personeel'>Maak personeel</button></a></td>";
                echo            "<td><a href='../actions/rem-personeel.php?id=" . $result['id'] . "'><button class='verwijder-personeel'>Verwijder personeel</button></a></td>";
                echo            "<td><a href='../account-pages/verander-wachtwoord-form.php?id=" . $result['id'] . "'><button class='verander-wachtwoord'>Verander wachtwoord</button></a></td>";
                echo        "</tr>";   
                echo    "</tbody>";
    }