<!DOCTYPE html>
<html lang="en">
<head>
    <h1>Calculator Output</h1>
</head>
<main>

<?php

require_once "Calculator.php";

$calculator = new Calculator();
$calcMessage = "The calculation is ";
$answerMessage = ". The answer is ";

try {
  
    $result = $calculator->calculate("*", 10, 2);
    echo $calcMessage . "10 * 2". $answerMessage . $result . "<br>";

    $result = $calculator->calculate("*", 4.56, 2);
    echo $calcMessage . "4.56 * 2". $answerMessage . $result . "<br>";

    $result = $calculator->calculate("/", 10, 2);
    echo $calcMessage . "10 / 2". $answerMessage . $result . "<br>";

    $result = $calculator->calculate("/", 10, 3);
    echo $calcMessage . "10 / 3". $answerMessage . $result . "<br>";

    $result = $calculator->calculate("/", 10, 0);
    echo $calcMessage . "10 / 0". $answerMessage . $result . "<br>";

    $result = $calculator->calculate("/", 0, 10);
    echo $calcMessage . "10 / 2". $answerMessage . $result . "<br>";

    $result = $calculator->calculate("-", 10, 2);
    echo $calcMessage . "10 - 2". $answerMessage . $result . "<br>";

    $result = $calculator->calculate("-", 10, 20);
    echo $calcMessage . "10 - 20". $answerMessage . $result . "<br>";

    $result = $calculator->calculate("+", 10.5, 0);
    echo $calcMessage . "10.5 + 0". $answerMessage . $result . "<br>";

    $result = $calculator->calculate("*", 10);
    echo $calcMessage . "* 10". $answerMessage . $result . "<br>";

    $result = $calculator->calculate("+", a, 10);
    echo $calcMessage . "a + 10". $answerMessage . $result . "<br>";

    $result = $calculator->calculate("+", 10, a);
    echo $calcMessage . "10 / 2". $answerMessage . $result . "<br>";

    $result = $calculator->calculate(10);
    echo $calcMessage . "10". $answerMessage . $result . "<br>";

    $result = $calculator->calculate("/", 10, 0);
    echo "Cannot divide by 0<br>";
} catch (InvalidArgumentException $e) {
 
    echo "Error: " . $e->getMessage() . "<br>";
}

?>
</main>