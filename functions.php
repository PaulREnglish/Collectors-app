<?php

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
 * Returns true if the weapon has a name, returns false otherwise
 *
 * @param array $weapon the weapon to check if it has a name
 * @return bool returns true if the weapon has a name
 */
function validateWeaponName(array $weapon) : bool {
    return array_key_exists('name',$weapon);
}

/**
 * Returns a bullet-pointed list of the names of each piece of weapon data.
 *
 * @param array $data the data that will get returned.  This data must have a 'name' key.
 * @return string returns the bullet-pointed list of data names.
 */
function displayWeaponNames(array $data) : string {
    $result = '';
    foreach($data as $datum)
    {
            if(validateWeaponName($datum))
            {
                $result .= displayWeaponName($datum);
            }
    }
    return $result;
}

/**
 * Returns the weapon name
 *
 * @param array $weapon the weapon whose name will get returned
 * @return string the name of the weapon
 */
function displayWeaponName(array $weapon) : string {
    return '<li>' . $weapon['name'] . '</li>';
}




