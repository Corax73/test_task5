<?php

namespace Test\Dogs;

abstract class Dog
{
    
    static $id = 0;
    
    public int $DogId; 
    
    public abstract function speak();

    public abstract function hunt();
    
}
