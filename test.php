<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2019/3/19
 * Time: 21:24
 */
require 'vendor/autoload.php';
$test = new \Zero\Hello();
$test->index();

$test1 = new \Zero\A\Test();
$test1->index();

$test1 = new \Zero\A\B\BTest();
$test1->index();

$test2 = new Zero\Test();
$test2->index();