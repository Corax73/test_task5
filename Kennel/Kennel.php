<?php

namespace Test\Kennel;

class Kennel
{

    public array $Dogs;

    public function helpList(): string
    {

        return print 'Greetings!' . "\n" . 'We have several dogs.' . "\n" . 
        'For example pug, dachshund, shiba inu, dachshund, plush labrador and even rubber dachshund.' . "\n" . 
        'You can call one of them, ask them to speak with you or hunt for you.' . "\n";
    }

    public function listen()
    {
        
        $whatDogToCall = readline("What dog to cal? ");

        $whatDogToCall = $this -> checkNamesDogClasses($whatDogToCall);
        
        $this -> addDog($whatDogToCall);

        $whatShouldSheDo = readline("What should she do? ");

        if ($whatShouldSheDo == 'speak') {

            $this -> Dogs[0] -> speak();

        } elseif ($whatShouldSheDo == 'hunt') {

            $this -> Dogs[0] -> hunt();

        } else {
            
            return die('The dog does not understand you');

        }

    }

    protected function checkNamesDogClasses(string $string): string
    {

        return $string = str_replace(' ', '_', $string);
        
    }

    public function getNamesDogClasses(string $string): string
    {

        return $this -> checkNamesDogClasses($string);

    }
    
    public function addDog( string $nameClassDog)
    {
        
        $nameClassDog = 'Test\Dogs\\' . $nameClassDog;
        
        $this -> Dogs[] = $this -> createDog($nameClassDog);
        
        
    }

    protected function createDog( string $nameClassDog): object
    {
        if (class_exists($nameClassDog)) {

            return new $nameClassDog;

        } else {

            return die('No such dog found');

        }
    }
}
