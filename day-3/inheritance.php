<?php
class River
{
    public $padma;



    public function __construct()
    {
        $this->padma = $padma;
    }
}

class Flow extends River
{
    public function place()
    {
        echo "mawa";
    }
}

$identifyRiver = new River("haveilsha");

$flow = new Flow("SoHigh");

$identifyRiver->place();
$flow->place();



?>