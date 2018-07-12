<?php
/**
 * Created by PhpStorm.
 * User: Warchiefs
 * Date: 12.07.18
 * Time: 12:58
 */

namespace GlamyTest\Library\Requests;

use GlamyTest\Library\IRequest;
use GlamyTest\Library\Exceptions\MethodNotFoundException;

class MockRequest extends HttpRequest
{
    /**
     * @return string
     */
    public function get(): string
    {
        return "{\"data\": [ {\"value\": 1}, {\"value\": 2, \"alt\": 6}, {\"value\": 10, \"alt\": 5} ]}";
    }
}