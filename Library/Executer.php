<?php
/**
 * Created by PhpStorm.
 * User: Warchiefs
 * Date: 12.07.18
 * Time: 14:23
 */

namespace GlamyTest\Library;

class Executer
{
    protected $request;
    protected $operation;

    /**
     * Executer constructor.
     * @param IRequest $request
     * @param IOperation $operation
     */
    public function __construct(IRequest $request, IOperation $operation)
    {
        $this->request = $request;
        $this->operation = $operation;
    }

    /**
     * @return mixed
     */
    public function calculate() {
        $data = json_decode($this->request->get(), 1)['data'];
        return $this->operation->execute($data);
    }

    /**
     * @param $url
     * @param array $params
     * @return string
     */
    public function getResponse($url, $params = [])
    {
        return $this->request->get($url, $params);
    }

    /**
     * @param $x
     * @param $y
     * @return mixed
     */
    public function getResult($x, $y)
    {
        return $this->operation->execute($x, $y);
    }
}