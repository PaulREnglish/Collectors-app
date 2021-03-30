<?php
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
        Collection of Old School FPS weapons
    </h1>


    <h2>
        Collection Contents
    </h2>

    <list>
        <?php
            foreach($weaponsData as $weapon) {
                echo '<li>' . $weapon['name'] . '</li>';
            }



        ?>
    </list>





</body>


</html>



