<?php

namespace FoodItems;

class Fettuccine extends FoodItem {
    public const CATEGORY = "Fettuccine";
    public function __construct() {
        parent::__construct("Fettuccine", "Noodle is a little too hard", 5.3);
    }
    public static function getCategory(){
        return self::CATEGORY;
    }
    
}