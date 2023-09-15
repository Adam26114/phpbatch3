<?php

class myclone{

	public function project($name){
		echo " I created a new ${name} project. <br/>";
	}
}

$obj1 = new myclone();
$obj1->project("POS");
$obj1->project("Book Store");

$obj2 = clone $obj1;
$obj2->project('E-wallet');

echo "<hr/>";

// method_exists(classname string, method_name string)
// if(method_exists('myclone','task')){
// 	$obj1->task();
// }else{
// 	$obj1->task();
// }



// if(method_exists($obj1,'task')){
// 	$obj1->task();
// }else{
// 	$obj1->task();
// }


// if(method_exists(new myclone(),'task')){
// 	$obj1->task();
// }else{
// 	$obj1->task();
// }

// if(method_exists(new myclone(),'task')){
// 	$obj1->task();
// }else{
// 	$obj1->task();
// }

if(method_exists(new myclone(),'exam')){
	$obj1::exam();
}else{
	$obj1::exams();
}

echo "<hr/>";

?>