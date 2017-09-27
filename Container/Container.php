<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/26 0026
 * Time: 下午 5:46
 */

namespace Container;
use Closure;
use Container\ContainerContract;

class Container implements ContainerContract
{

    protected $binds;
    //
    protected $instances;


    public function bind($abstract,$concrete)
    {
        if ($concrete instanceof Closure){
            $this->binds[$abstract] = $concrete;
        }else{
            $this->instances[$abstract] = $concrete;
        }
    }

    public function make($abstract,$parameters = [])
    {
        if (isset($this->instances[$abstract])){
            return $this->instances[$abstract];
        }

        array_unshift($parameters,$this);
        //var_dump($parameters);exit;
        return call_user_func_array($this->binds[$abstract],$parameters);
    }
}