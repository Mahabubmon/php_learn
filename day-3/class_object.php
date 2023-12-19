<?php

class Road
{
    //properties

    public $lalbagh;
    public $azimpur;
    public $posta;


    public function __construct($azimpur, $lalbagh, $posta)
    {
        $this->azimpur = $azimpur;
        $this->lalbagh = $lalbagh;
        $this->posta = $posta;
    }


    public function displayInfo()
    {
        echo "Azimpur has: $this->azimpur,lalbagh has: $this->lalbagh,posta has: $this->posta";
    }
}

//create object 
$place = new Road("bus stand", "kella fort", "banks");

//access the properties
echo $place->azimpur;

//Call a method
$place->displayInfo();

?>