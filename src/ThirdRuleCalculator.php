<?php

namespace pph21; 

class ThirdRuleCalculator extends AbstractCalculator{

    function maxPkp(): float
    {
        return 500000000;
    }

    function minPkp(): float
    {
        return 250000000;
    }

    function taxPercentage(): float
    {
        return 0.25;
    }
}