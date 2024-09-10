<?php

namespace FoodItems;

class HawaiianPizza extends FoodItem {
    public const CATEGORY = "HawaiianPizza";
    public function __construct() {
        parent::__construct("HawaiianPizza", "Fruits on pizza", 7.4);
    }

    public static function getCategory(){
        return self::CATEGORY;
    }
}