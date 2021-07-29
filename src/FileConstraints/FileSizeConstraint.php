<?php

namespace SunnyFlail\Constraints\FileConstraints;

use Psr\Http\Message\UploadedFileInterface;
use SunnyFlail\Constraints\Interfaces\IFileConstraint;

final class FileSizeConstraint implements IFileConstraint
{

    public function __construct(
        private ?int $max = null,
        private ?int $min = null
    ) {
    }

    public function fileValid(UploadedFileInterface $file): bool
    {
        $size = $file->getSize();

        if (($this->max !== null && $size > $this->max)
            ||($this->min !== null && $size < $this->min)
        ) {
            return false;
        }

        return true;
    }

}