<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/1
 * Time: 9:29
 */

//declare(strict_types=1);

function sum(int ...$ints)
{
    return array_sum($ints);
}

echo sum(1, 2.2, '3');