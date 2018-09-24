<?php

class Cabinet extends Item{
    public $dors;
    public $shelfs;
    public function __construct($shelfs)
    {
$this->shelfs = $shelfs;
    }

    public function show (){
        return 'I have' . $this->dors . parent::show () . ' ' . $this->shelfs;
    }
}