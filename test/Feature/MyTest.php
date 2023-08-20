<?php


namespace App\MyPackage\Test;

use Orchestra\Testbench\TestCase;
use App\MyPackage\Main;

class MyTest extends TestCase{

    /** @test */
    public function firts_test(){
        $this->assertTrue(true);
    }

    /** @test */
    public function second_test(){
        dump(Main::sayhello());
        $this->assertTrue(true);
    }
}