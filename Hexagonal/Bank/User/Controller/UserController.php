<?php

namespace Bank\User\Controller;


use Framework\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        return $this->view("user/index");
    }
}