<?php

namespace Persons\Customers;
use Persons\Person;
use Invoices\Invoice;
// use Restaurants\Restaurant;

class Customer extends Person {

    private array $interestedCategories;
    public function __construct($name, $age, $address, $interestedCategories) {
        parent::__construct($name, $age, $address);
        $this->interestedCategories = $interestedCategories;
    }

    public function interestedCategories(Restaurant $restaurant): array {
        
    }

    public function order($restaurant) {
        // who wanted to eat => categories
        // fooditemから名前を取得してmealNamesに格納する
        $mealNames = array();
        $menu = $restaurant->getStrMenu();
        foreach ($menu as $meal) {
            array_push($mealNames, $meal);
        }
        $meals = implode(', ', $mealNames);
        echo $this->name . ' wanted to eat ' . $meals . "\n";
        

        // tomのinterestedがmenuにあれば注文する
        echo $this->name . " was looking at the menu, and ordered ";
        $output = "";
        $mealsToOrder = [];
        $mealsToOrderObj = [];
        foreach ($this->interestedCategories as $key => $category) {
    
            if(in_array($key, $restaurant->getStrMenu())) {
                // 注文数分格納する 
                for ($i = 0; $i < $this->interestedCategories[$key]; $i++) array_push($mealsToOrder, $key);
                // クラス名を取る　名前が同じなら格納する
                for ($i = 0; $i < count($restaurant->getMenu()); $i++){
                    array_push($mealsToOrderObj, $restaurant->getMenu()[$i]);
                }

                $output .= $key . " x " . $this->interestedCategories[$key] . ", ";
            }
        }
        echo substr($output, 0, strlen($output) - 2) . ".\n";

        // 注文する, invoice を return する
        $totalPrice = $this->getTotalPrice($mealsToOrder, $restaurant, $mealsToOrderObj);
        return $restaurant->order($mealsToOrder, $totalPrice, date('Y-m-d H:i:s'), 7);
    }

    // 価格計算
    private function getTotalPrice($mealsToOrder, $restaurant, $mealsToOrderObj) {
        $totalPrice = 0;
        // mealstoorderに入っているなら加算する
        // $restaurantMenu = $restaurant->getMenu();
        // print_r($restaurantMenu);
        // print_r();
        for ($i = 0; $i < count($mealsToOrder); $i++) {
            // echo "---------------------";
            // echo in_array($mealsToOrder[$i], $this->interestedCategories);
            // echo "*********************";
            // // print_r($this->interestedCategories);
            // $keyExists = array_key_exists("b", $fruits);
            if (array_key_exists($mealsToOrder[$i], $this->interestedCategories)){
                // priceを取得する　-> restaurantMenuから取る
                $amount = $this->interestedCategories[$mealsToOrder[$i]];
                // print_r($mealsToOrderObj);
                
                $totalPrice += $mealsToOrderObj[$i]->getPrice();
                
                echo $mealsToOrderObj[$i]->getCategory();
                echo $mealsToOrderObj[$i]->getPrice();
                echo "\n";
                // echo "this is price ------\n";
            }
        }

        return $totalPrice;
    }
}