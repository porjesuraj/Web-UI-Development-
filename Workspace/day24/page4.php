<?php


// parameterless function declaration
function helloWorld() {
    print("inside helloWorld");
}

// function call
// helloWorld();


// parameterized function declaration
function greetUser($userName) {
    print("welcome $userName <br>");
    print("type of userName = " . gettype($userName));
}

// function call
// greetUser("user1");
// greetUser(1234);

function add($p1, $p2) {
    $addition = $p1 + $p2;
    print("addition = $addition");
}

// add(10, 20);
// add(10, "20test");
// add(10, "test20");


function multiply($p1, $p2) {
    $multiplication = $p1 * $p2;
    print("multiplication = $multiplication");
}

// multiply(10, 40);
// multiply(10, "40");
// multiply(10, "tetst");


function myFunction($p1) {
    print("p1 = $p1, type = " . gettype($p1));
}

// myFunction(NULL);
// myFunction(10);
// myFunction(10, 10);


// function with return value
function divide($p1, $p2) {
    $division = $p1 / $p2;
    return $division;
}

// collect the returned value in a $answer variable
$answer = divide(10, 0);
print("division = $answer");

?>