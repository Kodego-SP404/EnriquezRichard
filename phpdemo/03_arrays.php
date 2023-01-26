<?php
// ---------------- Arrays -----------------

/* Array Hold multiple values. Each value in an array is called "element" */

// Simple array of numbers
// $numbers=[1,2,3,4,5];
// $fruits = ['apple', 'orange', 'banana'];

// echo $numbers[0];
// var_dump($numbers);
// echo $fruits[1];
// echo $numbers[2] + $numbers[3];

// Associative Arrays
/* 
Associative arraus allows us to ouse named keys to identify values 
*/
// $colors = [
//   1 => 'red',
//   2 => 'green',
//   3 => 'blue',
//   4 => 'yellow',
// ];

// echo $colors[3];

// Strings as keys 
// $hex = [
//   'red' => '#f00',
//   'green' => '#0f0',
//   'blue' => '#00f',
// ];

// echo $hex['red'];
// var_dump($hex);

/*
 Multi-dimensional array are often uset to store data in a table format 
 */

//  Single Person
// $person = [
//   'first_name' => 'Ryan',
//   'last_name' => 'Azur',
//   'email' => 'razur@gmail.com',
// ];

// echo $person['first_name'];

//Multidimensional array
$people = [
  [
  'first_name' => 'Ryan',
  'last_name' => 'Azur',
  'email' => 'razur@gmail.com',
  ],
  [
    'first_name' => 'Juan',
    'last_name' => 'Dela Cruz',
    'email' => 'jdelacruz@gmail.com',
  ],
  [
    'first_name' => 'Maria',
    'last_name' => 'Santos',
    'email' => 'msantos@gmail.com',
  ],
];
// echo $people[2]['last_name'];

// Encode to JSON
// var_dump(json_encode($people));

// Decode to JSON
$jsonobj ='{"first_name":"Ryan","last_name":"Azur","email":"razur@gmail.com"}';
var_dump(json_decode($jsonobj));