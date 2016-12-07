<?php

namespace Presentation\Controllers\User;


use Bank\User\Entity\UserEntity;
use Framework\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        $user = $this->getService("user_persistence")->find(array("id" => "1"));

        return $this->view("user/index", array("user" => $user));
    }

    public function register($query = null)
    {
        parse_str($query, $qParams);

        $user = new UserEntity();
        $user->setId(1);
        $user->setName($qParams['name']);
        $user->setAccountNo($qParams['accountNo']);

        $registerer = $this->getService('user_register');

        $registerer->register($user);
    }
}