<?php
declare(strict_types=1);
$a = new class
{
    public function say(): void
    {
        echo 'I am singing';
    }
};

$a->say();