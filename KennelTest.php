<?php

use PHPUnit\Framework\TestCase;

use Test\Kennel\Kennel;
 
class KennelTest extends TestCase
{

    private $kennel;
 
    protected function setUp(): void
    {

        $this -> kennel = new Kennel();

    }
 
    protected function tearDown(): void
    {

        $this -> kennel = NULL;

    }

    public function testAddDog(): void
    {

        $input = 'dachshund';
        
        $this -> kennel -> addDog($input);

        $this -> kennel -> Dogs[0] -> dogBreed;

        $this -> assertEquals($input,  $this -> kennel -> Dogs[0] -> dogBreed);

    }

}
