<?php
$a = 10;
$b = 5;
function test()
{
    $a = 15;
    $b = 5;
    $z = $a-$b;
    echo $z;
}

test();
echo $a;
echo $b;
function test1()
{
    global $a,$b;
    $a = 15;
    $b = 5;
    $z = $a-$b;
    echo PHP_EOL;
    echo $z;
}

test1();
echo "\n";

echo $a;
echo $b;
function test2()
{
    global $a,$b;
    $z= $a-$b;
    echo PHP_EOL;
    echo $z;
    static $f=0;
    $f++;
}

test2();
