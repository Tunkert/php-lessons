<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strings</title>
</head>
<body>
<?php
$myStr = "This is my string";
// access parts of a string - print out a particular character at different indices
echo $myStr[0];
echo "<br>";
// convert string to all lowercase
echo strtolower($myStr);
echo "<br>";
// convert string to all uppercase
echo strtoupper($myStr);
echo "<br>";
// find the length of the string
echo strlen($myStr);
echo "<br>";
// forEach loop?
// split string into array
$myStrArr = str_split($myStr);
// loop through array with for each loop
foreach ($myStrArr as $character) {
    echo $character;
    echo ", ";
}
echo "<br>";
echo $myStr;
echo "<br>";
// replace part of string with substring
echo str_replace("string", "sentence", $myStr);
echo "<br>";
// does not alter original string
echo $myStr;
echo "<br>";
// get substring
echo substr($myStr, 5);
echo "<br>";
echo substr($myStr, 5, 3);
?>
</body>
</html>
