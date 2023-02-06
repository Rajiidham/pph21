<?php

namespace pph21;
interface CalculatorInterface {

    function calculate(float $pkp) : float;

    function maxPkp(): float;
    function minPkp(): float;

    function taxPercentage() : float;
}