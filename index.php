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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="normalize.css" type="text/css"/>
        <link rel="stylesheet" href="styles.css" type="text/css"/>
    </head>

    <body>
        <div>
             <header>
                <h1>
                    Collection of Old School FPS weapons

                </h1>
            </header>
            <main>
                <div class="contentsTitle">
                    <h2>
                        Collection Contents
                    </h2>
                </div>
                    <ul>
                        <?= displayWeaponNames($weaponsData)?>
                    </ul>

               <section>
                   <?= displayWeaponData($weaponsData); ?>



               </section>






            </main>
        </div>
    </body>
</html>



