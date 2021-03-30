<?php
require_once'../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessValidateWeaponName()
    {
        $expected = true;
        $input = ['name' => 'Firestorm', 'damage' => 10];
        $case = validateWeaponName($input);
        $this->assertEquals($expected,$case);
    }

    public function testMalformedValidateWeaponName()
    {
        $input = 'name';
        $this->expectException(TypeError::class);
        validateWeaponName($input);
    }

    public function testSuccessValidateWeaponData()
    {
        $expected = true;
        $input = [[
            'name' => 'Firestorm',
            'damage_per_second' => '5',
            'rate_of_fire' => '5',
            'ammo_consumption' => '4',
            'ammo_efficiency' =>  '2',
            'default_weapon_number' => '3',
            'image_url' => 'some kind of url'
            ]];
        $case = validateWeaponData($input);
        $this->assertEquals($expected,$case);
    }
    public function testSuccess2ValidateWeaponData()
    {
        $expected = false;
        $input = [[
            'name' => 'Firestorm',
            'damage_per_second' => 5,
            'rate_of_fire' => '5',
            'ammo_consumption' => 4,
            'ammo_efficiency' =>  '2',
            'default_weapon_number' => 3,
            'image_url' => 'some kind of url'
        ]];
        $case = validateWeaponData($input);
        $this->assertEquals($expected,$case);
    }

    public function testMalformedValidateWeaponData()
    {
        $input = 3;
        $this->expectException(TypeError::class);
        validateWeaponData($input);
    }

    public function testSuccessDisplayWeaponName()
    {
        $expected = '<li>Firestorm</li>';
        $input = ['name' => 'Firestorm', 'damage' => 10];
        $case = DisplayWeaponName($input);
        $this->assertEquals($expected,$case);
    }

    public function testMalformedDisplayWeaponName()
    {
        $input = 'name = Firestorm';
        $this->expectException(TypeError::class);
        DisplayWeaponName($input);
    }

    public function testSuccessDisplayWeaponNames()
    {
        $expected = "<li>Firestorm</li><li>Timon's Axe</li>";
        $input = [['name' => 'Firestorm', 'damage' => 10],['name' => "Timon's Axe", 'damage' => 20]];
        $case = DisplayWeaponNames($input);
        $this->assertEquals($expected,$case);
    }

    public function testFailureDisplayWeaponNames()
    {
        $expected = '';
        $input = [['damage' => 10]];
        $case = DisplayWeaponNames($input);
        $this->assertEquals($expected,$case);
    }

    public function testMalformedDisplayWeaponNames()
    {
        $input = 'Firestorm';
        $this->expectException(TypeError::class);
        displayWeaponNames($input);
    }
}




//input has to be array of arrays, array of non-arrays would be malformed or failure?






