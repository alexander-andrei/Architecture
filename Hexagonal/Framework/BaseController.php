<?php

namespace Framework;

use Container\Container;

class BaseController
{
    private $_container;

    public function __construct()
    {
        $this->_container = new Container();
    }

    public function view($data)
    {
        $logic = $this->_container->get('controller_logic');

        return $logic->view($data);
    }
}