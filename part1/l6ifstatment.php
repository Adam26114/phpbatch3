<?php

// if statement

$x = 10;
$y = 20;

if($x > $y){
    echo "Your Condition is yes";
}

if($x < $y){
    echo "Your Condition is yes";
}

echo "<br/>";

//if else
if($x > $y){
    echo "Yes x greater than y";
}else{
    echo "No, x less than y";
}

echo "<br/>";


// ? Shorthand

if($x < $y) echo "Yes x less than y"; else echo "No, x greater than y";

echo "<br/>";

if($x < $y){
    echo "Yes,x less than y";
}else{
    echo "No, x greater than y";
}

echo "<br/>";

$color = 'gray';
$colorvalue = $color; // Assign by reference

// echo $color;
// echo $colorvalue;

// if ($colorvalue == "red"){
//     echo "My fav color is red.";
// }else{
//     echo "I hate red color.";
// }



// if ($colorvalue == "red"){
//     echo "My fav color is $color.";
// }else{
//     echo "I hate $color color.";
// }


// ? concat (.)
if ($colorvalue == "red"){
    echo "My fav color is ".$color;
}else{
    echo "I hate ".$color." color.";
}

echo "<hr/>";


// ? Logical Operators

//  &&And) ||(Or) !(Not)

$a = 100;
$b = 200;
$c = 300;

if($a < $b && $b > $c){
    echo "It is true.";
}else{
    echo "It is false.";
}

echo "<br/>";

if($a < $b && $b < $c){
    echo "It is true.";
}else{
    echo "It is false.";
}

echo "<br/>";

if($a < $b || $b < $c){
    echo "It is true.";
}else{
    echo "It is false.";
}

echo "<br/>";

if($a < $b || $b > $c && $a < $c){
    echo "It is true.";
}else{
    echo "It is false.";
}

echo "<br/>";

//  true       false     false

if($a < $b || $b > $c && $a < $c){
    echo "It is true.";
}else{
    echo "It is false.";
}

echo "<hr/>";

if(!($a < $b)){
    echo "It is true.";
}else{
    echo "It is false.";
}


?>

<!-- 27IF -->