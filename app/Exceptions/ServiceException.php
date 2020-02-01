<?php

namespace App\Exceptions;

use App\Traits\Utils;
use Exception;

class ServiceException extends Exception
{
    use Utils;

    public function render($request)
    {
        return $this->sendError($this->getMessage(), $this->getCode());
    }

}
