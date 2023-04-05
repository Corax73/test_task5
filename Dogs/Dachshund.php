<?php

namespace Test\Dogs;

class Dachshund extends Dog
{
    
    public int $DogId;
    
    public string $dogBreed = 'dachshund';
    
    function __construct() {
        
        $this -> DogId = parent::$id++;
    
    }
    
    public function speak()
    {
        
        return print 'Woof! Woof!';
    
    }

    public function hunt()
    {
        
        return print 'The dog caught your fox';
    
    }

}
