<?php

class Service {

    public $servicesId;
    public $servicesName;
    public $servicesDesc;
    public $servicesPrice;
    public $servicesImg;

    public function __construct($id, $name, $desc, $price, $img)
    {
        $this->servicesId = $id;
        $this->servicesName = $name;
        $this->servicesDesc = $desc;
        $this->servicesPrice = $price;
        $this->servicesImg = $img;
    }

    static function getAll() {

    }

    static function find($id) {

    }
    
    static function remove($id) {

    }
    
    static function add($service) {

    }

    static function modify($id, $service) {

    }


}
