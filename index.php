<?php
require('vendor/autoload.php');
/**
 * Created by PhpStorm.
 * User: bean
 * Date: 9/26/17
 * Time: 20:49
 */
use Container\Container;

$container = new Container();

$container->bind('SuperMan',function ($container,$moduleName){
    return new \test\SuperMan($container->make($moduleName));
});

$container->bind('XPower',function ($container){
    return new \test\XPower;
});

$superMan = $container->make('SuperMan',['XPower']);

$superMan->XPower();
//var_dump($superMan);