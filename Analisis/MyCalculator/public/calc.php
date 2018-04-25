<?php

require '../src/calculator.php';

use calculator\calculato;

$n1 = (float) $_GET['n1'];
$n2 = (float) $_GET['n2'];
$operation = (integer) $_GET ['operation'];

$calc = new calculato();

$calc->setNumber1 ($n1);
$calc->setNumber2 ($n2);


if ($operation === 1) {
    $message = 'The sum between ' . $n1 . ' and ' . $n2 . ' is ' . $calc->sum();
} else if ($operation === 2){
    $message = 'The rest between ' . $n1 . ' and ' . $n2 . ' is ' . $calc->rest();
} else if ($operation === 3){
    $message = 'The mult between ' . $n1 . ' and ' . $n2 . ' is ' . $calc->mult();
} else if ($operation === 4){
    $message = 'The div between ' . $n1 . ' and ' . $n2 . ' is ' . $calc->div();
} else if ($operation === 5 ){
    $message = 'The log the arg ' . $n1 . ' and the base ' . $n2 . ' is ' . $calc->logat();
} else if ($operation === 6) {
    $message = 'The number ' . $n1 . ' squared is ' . $calc->Squared();
} else if ($operation === 7) {
    $message = 'the number ' . $n1 . ' elevated ' . $n2 . ' is ' . $calc->pow();
} else if ($operation === 8) {
    $message = 'the number' . $n1 . ' its squared root is ' . $calc->sqrt();
} else if ($operation === 9) {
    $message = 'the number ' . $n1 . ' the root ' . $n2 . ' is ' . $calc->root();
} else {
    $message = 'Error: the operation is invalid';
} 
echo $message;