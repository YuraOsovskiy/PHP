<?php

class President {
    // Public property
    public $name = "Barack Obama";

    // Public method
    public function greet($name) {
        return "Hello $name, my name is $this->name, nice to meet you!";
    }
}

// Create an instance of the President class
$us_president = new President();

// Store the name of the $us_president in $president_name
$president_name = $us_president->name;

// Call the greet method of $us_president with the argument "Donald"
$greetings_from_president = $us_president->greet("Donald");
