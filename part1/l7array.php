<?php

// ? Arrays

// (i)     Indexed Array (Manural Array)
// (ii)    Associative Array
// (iii)   Multidimensional Array

$names = array("aung aung","maung maung","zaw zaw","kyaw kyaw","tun tun");
// echo $names;
echo "<br/>";
echo count($names);
// print $names;
echo "<br/>";
print_r($names,'false');

$colors = ["red","green","blue","white","black","pink"];

// echo $colors;
echo "<br/>";
echo count($colors);
echo "<br/>";
echo "<pre>".print_r($colors,"true")."</pre>";
var_dump ($colors);

$colors[6] = "grey";
$colors[7] = "stone";
$colors[8] = "skyblue";

$colors[0] = "violet"; // ! overwrite


echo "<pre>".print_r($colors,"true")."</pre>";

echo "My favorite color is " . $colors[3];

// --------------------------------------------------------------

// (ii) Associative Array

$news = array("pone" => "this is post one","ptwo" => "this is post two","pthree" => "this is post three");

var_dump($news);


$medias = ["pone"=>"this is post one",
"ptwo"=>"this is post two",
"pthree"=>"this is post three"];

var_dump($medias);
echo "<br/>";

$medias["pfour"] = "this is post four";
$medias["pfive"] = "this is post five";

echo "<pre>".print_r($medias,"true")."</pre>";
echo "i like this post, so post title is ".$medias["pthree"];

echo "<br/>";

// ------------------------------------------------------------

// (iii) Multidimensional Array (array in array)

// $paints = array(
//     array("red","green","blue","white"),
//     array("pen","pencil","ruler"),
//     array("paper","plastic")
// );

$paints = [
    ["red","green","blue","white"],
    ["pen","pencil","ruler"],
    ["paper","plastic"]
];

var_dump($paints);
echo "<br/>";
echo "<br/>";

echo $paints[0][0]; //red
echo "<br/>";
echo $paints[1][1]; //pencil
echo "<br/>";
echo $paints[2][1]; //plastic
echo "<br/>";
echo "<br/>";


// $persons = array(
//     array("name"=>"Aung Aung","age"=>"20"),
//     array("name"=>"Su Su","age"=>"30"),
//     array("name"=>"Yin Yin","age"=>"25")
// );

$persons = [
    ["name"=>"Aung Aung","age"=>"20"],
    ["name"=>"Su Su","age"=>"30"],
    ["name"=>"Yin Yin","age"=>"25"]
];

var_dump($persons);
echo "<br/>";
echo "<br/>";
// 3AR

echo $persons[0]["name"]; //Aung Aung
echo "<br/>";
echo $persons[0]["age"]; //30
echo "<br/>";
echo $persons[2]["name"]."\n".$persons[2]["age"]; //Yin Yin
echo "<br/>";
echo $persons[2]["age"]; //30


?>

