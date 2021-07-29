<?php

namespace SunnyFlail\Constraints\FileConstraints;

use Psr\Http\Message\UploadedFileInterface;
use SunnyFlail\Constraints\Interfaces\IFileConstraint;

final class BasicMediaTypeConstraint implements IFileConstraint
{

    public function __construct(private array $allowedTypes)
    {
    }

    public function fileValid(UploadedFileInterface $file): bool
    {
        return in_array($file->getClientMediaType(), $this->allowedTypes);
    }

}
