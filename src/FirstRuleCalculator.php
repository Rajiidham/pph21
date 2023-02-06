<?php

namespace pph21; 

class FirstRuleCalculator extends AbstractCalculator{

    function maxPkp(): float
    {
        return 50000000;
    }

    function minPkp(): float
    {
        return 0;
    }

    function taxPercentage(): float
    {
        return 0.05;
    }
}