<?php
require_once('dbConnection.php');
require_once('functions.php');

$weaponsData = getWeaponsData($db);

var_dump($weaponsData);

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
            <section>
                <h2>
                    Collection Contents
                </h2>

                <list>
                    <?= displayWeaponNames($weaponsData)?>
                </list>
            </section>
           <section>
               <?= displayWeaponData($weaponsData); ?>



           </section>






        </main>
    </body>
</html>



