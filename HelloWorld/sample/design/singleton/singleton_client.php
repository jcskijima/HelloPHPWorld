<?php

require('singleton.php');

$singleton1 = Singleton::getInstance2();
$singleton2 = Singleton::getInstance2();

var_dump($singleton1 === $singleton2);
echo '<br>';

$singleton1->setApplicationName('Hello　World1');
$singleton2->setApplicationName('Hello　World2');
echo 'singleton1 : '.$singleton1->getApplicationName();
echo '<br>';
echo 'singleton2 : '.$singleton2->getApplicationName();
echo '<br>';
echo 'singleton2 : '.$singleton2->getClassName();
echo '<br>';


/* これはエラー */
$singleton_err = new Singleton();

