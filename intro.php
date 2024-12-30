<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPhP_Lesssons</title>
</head>

<body>

<?php //echo "<p> This text is embedded with html and php </p>" ?>
<?php //echo "<p> This text is is not bold </p>" ?>
<?php //echo "<h1> This text is another one with an h1 tag </h1>"?>


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
?>

</body>
</html>