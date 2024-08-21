<?php

namespace FoodOrders;

class FoodOrder {
    private array $items;
    private TimeStamp $orderTime;

    public function __construct(array $items, TimeStamp $orderTime) {
        $this->items = $items;
        $this->orderTime = $orderTime;
    }
}