<?php

namespace pph21; 

final class PPH21Calculator{

    private $calculators;


    function __construct(CalculatorInterface ...$calculators)
    {
        $this->calculators = $calculators;
    }

    function calculate(float $pkp) : float
    {
        foreach ($this->calculators as $calcu) {
            if($pkp < $calcu->maxPkp() && $pkp >= $calcu->minPkp()) {
                return $calcu->calculate($pkp);
            }
        }
    }
}


?>