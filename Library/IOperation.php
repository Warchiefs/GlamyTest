<?php
/**
 * Created by PhpStorm.
 * User: Warchiefs
 * Date: 12.07.18
 * Time: 13:55
 */

namespace GlamyTest\Library;


interface IOperation
{
    /**
     * @param array $data
     * @return mixed
     */
    public function execute(array $data);
}