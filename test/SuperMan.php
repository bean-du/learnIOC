<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/26 0026
 * Time: 下午 6:30
 */

namespace test;


class SuperMan
{
    protected $module;

    public function __construct(XPower $model)
    {
        $this->module = $model;
    }

    public function XPower()
    {
        $this->module->activate(['1' => 'test'])->shot();
    }
}
