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
 * Validates the weapon data and returns true if the weapon data has the expected format
 *
 * @param array $weaponData the weapon data to validate
 * @return bool returns true if the weapon data has the expected format
 */
function validateWeaponData(array $weaponData) : bool {

    foreach ($weaponData as $weaponDatum) {

        if (!(gettype($weaponDatum['name']) == 'string' &&
            gettype($weaponDatum['damage_per_second']) == 'string' &&
            gettype($weaponDatum['rate_of_fire']) == 'string' &&
            gettype($weaponDatum['ammo_comsumption']) == 'string' &&
            gettype($weaponDatum['ammo_efficiency']) == 'string' &&
            gettype($weaponDatum['default_weapon_number']) == 'string' &&
            gettype($weaponDatum['image_url']) == 'string')
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
            if(validateWeaponName($datum))
            {
                $result .= displayWeaponName($datum);
            }
    }
    return $result;
}

function displayWeaponDatum($weapon) : string
{
    $result = '';
    $result .= '<h3>' . $weapon['name'] .'</h3>';
    $result .= '<ul><li>Damage per second rating: ' . $weapon['damage_per_second'] . '</li>';
    $result .= '<li>Rate of fire rating: ' . $weapon['rate_of_fire'] . '</li>';
    $result .= '<li>How much ammo each shot consumes: ' . $weapon['ammo_comsumption'] . '</li>';
    $result .= '<li>Ammo efficiency rating: ' . $weapon['ammo_efficiency'] . '</li>';
    $result .= '<li>Default weapon selection number: ' . $weapon['default_weapon_number'] . '</li></ul>';
    $result .= '<img src="' . $weapon['image_url'] . '"/>';
    return $result;
}




function displayWeaponData(array $weaponData) : string
{
    $result = '';
    echo 'hm';
    echo validateWeaponData($weaponData);
    if(validateWeaponData($weaponData))
    {
        foreach($weaponData as $weapon)
        {
            $result .= displayWeaponDatum($weapon);
        }
    }

    return $result;
}







