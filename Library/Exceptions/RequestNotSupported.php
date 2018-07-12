<?php
/**
 * Created by PhpStorm.
 * User: Warchiefs
 * Date: 12.07.18
 * Time: 14:03
 */

namespace GlamyTest\Library\Exceptions;

class RequestNotSupported extends \Exception
{
    /**
     * RequestNotSupported constructor.
     * @param $request
     */
    public function __construct($request = null)
    {
        if($request === null) {
            $message = 'Enter request type';
        } else {
            $message = 'Request type '.strtolower($request).' not supported.';
        }

        $message .= PHP_EOL.'Supported: [http, mock]';

        $code = 0;
        $previous = null;

        parent::__construct($message, $code, $previous);
    }
}