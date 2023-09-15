<?php
class myfinalkeyword
{
    protected $fullname = "Nandar";
    public $city = "Mandalay";
    public $email = "nanda@gmail.com";
    public $password = "123456";

    final public function getaccess()
    {
        echo "This is site : email is {$this->email} & password is {$this->password} <br/>";
    }

    public function getinfo()
    {
        echo "Name is {$this->fullname} & City is {$this->city} <br/>";
    }
}

class developerlogin extends myfinalkeyword
{

    public function githublogin()
    {
        echo "This is github login : email is {$this->email} . profile name {$this->fullname}";
    }

    public function getinfo()
    {
        echo "Name is {$this->fullname} & City is {$this->city} <br/>";
    }
}

echo "This is my final keyword <br/>";

$obj1 = new myfinalkeyword();
$obj1->getaccess();
$obj1->getinfo();

echo "<hr/>";

$obj2 = new developerlogin();
$obj2->getaccess();
$obj2->getinfo();
