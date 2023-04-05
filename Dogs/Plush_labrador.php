<?php

namespace Test\Dogs;

class Plush_labrador extends Dog
{
    
    public int $DogId;
    
    public string $dogBreed = 'plush_labrador';
    
    function __construct() {
        
        $this -> DogId = parent::$id++;
    
    }
    
    public function speak()
    {
        
        return print 'Plush labrador looks at you and twirls his paw at his temple of the head';
    
    }

    public function hunt()
    {
        
        return print 'Dog pretending not to understand you';
    
    }

}
