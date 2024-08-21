<?php

namespace Restaurants;
use Invoices\Invoice;

class Restaurant {
    private array $menu;
    private array $employees;

    public function __construct($menu, $employees) {
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function getStrMenu() {
        $stringMenu = [];
        foreach ($this->menu as $item) {
            array_push($stringMenu, $item->getCategory());
        }
        return $stringMenu;
    }

    public function getMenu() {
        return $this->menu;
    }

    public function getEmployees() {
        return $this->employees;
    }

    // float $finalPrice, Timestamp $orderTime, int $estimatedTimeInMinutes
    
    public function order($mealsToOrder, $finalPrice, $orderTime, $estimatedTimeInMinutes): Invoice {


        // chefの料理出力
        foreach($mealsToOrder as $meal) {
            echo "chef " . $this->getEmployees()[0]->getName() . " cooked " . $meal . "\n";
        }
        
        echo "chef " . $this->getEmployees()[0]->getName() . " took 7 minutes to cook\n";

        // invoice 作成
        $this->getEmployees()[1]->takeOrder();
        return new Invoice($finalPrice, $orderTime, $estimatedTimeInMinutes);
    }
}