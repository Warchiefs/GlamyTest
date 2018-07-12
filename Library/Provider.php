<?php
/**
 * Created by PhpStorm.
 * User: Warchiefs
 * Date: 12.07.18
 * Time: 14:02
 */

namespace GlamyTest\Library;

use GlamyTest\Library\Exceptions\OperationNotSupported;
use GlamyTest\Library\Exceptions\RequestNotSupported;

class Provider
{
    private $requests_namespace = 'GlamyTest\Library\Requests\\';
    private $operations_namespace = 'GlamyTest\Library\Operations\\';

    public $request;
    public $operation;

    /**
     * Provider constructor.
     * @param array $argv
     * @throws OperationNotSupported
     * @throws RequestNotSupported
     */
    public function __construct(array $argv)
    {
        if(!isset($argv[1])) {
            throw new RequestNotSupported();
        }

        if(!isset($argv[2])) {
            throw new OperationNotSupported();
        }

        $this->request = $this->getRequest($argv[1]);
        $this->operation = $this->getOperation($argv[2]);
    }

    /**
     * @param $type
     * @return string
     * @throws RequestNotSupported
     */
    protected function getRequest($type)
    {
        $class_name = $this->requests_namespace.ucfirst($type).'Request';

        if(!class_exists($class_name)) {
            throw new RequestNotSupported($type);
        }

        return $class_name;
    }

    /**
     * @param $type
     * @return string
     * @throws OperationNotSupported
     */
    protected function getOperation($type)
    {
        $class_name = $this->operations_namespace.ucfirst($type);

        if(!class_exists($class_name)) {
            throw new OperationNotSupported($type);
        }

        return $class_name;
    }
}