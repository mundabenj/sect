<?php
// PHP Basics
date_default_timezone_set('Africa/Nairobi');
echo "Hello, World!";
print "<br>";

print date("l Y-m-d H:i:s");
print "<br>";
$yob = 2010; // Year of Birth

print $yob;
$lname = "Alex";
$age = date("Y") - $yob;

print "<br>";
print $lname . ' is ' . $age . ' years old.';

print "<br>";

if($age >= 18) {
    print "You are an adult.";
} else {
    print "You are a minor.";
}

print "<br>";
print date("l Y-m-d H:i:s", strtotime("+1 day"));
print "<br>";
print date("l, jS F Y H:i:s", strtotime("+1 day 2 hours 30 minutes"));

print "<br>";

// Using variables in a string
$greeting = "Hello";

$about['name'] = "Alex";
$about['age'] = 23;

$oper = [ 'name' => 'Ann', 'age' => 21 ];

print "My name is {$oper['name']} and I am {$oper['age']} years old.";