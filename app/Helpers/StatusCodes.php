<?php

namespace App\Helpers;

class StatusCodes
{
    // Overall status
    const SUCCESS = 'success';
    const ERROR = 'error';
    const PARTIAL_SUCCESS = 'partial_success';

    // HTTP Codes
    const HTTP_OK = 200;
    const HTTP_CREATED = 201;
    const HTTP_BAD_REQUEST = 400;
    const HTTP_UNAUTHORIZED = 401;
    const HTTP_FORBIDDEN = 403;
    const HTTP_NOT_FOUND = 404;
    const HTTP_UNPROCESSABLE_ENTITY = 422;
    const HTTP_INTERNAL_ERROR = 500;
    const HTTP_TO_MANY_REQUESTS=429;
}
