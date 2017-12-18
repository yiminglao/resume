<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/7/2017
 * Time: 10:40 AM
 */

namespace Resume\Http;


class StatusCodes
{
    const OK = 200;
    const CREATED = 201;
    const NOT_MODIFIED = 304;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const CONFLICT = 409;
    const GONE = 410;
    const INTERNAL_SERVER_ERROR = 500;
    const NOT_IMPLEMENTED = 501;
    const SERVICE_UNAVAILABLE = 503;
}