<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webdesign met HTML5: examen OHO - 20 maart 2020</title>
</head>
<body>
<div class="container py-3 bg-white vh-100">
    <header>
        <h1>Webdesign met HTML5: Examen OHO - 20 maart 2020
        </h1>
        <hr>
    </header>

    <h2>PHP-verwerking Bootstrap formulier</h2>
    <p>Je vulde volgende gegevens in: </p>
    <ul>
        <?php
        if (isset($_POST["mail"]) && $_POST["mail"] != "") {
            echo "<li> Email: " . $_POST["mail"] . "</li>\n";
        } else {
            echo "<li> Email werd niet ingevuld </li>\n";
        }

        if (isset($_POST["soort"]) && $_POST["soort"] != "") {
            echo "<li> Soort onderwijs: " . $_POST["soort"] . "</li>\n";
        } else {
            echo "<li> Soort onderwijs werd niet ingevuld </li>\n";
        }
        ?>
    </ul>
</div>