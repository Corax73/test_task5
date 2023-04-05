<?php

namespace Test\Dogs;

use Test\Dogs\Dog;

class Pug extends Dog
{
    
    public int $DogId;

    public string $dogBreed = 'pug';
    
    function __construct()
    {
        
        $this -> DogId = parent::$id++;
    
    }
    
    public function speak(): string
    {
        
        return print 'Woof! Woof!';
    
    }

    public function hunt()
    {
        
        return print 'The dog went to bed';
    
    }

}
