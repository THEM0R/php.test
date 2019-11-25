<?php

require_once 'Test.php';
require_once 'Test2.php';

//$gt = new Test();
//
//echo
//$gt->set_langs('en', 'ru')
//    ->set_text('hello babe, how are you')
//    ->translate();


$test2 = new Test2();

$test2->first('test1')
    ->second('test3')
    ->fife('test2');
