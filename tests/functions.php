<?php
require_once'../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessValidateWeaponName() {
        $expected = true;
        $input = ['name' => 'Firestorm', 'damage' => '10'];
        $case = validateWeaponName($input);
        $this->assertEquals($expected,$case);
    }

}



