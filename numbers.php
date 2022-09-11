<?php
$num1 = 12;
$num2 = 5;

echo $num1 + $num2;  // adding
echo "<br>";
echo $num1 - $num2;  // subtracting
echo "<br>";
echo $num1 * $num2;  // multiplying
echo "<br>";
echo $num1 / $num2;  // dividing - will return a float
echo "<br>";
echo $num1 % $num2;  // modulus - returns remainder
// like pretty much every other language PHP adheres to order of operations
echo "<br>";
$num1++;
echo $num1;

// other operations
echo "<br>";
$num1 += 1;
$num1 -= 5;
$num1 *= 10;
$num1 /= 4;
echo $num1;

// some math stuff
echo "<br>";
echo abs(-10);  // 10
echo "<br>";
echo pow(10, 2);  // 100
echo "<br>";
echo sqrt(9);  // 3
echo "<br>";
echo max(2, 3);  // 3
echo "<br>";
echo min(2, 3);  // 2
echo "<br>";
$pi = 3.1415169;
echo round($pi, 2);  // round to two decimal places
echo "<br>";
echo round($pi);
echo "<br>";
echo $pi;  // php actually has a function for this.
echo "<br>";
echo pi();
echo "<br>";
// trig stuff
echo sin(pi() / 4);  // pass in value as radians
echo "<br>";
echo cos(pi() / 2);  // should be 0 - very close ... but not exact because of program rounding pi()
echo "<br>";
echo tan(pi() / 4);  // should be 1
echo "<br>";
echo acos(pi() / 4);  // arc cosine
echo "<br>";
echo cos(acos(pi() / 4));  # here is another way to do a comment
print(pi());