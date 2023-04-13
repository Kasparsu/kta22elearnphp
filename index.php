<?php
// This is line comment
/*
This is block comment

*/
const HELLO_WORLD = 1;
$num = 1;// int
$bar = 4.1;//float
$num = 'hello'; // string
$num = HELLO_WORLD; // constant 
$num = true; // boolean
$num = false;
$num = [1,2,3,4,5]; //array
$num = 'world';
echo 'hello \n $num';
$num = [
    'red' => 1,
    'blue' => 2,
    'green' => 3
];
$num = [
    'red' => 1,
    3.2 => 2,
    3,
    200 => 4,
    5,
    'foo' => 'bar'
];
$num = 1;
$num = 1 + 1;
$num = 1 - 1;
$num = 1 * 1;
$num = 1 / 1;
$num = 4 % 2;
$num += 1;
$num -= 1;
$num *= 1;
$num /= 1;
$num %= 1;
$num++;
$num--;
$num = 2;
$num**=2;
$num = true && false;
$num = true || false;
$num = 10 > 1;
$num = 10 == 10;
$num = '10' == 10;
$num = '10' === 10;
$num = '10' !== 10;
$num = '10' != 10;
$num = 'hello' . 'world';
$num .= 'World';
var_dump($num);
