<?php


namespace App\classes;


use mysql_xdevapi\BaseResult;

class Example
{
    public $firstNumber = 10;
    public $firstName;
    public $lastName;

public function index()
{

    $this->firstName="Habibur";
    $this->lastName="Rahman";

    echo $this->firstNumber;
    echo '<br/>';
    echo $this->firstName;
    echo '<br/>';
    echo $this->lastName;
    echo '<br/>';
    echo $this->firstName.$this->lastName;
}
}