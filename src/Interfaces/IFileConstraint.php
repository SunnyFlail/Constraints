<?php

namespace SunnyFlail\Constraints\Interfaces;

use Psr\Http\Message\UploadedFileInterface;

interface IFileConstraint
{

    public function fileValid(UploadedFileInterface $file): bool;

}
