<?php

// "Note: Type hinting is concept that provieds hints to function for the expeted data type of arguments";
// Adavamtage of type hinting
//  help users debug the code easlity or the code provides erroes very sepecifically.
// a greate concept for static kind of data.

// Disadvatage of type hinting
//  function only take one type of data
// the dynamic dta or argument are not there 

declare(strict_types=1);
class myhint1
{
    public function getdata($val)
    {
        echo $val . "<br/>";
    }
}




echo "This is Argument Type Hinting <br/>";

$obj1 = new myhint1();

$obj1->getdata("augnaung"); //aungaung
$obj1->getdata("10"); //10
$obj1->getdata(100); //100
$obj1->getdata(25.67); //25.67
$obj1->getdata(true); //1

echo "<hr/>";

class myhint2
{
    public function getdata(string $val)
    {
        echo $val . "<br/>";
    }
}

echo "This is Argument string Type Hinting <br/>";

$obj2 = new myhint2();

$obj2->getdata("augnaung"); //aungaung
$obj2->getdata("10"); //10
// $obj2->getdata(100); //100 error
// $obj2->getdata(25.67); //25.67 error
// $obj2->getdata(true); //1 error

echo "<hr/>";

class myhint3
{
    public function getdata(int $val)
    {
        echo $val . "<br/>";
    }
}

echo "This is Argument int Type Hinting <br/>";

$obj3 = new myhint3();

// $obj3->getdata("augnaung"); //aungaung erroor
// $obj3->getdata("10"); //10 error
$obj3->getdata(100); //100 
// $obj3->getdata(25.67); //25.67 error
// $obj3->getdata(true); //1 error

echo "<hr/>";

class myhint4
{
    public function getdata(bool $val)
    {
        echo $val . "<br/>";
    }
}

echo "This is Argument bool Type Hinting <br/>";

$obj4 = new myhint4();

// $obj4->getdata("augnaung"); //aungaung erroor
// $obj4->getdata("10"); //10 error
// $obj4->getdata(100); //100 error
// $obj4->getdata(25.67); //25.67 error
$obj4->getdata(true); //1 

echo "<hr/>";

class myhint5
{
    public function getdata(float $val)
    {
        echo $val . "<br/>";
    }
}

echo "This is Argument float Type Hinting <br/>";

$obj5 = new myhint5();

// $obj5->getdata("augnaung"); //aungaung erroor
// $obj5->getdata("10"); //10 error
$obj5->getdata(100); //100 
$obj5->getdata(25.67); //25.67
// $obj5->getdata(true); //1 error

echo "<hr/>";

class myhint6
{
    public function getdata(array $val)
    {
        echo $val . "<br/>";
    }
}

echo "This is Argument array Type Hinting <br/>";

$obj6 = new myhint6();

// $obj6->getdata("augnaung"); //aungaung erroor
// $obj6->getdata("10"); //10 error
// $obj6->getdata(100); //100  error
// $obj6->getdata(25.67); //25.67 error
// $obj6->getdata(true); //1 error
$obj6->getdata(['red', 'green', 'blue']); // Array


echo "<hr/>";

class myhint7
{
    public function total(array $arrs)
    {
        $result = 0;

        foreach ($arrs as $arr) {
            $result = $result + $arr;
        }

        echo $result;
    }
}
echo "This is Argument array Type Hinting <br/>";

$obj7 = new myhint7();

$obj7->total([10, 20, 30, 40, 50]);


echo "<hr/>";

class phone
{
    protected $brand;
    protected $hasfacesensor;
    protected $numberfsim;
    protected $price;

    public function setbrand(string $value)
    {
        $this->brand = $value;
    }
    public function sethasfacesensor(bool $value)
    {
        $this->hasfacesensor = $value;
    }
    public function setnumberfsim(int $value)
    {
        $this->numberfsim = $value;
    }
    public function setprice(float $value)
    {
        $this->price = $value;
    }

    public function getinf()
    {
        echo "
            Brand Name is $this->brand <br/>
            Face Sensor is $this->hasfacesensor <br/>
            Number of sim is $this->numberfsim <br/>
            Price is $$this->price <br/>
        ";
    }
}

echo "This is Argument array Type Hinting <br/>";

$obj8 = new phone();

$obj8->setbrand('Iphone');
$obj8->sethasfacesensor(true);
$obj8->setnumberfsim(2);
$obj8->setprice(999.68);
