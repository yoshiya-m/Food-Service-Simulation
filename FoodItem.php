<?php

abstract class FoodItem{

    private string $name;
    private string $description;
    private double $price;

    public function __construct(string $name, string $description, double $price){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
    public static function getCategory() : string {

    }
}

class CheeseBurger extends FoodItem{
    public function __construct(string $name, string $description, double $price){
        parent::construct($name, $description, price);
    }
}

class Fettuccine extends FoodItem{
    public function __construct(string $name, string $description, double $price){
        parent::construct($name, $description, price);
    }
}

class Spaghetti extends FoodItem{
    public function __construct(string $name, string $description, double $price){
        parent::construct($name, $description, price);
    }
}

class HawiianPizza extends FoodItem{
    public function __construct(string $name, string $description, double $price){
        parent::construct($name, $description, price);
    }
}

