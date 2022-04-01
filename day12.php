<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}

class Student extends person {
    private $testScores;
  
    /*	
    *   Class Constructor
    *   
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    // Write your constructor here
    public function __construct($firstName, $lastName, $idNumber, $scores){
        parent::__construct($firstName, $lastName, $id);
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->id = $idNumber;
        $this->scores = $scores;
    }

    /*	
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    // Write your function here
    public function calculate() {
        $mean_score = array_sum($this->scores)/count($this->scores);
        switch($mean_score){
            case($mean_score > 100):
                return "Out of bounds!";
                break;
            case($mean_score >= 90):
                return "O";
                break;
            case($mean_score >= 80):
                return "E";
                break;
            case($mean_score >= 70):
                return "A";
                break;
            case($mean_score >= 55):
                return "P";
                break;
            case($mean_score >= 40):
                return "D";
                break;
            case($mean_score < 40):
                return "T";
                break;
            default:
                return "Please enter a valid score!";
        }
    }
}

