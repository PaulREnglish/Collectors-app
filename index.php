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
         <header>
            <h1>
                Collection of Old School FPS weapons

            </h1>
        </header>
        <main>
            <section>
                <h2>
                    Collection Contents
                </h2>

                <ul>
                    <?= displayWeaponNames($weaponsData)?>
                </ul>
            </section>
           <section>
               <?= displayWeaponData($weaponsData); ?>



           </section>






        </main>
    </body>
</html>



