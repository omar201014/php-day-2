<?php
echo nl2br("Hello World!\n");
echo("new line")."<br />";
echo("<br /> ------------------------------ <br />");
// php string methods
echo(" php string methods:<br />");

//  1- trim() Function  --> Remove characters from both sides of a string ("He" in "Hello" and "d!" in "World"):

//     example:

    $str = "Hello World!";
    echo trim($str,"Hello!")."<br />";

//  2- str_split() Function  --> The str_split() function splits a string into an array.

// example:    
print_r(str_split($str));
echo("<br />");

//  3- strtoupper() Function  --> Convert all characters to uppercase:

// example: 

echo strtoupper("Hello php");
echo("<br /> ------------------------------ <br />");


foreach($_SERVER as $key => $value) {
    echo($key.":".$value."<br />");
}
echo("------------------------------ <br />");
$nums = array(12,45,10,25);
$sum = array_sum($nums);
echo $sum."<br />";
$avg = $sum /count($nums);
echo $avg."<br /> ***** <br />";
rsort($nums);
foreach($nums as $num) {
    echo $num."<br />";
}

echo("------------------------------ <br />");
$arr = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);
echo "ascending order sort by value"."<br />";
asort($arr);
foreach($arr as $key => $value) {
    
    echo $key.":".$value."<br />";
}
echo "ascending order sort by Key"."<br />";
ksort($arr);
foreach($arr as $key => $value) {
    echo $key.":".$value."<br />";
}
echo "descending order sorting by Value"."<br />";
arsort($arr);
foreach($arr as $key => $value) {
    echo $key.":".$value."<br />";
}
echo "descending order sorting by Key"."<br />";
krsort($arr);
foreach($arr as $key => $value) {
    echo $key.":".$value."<br />";
}
?>