<?php
/**
 * Created by PhpStorm.
 * User: Warchiefs
 * Date: 12.07.18
 * Time: 13:02
 */

namespace GlamyTest\Library;


interface IRequest
{
    /**
     * GET request
     *
     * @return string
     */
    public function get() : string;
}