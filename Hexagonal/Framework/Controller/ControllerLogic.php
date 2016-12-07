<?php

namespace Framework\Controller;


use Framework\Model\ModelInterface;
use Framework\View\ViewInterface;

class ControllerLogic implements ControllerInterface
{
    private $_model;
    private $_view;

    public function __construct(ModelInterface $model, ViewInterface $view)
    {
        $this->_model = $model;
        $this->_view = $view;
    }

    public function view($data, $params)
    {
        return $this->_view->createPage($data, $params);
    }
}