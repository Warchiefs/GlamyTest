<?php
/**
 * Created by PhpStorm.
 * User: Warchiefs
 * Date: 12.07.18
 * Time: 13:07
 */

namespace GlamyTest\Library\Exceptions;

class MethodNotFoundException extends \Exception
{
    /**
     * MethodNotFoundException constructor.
     * @param string $method
     */
    public function __construct($method)
    {
        $message = 'Method '.strtoupper($method).' not supported';
        $code = 0;
        $previous = null;

        parent::__construct($message, $code, $previous);
    }
}