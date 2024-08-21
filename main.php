<?php
spl_autoload_extensions(".php"); 
spl_autoload_register();

require_once "FoodItems/FoodItem.php";
require_once "FoodItems/CheeseBurger.php";
require_once "FoodItems/Spaghetti.php";
require_once "FoodItems/HawaiianPizza.php";
require_once "FoodItems/Fettuccine.php";
require_once "Persons/Person.php";
require_once "Persons/Employees/Employee.php";
require_once "Persons/Employees/Chef.php";
require_once "Persons/Employees/Cashier.php";
require_once "Restaurants/Restaurant.php";
require_once "Persons/Customers/Customer.php";
require_once "Invoices/Invoice.php";

$cheeseBurger = new FoodItems\CheeseBurger();
$spaghetti = new FoodItems\Spaghetti();
$hawaiianPizza = new FoodItems\HawaiianPizza();
$fettucine = new FoodItems\Fettuccine();
$Inavah = new \Persons\Employees\Chef("Inavah Lozano", 40, "Osaka", 1, 30);
$Nadia = new \Persons\Employees\Cashier("Nadia Valentine", 21, "Tokyo", 1, 20);
$saizeria = new \Restaurants\Restaurant(
    [
        $cheeseBurger,
        $spaghetti,
        $hawaiianPizza,
        $fettucine
    ],
    [
        $Inavah,
        $Nadia
    ]
);

// echo $saizeria->menu;
// print_r($saizeria->menu);

$interestedTastesMap = [
    "Margherita" => 1,
    "CheeseBurger" => 2,
    "Spaghetti" => 1
];

$Tom = new \Persons\Customers\Customer("Tom", 20, "Saitama", $interestedTastesMap);


$invoice = $Tom->order($saizeria);
$invoice->printInVoice();
