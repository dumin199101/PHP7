<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/1
 * Time: 10:24
 */

declare(strict_types=1);

class A
{
    private $name = "hello";
}

$get_name = function (){
    return $this->name;
};

$name = $get_name->call(new A());
echo $name;