<?php

// PHP Snack 1:
// Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55 - 60

$matches = [
    [
        "home_team" => "squadra A",
        "visiting_team" => "squadra B",
        "home_score" => 100,
        "visiting_score" => 76
    ],
    [
        "home_team" => "squadra C",
        "visiting_team" => "squadra D",
        "home_score" => 55,
        "visiting_score" => 71
    ],
    [
        "home_team" => "squadra D",
        "visiting_team" => "squadra E",
        "home_score" => 120,
        "visiting_score" => 96
    ],
    [
        "home_team" => "squadra F",
        "visiting_team" => "squadra G",
        "home_score" => 65,
        "visiting_score" => 76
    ],
];

// var_dump($matches);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP Snack 1</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Partite di campionato del 16/12/2020</h1>
        <h2>
            Numero partite: <?php echo count($matches); ?>
        </h2>
        <ul>
        <?php
            // per ogni match, stampo un <li> con i dettagli della partita, seguendo lo schema:
            // squadra casa - squadra ospite | punti squadra casa - punti squadra ospite
            for ($i = 0; $i < count($matches); $i++) { ?>
                <li class="match">
                    <?php
                    echo $matches[$i]["home_team"] . " - " . $matches[$i]["visiting_team"] . " | " . $matches[$i]["home_score"] . " - " . $matches[$i]["visiting_score"];
                    ?>
                </li>
                <?php
            }
        ?>
        </ul>
    </body>
</html>
