<?php
class Animal {
    public $name,
    $legs,
    $cold_blood;

    public function __construct($name, $legs = 4, $cold_blood = "no"){
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blood = $cold_blood;
    }
}
?>