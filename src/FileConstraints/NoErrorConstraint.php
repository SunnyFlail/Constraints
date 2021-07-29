<?php

namespace SunnyFlail\Constraints\FileConstraints;

use Psr\Http\Message\UploadedFileInterface;
use SunnyFlail\Constraints\Interfaces\IFileConstraint;

final class NoErrorConstraint implements IFileConstraint
{

    public function __construct()
    {
    }

    public function fileValid(UploadedFileInterface $file): bool
    {
        return ($file->getError() === UPLOAD_ERR_OK);
    }

}