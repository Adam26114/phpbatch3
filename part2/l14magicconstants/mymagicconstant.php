<?php 

class mymagicconstant{

    public function getclassname1(){
        echo __CLASS__ . "<br/>";
    }

    public function getclassname2(){
        echo get_class($this) . "<br/>";
    }


    public  function getfunname1(){
        echo __FUNCTION__ . "<br/>";
    }

    public static function getfunname2(){
        echo __FUNCTION__ . "<br/>";
    }

    public  function getmthname1(){
        echo __METHOD__ . "<br/>";
    }


    public static function getmthname2(){
        echo __METHOD__ . "<br/>";
    }


    public function getdir(){
        echo __DIR__ . "<br/>";
    }

     public function getfile(){
        echo __FILE__ . "<br/>";
    }

     public function getline(){
        echo __LINE__ . "<br/>";
    }
    
}


trait access{

    public $email = "honey@gmail.com";
    public $password = "123456";

    public function gettrait(){
        echo __TRAIT__ . "<br/>"; // __TRAIT must be in parent trait
    }
}

class auth{
    use access;

    public function login(){
        echo "This is user login . Email is $this->email & password is $this->password .<br/> ";
    }


}

echo "This is Magic Constants <br/>";

$obj = new mymagicconstant();
$obj->getclassname1(); //mymagicconstant
$obj->getclassname2(); //mymagicconstant

$obj->getfunname1(); //getfunname1
$obj->getfunname2(); //getfunname2



$obj->getmthname1(); //mymagicconstant::getmthname1
$obj->getmthname2(); //mymagicconstant

$obj->getdir(); 

$obj->getdir(); 


$obj->getline();

echo "<hr/>";

$obj2 = new auth();
$obj2->login(); // This is user login . Email is honey@gmail.com & Password is 123456
$obj2->gettrait(); // access

?>