<?php

namespace Engines;

use Interfaces\Engine;

class ElectricEngine implements Engine {
    public function start(): string {
        return "Staring the electric engine...";
    }
}