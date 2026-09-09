<?php

function hello(): void {
    var_dump('Hello');
}

$hi = hello();
var_dump($hi);
hello();
hello();

function helloName($name='Nameless') {
    var_dump("Hello, $name!");
}

helloName('Elina');
helloName('John');

function helloNameAndAge($name, $age) {
    var_dump("Hello, $name! You are $age years old!");
}

helloNameAndAge('Elina', 19);
helloNameAndAge('John', 30);

helloName();

$test = function (){

};

var_dump($test);

$numbers = [1, 2, 3, 4, 5];

$squares = array_map(function ($n) {
    return $n * $n;
}, $numbers);
$squares = array_map(fn($n) => $n * $n, $numbers);
var_dump($squares);


function cube(int $a): int|string {
    if($a < 0) {
        return 'No negative!';
    }
    return $a * $a * $a;
    var_dump('BLAAAAA');
}

var_dump(cube(4));

$answer = cube('asdasd');
$text = "Cube of 5 is $answer!";
echo $text;