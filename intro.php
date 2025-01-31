<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPhP_Lesssons</title>
</head>

<body>

<?php /* echo "<p> This text is embedded with html and php </p>" */?>
<?php /*echo "<p> This text is not bold </p><br>"*/?>
<?php /*echo "<h1> This text is bold </h1>"*/?>


<?php

/*
//Todays study is about variables and types
$var=1;
$var2=6.883;

echo $var."<br>";
//ECHO '<br>';
ECHO $var2;
echo "<br>";
var_dump($var2);
echo "<br>";
//Case sensitivity in php
*/

?>

<?php 
//Case sensitivity Cont...
/*
echo "this is case sensitive in php"."<br>";
ECHO "this is case sensitive in php with ECHO"."<br>";
echo date("Y/m/d")."<br>";
echo Date("Y.m.d")."<br>";
?>
<?php
//PHP Echo and print statement

echo "hellow world"."<br>";
echo ("hellow world");
//echo not a function but a statement like if else, etc
//echo does not return a value
//faster than a print statement
//can't pass multiple argument to print statement
*/
?>

<?php
//The die and exit function
/*
Die - used to print and exit from current php script
Exit - used to get the output message to terminate a script
*/
/*
$website = "Https://www.google.com";
fopen($website,"r")
    or die("unable to connect to the $website");

    $website = "Https://www.google.com";
    fopen($website,"r")
        or exit("unable to connect to the $website");
*/

?>

<?php
//basic data types in php
/*
$interger=123;
var_dump($interger);

$float=123.123;
var_dump($float);

$string="this is a string";
var_dump($string);

$bool=false;
var_dump($bool);


*/

#constant data types in php
/*
define('PI',3.142);//identifier for defining constants
echo PI ."<br>";
echo "This is a circle of radius ",2*PI*5; 
*/
?>

<?php
/*
define('ABC','this is abc');
echo ABC;
*/
?>
<?php
/*
const XYZ='this is another constant'.'<br>';
echo XYZ;
define('G',3.7*10^1);
echo "The value of gravitational force is: ",G.'<br>';
var_dump(G);
*/
?>

<?php
//Aithmetic Operators
/*
$x=20;
$y=50;

echo($x-$y).'<br>';
echo($x+$y).'<br>';
echo($x*$y).'<br>';
echo($x/$y).'<br>';
echo($x%$y).'<br>';
*/
?>

<?php
//Assignment Operators
/*
$a = 50;
echo ($a."<br>");
$a=50;
$a+=20; 
echo ($a."<br>");
$a = 10;
$a*=10;
echo ($a);

*/
?>

<?php
//Comparison Operator
/*
$x = 15;
$y = 10;
$a = "15";
*/
/*== equal to 
=== identity
!= not equal to
*/
/*
var_dump($x==$y)."<br>";//returns true if x is equal to y
var_dump($x===$y)."<br>";//returns true if x is equal and identical to y
var_dump($x!=$y)."<br>"; //returns true if x is not equal to a
var_dump($x<>$a)."<br>";//returns true if x is not equal to a
var_dump($x!==$a)."<br>";//returns true if x is not equal to a or not of the same type
var_dump($x<=$a)."<br>";
var_dump($x>=$a)."<br>";
var_dump($x<$a)."<br>";
var_dump($x<=>$y)."<br>";//retuns (-1) if x is less than y, 0 if x is equal to y & 1 if x is greater than y
*/
?>

<?php
//Increment and Decrement Operator in PhP
//pre increment - first increase and assign
$x=5;
$y = ++$x;

echo ($x."<br>");
echo ($y."<br>");

//post increment - first assign and increase
$a=5;
$b=$a++;

echo ($a."<br>");
echo ($b."<br>");

//Pre decrement - reduce before assign
$c=5;
$d=--$c;

echo ($c."<br>");
echo ($d);
?>



</body>
</html>