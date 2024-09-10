<?php

namespace FoodItems;

class CheeseBurger extends FoodItem {
    public const CATEGORY = "CheeseBurger";
    public function __construct() {
        parent::__construct("Cheese Burger", "big cheese, small meat", 2.5);
    }

    public static function getCategory(){
        return self::CATEGORY;
    }

    
}