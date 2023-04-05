<?php

namespace Test\Dogs;

class Rubber_dachshund extends Dog
{
    
    public int $DogId;
    
    public string $dogBreed = 'rubber_dachshund';
    
    function __construct() {
        
        $this -> DogId = parent::$id++;
    
    }
    
    public function speak()
    {
        
        return print 'Rubber dachshund looks at you and twirls his paw at his temple of the head';
    
    }

    public function hunt()
    {
        
        return print 'Dog pretending not to understand you';
    
    }

}
