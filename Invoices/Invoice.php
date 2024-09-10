<?php

namespace Invoices;

class Invoice {
    private float $finalPrice;
    private $orderTime;
    private int $estimatedTimeInMinutes;

    public function __construct(float $finalPrice, $orderTime, int $estimatedTimeInMinutes){
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }

    public function printInvoice() {
        echo "-----------------------\n"; 
        echo "Date: " . $this->orderTime . "\n";
        echo "Final Price: " . $this->finalPrice . "\n";
    }
}