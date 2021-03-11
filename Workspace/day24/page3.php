<?php

print("<h1>Data types demo</h1>");

// integer
$num = 100;
print("num = $num, type = " . gettype($num));

print("<br>");

// double
$salary = 5.6;
print("salary = $salary, type = " . gettype($salary));

print("<br>");

// string
$firstName = "steve";
print("first name = $firstName, type = " . gettype($firstName));

print("<br>");

$lastName = 'jobs';
print("last name = $lastName, type = " . gettype($lastName));

print("<br>");

// boolean
$canVote = true;
print("canVote = $canVote, type = " . gettype($canVote));

print("<br>");

// NULL
$myVar = NULL;
print("myVar = $myVar, type = " . gettype($myVar));

?>