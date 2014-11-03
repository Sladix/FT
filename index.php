<?php

$f3=require_once('lib/base.php');
//$f3->set('BASE','http://localhost/FeelTracker/');
$f3->set('DB', new DB\SQL(
    'mysql:host=localhost;port=3306;dbname=feeltracker',
    'root',
    ''
)); 
$f3->config('config.ini');
$f3->route('GET /',array(new HomeController($f3),'main'));
$f3->route('POST /',array(new HomeController($f3),'add'));

$f3->run();