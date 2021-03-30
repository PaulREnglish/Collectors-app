<?php
require_once('dbConnection.php');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

/**
 * Gets the weapon names and their stats from the weapons table in the paul_collection database
 *
 * @param object $db The paul_collections database
 * @return array returns the weapons and their stats
 */
function getWeaponsData(object $db) : array
{
    $query = $db->prepare("SELECT `name`,`damage_per_second`, 
       `rate_of_fire`, `ammo_comsumption`, `ammo_efficiency`, 
       `default_weapon_number`, `image_url` FROM `weapons`;");
    $query->execute();

    return $query->fetchAll();
}

/**
 * Returns a bullet-pointed list of the names of each piece of data.
 *
 * @param array $data the data that will get returned.  This data must have a 'name' key.
 * @return string returns the bullet-pointed list of data names.
 */
function displayListOfData(array $data) : string {
    $result = '';
    foreach($data as $datum) {
            if(!array_key_exists($datum['name'])){

            }
        $result .= '<li>' . $datum['name'] . '</li>';
    }
    return $result;
}






