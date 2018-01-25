<?php

$string = 'Hello, world!';

/*
 * Using the native function.
 */

$newString = strrev($string);

echo $newString . "\n";

/*
 * Using an array.
 */

$newString = implode('', array_reverse(str_split($string)));

echo $newString . "\n";

/*
 * Using a loop.
 */

$newString = '';

for($i = strlen($string) - 1; $i >= 0; $i--)
{
    $newString .= $string[$i];
}

echo $newString . "\n";

/*
 * Using the replacement of values.
 */

$newString = $string;

$stringLength = strlen($string) - 1;

$tempVar = '';

for($i = 0; $i < ($stringLength / 2); $i++)
{
    $tempVar = $newString[$i];

    $newString[$i] = $newString[$stringLength - $i];

    $newString[$stringLength - $i] = $tempVar;
}

echo $newString . "\n";