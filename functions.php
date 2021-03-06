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
       `rate_of_fire`, `ammo_consumption`, `ammo_efficiency`, 
       `default_weapon_number`, `image_url` FROM `weapons`;");
    $query->execute();

    return $query->fetchAll();
}

/**
 * Validates the weapon data and returns true if the weapon data has the expected format
 *
 * @param array $weaponData the weapon data to validate
 * @return bool returns true if the weapon data has the expected format
 */
function validateWeaponData(array $weaponData) : bool 
{
    foreach ($weaponData as $weaponDatum) {
        if (
            !(
                (
                    array_key_exists('name', $weaponDatum) &&
                    array_key_exists('damage_per_second', $weaponDatum) &&
                    array_key_exists('rate_of_fire', $weaponDatum) &&
                    array_key_exists('ammo_consumption', $weaponDatum) &&
                    array_key_exists('ammo_efficiency', $weaponDatum) &&
                    array_key_exists('default_weapon_number', $weaponDatum) &&
                    array_key_exists('image_url', $weaponDatum)
                )
            &&
                (
                    gettype($weaponDatum['name']) == 'string' &&
                    gettype($weaponDatum['damage_per_second']) == 'string' &&
                    gettype($weaponDatum['rate_of_fire']) == 'string' &&
                    gettype($weaponDatum['ammo_consumption']) == 'string' &&
                    gettype($weaponDatum['ammo_efficiency']) == 'string' &&
                    gettype($weaponDatum['default_weapon_number']) == 'string' &&
                    gettype($weaponDatum['image_url']) == 'string'
                )
            )
        )
        {
            return false;
        }          
    }
    return true;
}

/**
 * Returns the weapon name
 *
 * @param array $weapon the weapon whose name will get returned
 * @return string the name of the weapon
 */
function displayWeaponName(array $weapon) : string
{
    return '<li>' . $weapon['name'] . '</li>';
}

/**
 * Returns a bullet-pointed list of the names of each piece of weapon data.
 *
 * @param array $data the data that will get returned.  This data must have a 'name' key.
 * @return string returns the bullet-pointed list of data names.
 */
function displayWeaponNames(array $data) : string
{
    $result = '';
    foreach($data as $datum)
    {
            if(array_key_exists('name',$datum))
            {
                $result .= displayWeaponName($datum);
            }
    }
    return $result;
}

/**
 * Outputs all of the weapon stats in a nice list
 *
 * @param $weapon //the weapons to list the stats of
 * @return string  the stats of the weapon
 */
function displayWeaponDatum(array $weapon) : string
{
    $result = '';
    $result .= '<h3>' . $weapon['name'] .'</h3>';
    $result .= '<ul><li>Damage per second rating: ' . $weapon['damage_per_second'] . '</li>';
    $result .= '<li>Rate of fire rating: ' . $weapon['rate_of_fire'] . '</li>';
    $result .= '<li>How much ammo each shot consumes: ' . $weapon['ammo_consumption'] . '</li>';
    $result .= '<li>Ammo efficiency rating: ' . $weapon['ammo_efficiency'] . '</li>';
    $result .= '<li>Default weapon selection number: ' . $weapon['default_weapon_number'] . '</li></ul>';
    $result .= '<div class="imageContainer"><img src="' . $weapon['image_url'] . '"/></div>';
    return $result;
}


/**
 * displays the alls the stats of all the weapons in the database
 *
 * @param array $weaponData  the database of the weapons and their stats
 * @return string returns a string that contains all of the weapons and their stats
 */
function displayWeaponData(array $weaponData) : string
{
    $result = '';
    if(validateWeaponData($weaponData))
    {
        foreach($weaponData as $weapon)
        {
            $result .= displayWeaponDatum($weapon);
        }
    }

    return $result;
}
