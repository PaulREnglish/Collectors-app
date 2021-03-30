<?php
require_once('dbConnection.php');
require_once('functions.php');

$weaponsData = getWeaponsData($db);



?>



<!DOCTYPE html>

<html lang="en-GB">
    <head>
        <title>
            My Collection of Old School FPS weapons
        </title>
    </head>

    <body>
        <h1>
            <header>
                Collection of Old School FPS weapons
            </header>
        </h1>

        <main>
            <h2>
                Collection Contents
            </h2>

            <list>
                <?= displayWeaponNames($weaponsData)?>
            </list>

        </main>
    </body>
</html>



