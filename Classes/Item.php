<?php

require_once __DIR__ . '/Table.php';
require_once __DIR__ . '/Cabinet.php';
class Item{
    public $color;
    public $material;
    public $price;
    public function show (){
        return 'My price is' . $this->price;
    }
}