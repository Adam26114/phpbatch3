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

var_dump($emedias);
echo "<br/>";

$medias["pfour"] = "this is post four";
$medias["pfive"] = "this is post five";

echo "<pre>".print_r($medias,"true")."</pre>";
echo "i like this post, so post title is ".$medias["pthree"];

// 3AR

?>

