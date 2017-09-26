<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/26 0026
 * Time: 下午 5:51
 */
namespace Container;

interface ContainerContract {
    // 绑定
    public function bind($abstract,$concrete);
    // 创建一个实例
    public function make($abstract, $parameters = []);

}