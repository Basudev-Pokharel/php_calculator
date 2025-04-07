<?php
$num1 = 5;
$num2 = 5;
$op = '/';
switch ($op) {
    case '+':
        echo $num1 + $num2;
        break;
    case '-':
        echo $num1 - $num2;
        break;
    case '*':
        echo $num1 * $num2;
        break;
    case '/':
        echo $num1 / $num2;
        break;

    default:
        echo "Please use numbers";
}
