<?php

// >Data binding 
// (i) Static bindings (or) Early binding
// (ii) Dynamic Binding (or) Late binding

//  binding ererything before program runnging
// index.php > Compile > Execute
// echp 1+1     101010     2 

//  program run time Dynamic binding / Late biding
// index.php > Compile > Execute
// echp 1+1     101010     2 
class hola1
{
    public $name = "ko ko ";

    public function friend()
    {
        return "My best friend namme is " . $this->name . "<br/>";
    }
    public function getfriend()
    {
        echo $this->friend();
    }
}

class hola2 extends hola1
{
    public function friend()
    {
        return "My best friend name is " . $this->name . "and Su Su <br/>";
    }
}



echo "This is my data binding <br/>";

$obj1 = new hola1();
echo $obj1->friend(); //My best friend namme is ko ko
$obj1->getfriend(); //My best friend namme is ko ko

$obj2 = new hola2();
echo $obj2->friend(); //M y best friends name is ko ko and Su Su
$obj2->getfriend(); //My best friends name is ko ko and Su Su


echo "<hr/>";


class hola3
{
    public $name = "ko ko ";

    public static function friend()
    {
        return "My best friend namme is " . self::$name . "<br/>";
    }
    public static function getfriend()
    {
        echo self::friend();
    }
}

class hola4 extends hola3
{
    public static function friend()
    {
        return "My best friend name is " . self::$name . "and Su Su <br/>";
    }
}

$obj3 = new hola3();
echo $obj3::friend(); //My best friend namme is ko ko
$obj3::getfriend(); //My best friend namme is ko ko

$obj4 = new hola4();
echo $obj4::friend(); //M y best friends name is ko ko and Su Su
$obj4::getfriend(); //My best friends name is ko ko and Su Su