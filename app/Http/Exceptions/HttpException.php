<?php

namespace App\Http\Exceptions;

class HttpException extends \Exception {

    protected $message;
    protected $statusCode;

    public function __construct($message, $statusCode) {
        $this->message = $message;
        $this->statusCode = $statusCode;
    }

    public function getStatusCode() {
        return $this->statusCode;
    }
}