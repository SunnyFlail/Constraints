<?php

namespace SunnyFlail\Constraints\Interfaces;

/**
 * Basic interface for Field Constraints
 */
interface IConstraint
{

    /**
     * Checks whether provided value fits with constraint
     * 
     * @return bool
     */
    public function matchesConstraint($value): bool;

}
