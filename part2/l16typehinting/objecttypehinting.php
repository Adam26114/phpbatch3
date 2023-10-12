<?php

class lady
{
    public $name = "Honey Nway Oo";

    public function friend()
    {
        return "My friend name is $this->name";
    }
}

function showresult(lady $val)
{
    echo $val->friend();
}

echo "This is Object type hinting <br/>";

showresult(new lady());

echo "<br/>";


class brand
{
    public function getjpnbrand()
    {
        return "Tyoto Brands <br/>";
    }
    public function getchinabrand()
    {
        return "BYD Brand <br/>";
    }
}

class car
{
    public function getbrand(brand $val)
    {
        return $val;
    }

    public function getjpn(brand $val)
    {
        return $val->getjpnbrand();
    }
    public function getchn(brand $val)
    {
        return $val->getjpnbrand();
    }
}

$objbrand = new brand();
$objcar = new car();

echo $objcar->getbrand($objbrnad)->getjpnbrand();
echo $objcar->getbrand($objbrnad)->getchinabrand();

echo $objcar->getjpn($objbrand);
echo $objcar->getjpn($objbrand);


