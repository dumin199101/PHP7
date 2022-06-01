<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/6/1
 * Time: 9:36
 */

declare(strict_types=1);

function returnInt(int $value): int
{
   return $value;
}

$res = returnInt(4);
echo $res;

// 错误实例：
/*function returnInteger(int $value): int
{
    return $value + 1.0;
}*/

function swap(int &$a,int &$b): void
{
    $temp = $a;
    $a = $b;
    $b = $temp;
    print_r($a);
    print_r($b);
}

$a = 1;
$b = 2;
swap($a,$b);
print_r($a);
print_r($b);

