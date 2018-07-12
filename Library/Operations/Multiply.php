<?php
/**
 * Created by PhpStorm.
 * User: Warchiefs
 * Date: 12.07.18
 * Time: 14:01
 */

namespace GlamyTest\Library\Operations;

use GlamyTest\Library\IOperation;

class Multiply implements IOperation
{

    /**
     * @param array $data
     * @return int|mixed
     */
    public function execute(array $data)
    {
        $result = 1;

        foreach ($data as $row)
        {
            if(isset($row['value']) && $row['value'] % 2 == 0) {
                $result *= $row['value'];
            }

            if(isset($row['alt']) && $row['alt'] % 2 != 0) {
                $result *= $row['value'];
            }
        }

        return $result;
    }

}