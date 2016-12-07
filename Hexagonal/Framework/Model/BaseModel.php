<?php

namespace Framework\Model;


use Container\Container;

class BaseModel implements ModelInterface
{
    private $_container;

    public function __construct()
    {
        $this->_container = new Container();
    }

    public function get($model)
    {
        return $this->_container->get($model);
    }
}