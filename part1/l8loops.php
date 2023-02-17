<?php
//php loops

// for
// foreach
// while
// do..while

$colorones = ["red","green","blue","white","black","grey","pink"];  // indexed array

var_dump($colorones);  
echo "<br/>";
echo count($colorones);
echo "<br/>";
$coloroneskey = array_keys($colorones);
// echo ($coloroneskey);
echo "<br/>";
var_dump ($coloroneskey);
echo "<br/>";
echo "<br/>";


// for loop
// for(statement1;statement2;statement3){
//     code to executed;
// }

for($i = 0 ; $i < count($colorones) ; $i++){
    echo $i;
    echo "<br/>";

    echo "This is index array or manural array by forloop = index key is ".$i."and value is.$colorones[$i]"."<br/>";
    echo "This is index array or manural array by forloop = index key is ".$coloroneskey[$i]."and value is.$colorones[$i]"."<br/>";

}

echo "<hr/>";

$posts = [
	"postone"=>"this is news post one",
	"posttwo"=>"this is news post two",
	"postthree"=>"this is news post three",
	"postfour"=>"this is news post four",
]; //Associated array

$postskey = array_keys($posts);
// var_dump($postskey);
print_r($postskey);

echo "<hr/>";



for($x= 0; $x < count ($posts) ; $x++){
	//echo "$x";
	//echo "<br/>";

	echo "This is associative array by forloop = index key is ".$postskey[$x]."and value is ".$posts[$postskey[$x]] ."<br/>";

}

echo "<hr/>";




$employees = [
    ["name"=> "Aung Aung","gender"=>"Male"],
    ["name"=> "Su Su","gender"=>"Female"],
    ["name"=> "Nu Nu","gender"=>"Female"],
    ["name"=> "Kyaw Kyaw","gender"=>"Male"],
    ["name"=> "Tun Tun","gender"=>"Male"],
]; //Multidimensional array



$employeeskey  = array_keys($employees);
// var_dump($employeeskey);
// print_r($employeeskey);
// echo "<br/>";


// remove cover first array
for($k = 0 ;$k < count($employees) ; $k++){
    $newkey = array_keys($employees[$employeeskey[$k]]);
    //remove cover second array (associated array);
    // echo(count($employees));
    // var_dump($newkey);
    // print_r($employees[$employeeskey[$k]]);
    // echo "<br/>";

    for($j = 0 ; $j < count($newkey) ; $j++){
        echo "This is indexed array or menual array by forloop = index key is ".$newkey[$j]. " and value is ".$employees[$k][$newkey[$j]]."<br/>";
    }
};


// 17BT
?>