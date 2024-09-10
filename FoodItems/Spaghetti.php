<?php

namespace FoodItems;

class Spaghetti extends FoodItem {
    public const CATEGORY = "Spaghetti";
    public function __construct() {
        parent::__construct("Spaghetti", "Almost no meat", 3.5);
    }

    public static function getCategory(){
        return self::CATEGORY;
    }
}