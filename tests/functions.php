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

    public function testSuccessDisplayWeaponDatum()
    {
        $expected = '<h3>Firestorm</h3><ul><li>Damage per second rating: 5</li><li>Rate of fire rating: 5</li><li>How much ammo each shot consumes: 4</li><li>Ammo efficiency rating: 2</li><li>Default weapon selection number: 3</li></ul><img src="some kind of url"/>';
        $input = [
            'name' => 'Firestorm',
            'damage_per_second' => '5',
            'rate_of_fire' => '5',
            'ammo_consumption' => '4',
            'ammo_efficiency' =>  '2',
            'default_weapon_number' => '3',
            'image_url' => 'some kind of url'
        ];
        $case = displayWeaponDatum($input);
        $this->assertEquals($expected,$case);
    }

    public function testMalformedDisplayWeaponDatum()
    {
        $input = 2;
        $this->expectException(TypeError::class);
        DisplayWeaponDatum($input);
    }

    public function testSuccessDisplayWeaponData()
    {
        $expected = '<h3>Firestorm</h3><ul><li>Damage per second rating: 5</li><li>Rate of fire rating: 5</li><li>How much ammo each shot consumes: 4</li><li>Ammo efficiency rating: 2</li><li>Default weapon selection number: 3</li></ul><img src="some kind of url"/>';
        $input = [[
            'name' => 'Firestorm',
            'damage_per_second' => '5',
            'rate_of_fire' => '5',
            'ammo_consumption' => '4',
            'ammo_efficiency' =>  '2',
            'default_weapon_number' => '3',
            'image_url' => 'some kind of url'
        ]];
        $case = displayWeaponData($input);
        $this->assertEquals($expected,$case);
    }

    public function testFailureDisplayWeaponData()
    {
        $expected = '';
        $input = [[
            'name' => 'Firestorm',
            'damage_per_second' => '5',
            'rate_of_fire' => '5',
            'ammo_consumption' => '4',
            'ammo_efficiency' =>  '2',
            'default_weapon_number' => '3',
        ]];
        $case = displayWeaponData($input);
        $this->assertEquals($expected,$case);
    }

    public function testMalformedDisplayWeaponData()
    {
        $input = 2;
        $this->expectException(TypeError::class);
        DisplayWeaponData($input);
    }

}








