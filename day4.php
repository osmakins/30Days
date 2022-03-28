<?php
class Person{
    public $age;
   public function __construct($initialAge){
          // Add some more code to run some checks on initialAge
          if($initialAge > 0){
              $this->age = $initialAge;              
          }else{
              $this->age = 0;
              print "Age is not valid, setting age to 0. \n";
          }
    }                                                                                                                                                                                                                                
   public  function amIOld(){
    // Do some computations in here and print out the correct statement to the console 
        switch($this->age){
            case($this->age >0 && $this->age < 13):
                print "You are young. \n";
                break;
            case($this->age >= 13 && $this->age < 18):
                print "You are a teenager. \n";
                break;
            case($this->age >= 18):
                print "You are old. \n";
                break;
            default:
                print "Enter a valid age!";
                break;           
        }
    }
   public  function yearPasses(){
          // Increment the age of the person in here
        $this->age++;
    }
   
      
}

