<?php
$a=5;
print("The value of variable a is $a <br/>");

//define constant VALUE as 5
define("VALUE",5);

$a=$a+VALUE;
print("Variable a after adding contant VALUE is $a <br/>");

$a*=2;
print("Multipling variable a by 2 yields $a <br/>");

if($a<50)
	print("Variable a after adding 40 is $a <br/>");

$str="abc";
$a=$a.$str;
print("Adding a string to variable a yields $a <br/>");

?>
