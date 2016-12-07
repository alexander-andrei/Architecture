<?php

namespace Framework\View;


class BaseView implements ViewInterface
{
    const VIEWS_PATH = "/Presentation/Views/";

    public function createPage($data)
    {
        $path = MAIN_DIR . self::VIEWS_PATH . $data . '.php';

        include ($path);
    }
}