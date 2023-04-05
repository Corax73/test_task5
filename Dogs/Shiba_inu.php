<?php

namespace Test\Dogs;

class Shiba_inu extends Dog
{
    
    public int $DogId;
    
    public string $dogBreed = 'shiba_inu';
    
    function __construct() {
        
        $this -> DogId = parent::$id++;
    
    }
    
    public function speak()
    {
        
        return print 'Woof! Woof!';
    
    }

    public function hunt()
    {
        
        return print 'The dog caught your bear';
    
    }

}
