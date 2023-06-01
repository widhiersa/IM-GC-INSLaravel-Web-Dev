<?php
class Animal { 
    public $name;

    public function __construct($string){
        $this->name = $string;
    }

    public $legs = 4;
    public $cold_blooded = "no";
}
?>