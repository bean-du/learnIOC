<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/26 0026
 * Time: 下午 6:34
 */

namespace test;

class XPower implements SuperModel
{
    protected  $target;
    public function activate(array $target)
    {
        $this->target = $target;
        return $this;
    }

    public function shot()
    {
        var_dump('this is from XPower module :'.$this->target);
    }
}