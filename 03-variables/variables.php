<?php

$str = "Hello, World!";
$int = 28;
$bool = true;

echo "Greetings! $str";

$x = 5;
$y = 4;
echo $x + $y;

// PHP has three different variable scopes:

//     local
//     global
//     static

// GLOBAL

$x = 5; // global scope
$y = 10; // global scope

function globalScope() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
globalScope();

echo "<p>Variable x outside function is: $x</p>";

# The global keyword is used to access a global variable from within a function.
# To do this, use the global keyword before the variables (inside the function):

function globalKeyword() {
    global $x, $y;
    $y = $x + $y;
}

globalKeyword();
echo $y; // outputs 15

// LOCAL

function localScope() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
localScope();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";

// Static

function staticVariable() {
    static $x = 0;
    echo $x;
    $x++; // increment
}

staticVariable();
staticVariable();
staticVariable();