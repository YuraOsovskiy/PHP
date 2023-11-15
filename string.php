//1
<?php
function removeSpaces($inputString) {
    $resultString = str_replace(' ', '', $inputString);
    return $resultString;
}

//2
function repeatString($n, $s) {
    $resultString = str_repeat($s, $n);
    return $resultString;
}

//3
function greetName($name) {
    $capitalizedName = ucfirst(strtolower($name));
    $greeting = "Hello " . $capitalizedName . "!";
    return $greeting;

  //4
  
  
