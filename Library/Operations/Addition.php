<?php
/**
 * Created by PhpStorm.
 * User: Warchiefs
 * Date: 12.07.18
 * Time: 14:00
 */

namespace GlamyTest\Library\Operations;

use GlamyTest\Library\IOperation;

class Addition implements IOperation
{
    /**
     * @param array $data
     * @return int|mixed
     */
    public function execute(array $data)
    {
        $result = 0;

        foreach ($data as $row) {
            if(isset($row['value'])) {
                $result += $row['value'];
            }
        }

        return $result;
    }
}