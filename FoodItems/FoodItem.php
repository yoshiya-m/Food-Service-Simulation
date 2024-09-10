<?php

namespace FoodItems;

abstract class FoodItem {
    private string $name;
    private string $description;
    private float $price;

    public function __construct($name, $description, $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
    

    // public static getCategory(): string {

    // }
}