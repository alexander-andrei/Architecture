<?php

namespace Presentation\Controllers\User;


use Framework\BaseController;
use Presentation\Models\User\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $user = $model->get("user_persistence")->find(array("id" => "1"));

        return $this->view("user/index", array("user" => $user));
    }

    public function test()
    {
        return $this->view("user/test");
    }
}