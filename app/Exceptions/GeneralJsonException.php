<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class GeneralJsonException extends Exception
{

    protected $code = [
        404
    ];

    public function report()
    {

    }

    public function render($request)
    {
        return new JsonResponse([
            'errors' => [
                'messages' => $this->getMessage()
            ]
        ], $this->code);
    }
}
