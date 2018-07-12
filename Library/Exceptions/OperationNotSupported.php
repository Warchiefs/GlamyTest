<?php
/**
 * Created by PhpStorm.
 * User: Warchiefs
 * Date: 12.07.18
 * Time: 14:03
 */

namespace GlamyTest\Library\Exceptions;

class OperationNotSupported extends \Exception
{
    /**
     * OperationNotSupported constructor.
     * @param $request
     */
    public function __construct($request = null)
    {
        if($request === null) {
            $message = 'Enter operation type';
        } else {
            $message = 'Operation type '.strtolower($request).' not supported.';
        }

        $message .= PHP_EOL.'Supported: [addition, multiply]';

        $code = 0;
        $previous = null;

        parent::__construct($message, $code, $previous);
    }
}