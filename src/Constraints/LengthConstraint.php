<?php

namespace SunnyFlail\Constraints\Constraints;

use SunnyFlail\Constraints\Interfaces\IConstraint;

final class LengthConstraint implements IConstraint
{

    public function __construct(
        private int $minLength = 0,
        private ?int $maxLength = null
    ) {}

    public function matchesConstraint($value): bool
    {
        if (!is_string($value) && !is_numeric($value)) {
            return false;
        }
        
        $length = strlen($value);

        if (($length < $this->minLength) || ($this->maxLength && $length > $this->maxLength)) {
            return false;
        }

        return true;
    }

}